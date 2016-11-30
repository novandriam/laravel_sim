 <?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
$bagian = "/OUTGOING";
$today = date("Y");
$tahun = "LPB-$today";
$id = 'LPB-';
$query = "SELECT max(no_lpb) AS last FROM outgoing_terima WHERE no_lpb LIKE '$tahun%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
// baca nomor urut transaksi dari id transaksi terakhir
$lastNoUrut = substr($lastNoTransaksi, 8, 6); 
// nomor urut ditambah 1
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $id.$today.sprintf('%06s', $nextNoUrut).$bagian;
if($_GET) {
		
	# TAMPILKAN DATA  UNTUK DIEDIT
	$KodeView= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM tmp_outgoing_terima WHERE nomor='$KodeView'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data penerimaan salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataNomor	= $dataShow['nomor'];
	$dataDari	= $dataShow['dari'];
	$dataSpb	= $dataShow['no_spb'];
	$dataTglspb	= $dataShow['tgl_spb'];
	$dataDept	= $dataShow['dept'];
	$dataPpc	= $dataShow['name_ppc'];
	$dataCatatan	= $dataShow['catatan'];
	$dataUser	= $dataShow['user_trt'];
	// ============================================================================
	if($_POST) {
	# JIKA TOMBOL SIMPAN DIKLIK
	if(isset($_POST['btnSave'])){
		$message = array();
		if (trim($_POST['txtLpb'])=="") {
			$message[] = "Nomor LPB belum diisi!";		
		}

		if (trim($_POST['cmbTgllpb'])=="") {
			$message[] = "Tanggal LPB belum diisi, pilih pada combo !";		
		}
		# Baca variabel
		$txtLpb= $_POST['txtLpb'];
		$txtLpb= str_replace("'","&acute;",$txtLpb);
		$cmbTgllpb =$_POST['cmbTgllpb'];
		$txtNomor= $_POST['txtNomor'];
		$txtNomor= str_replace("'","&acute;",$txtNomor);
		$txtDari= $_POST['txtDari'];
		$txtDari= str_replace("'","&acute;",$txtDari);
		$txtSpb= $_POST['txtSpb'];
		$txtSpb= str_replace("'","&acute;",$txtSpb);
		$txtTglspb= $_POST['txtTglspb'];
		$txtTglspb= str_replace("'","&acute;",$txtTglspb);
		$txtDept= $_POST['txtDept'];
		$txtDept= str_replace("'","&acute;",$txtDept);
		$txtPpc= $_POST['txtPpc'];
		$txtPpc= str_replace("'","&acute;",$txtPpc);
		$txtCatatan	= $_POST['txtCatatan'];
		$txtCatatan = str_replace("'","&acute;",$txtCatatan);
		$txtUser	= $_POST['txtUser'];
		$txtUser = str_replace("'","&acute;",$txtUser);
		
		# Validasi ID Record, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM outgoing_terima WHERE nomor='$kodeBaru'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, data dengan ID Record<b> $kodeBaru </b> sudah ada, kembali ke menu utama untuk mendapatkan ID baru";
		}
		# Validasi Nomor dan tanggal LPB, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM outgoing_terima WHERE no_lpb='$txtLpb' and tgl_lpb='".InggrisTgl($_POST['cmbTgllpb'])."'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, Nomor SPB <b> $txtLpb </b> tanggal <b> $cmbTgllpb </b> sudah ada, mohon diganti";
		}				

		
		# Jika jumlah error message tidak ada
		if(count($message)==0){			
		$kodeBaru	= buatKode("outgoing_terima", "000");
			$qrySave=mysql_query("INSERT INTO outgoing_terima SET nomor='$kodeBaru', no_lpb='$txtLpb', tgl_lpb='".InggrisTgl($_POST['cmbTgllpb'])."', dari='$txtDari', no_spb='$txtSpb', tgl_spb='".InggrisTgl($_POST['txtTglspb'])."', dept='$txtDept', name_ppc='$txtPpc', catatan='$txtCatatan', user_trt='$txtUser', userid='".$_SESSION['SES_LOGIN']."'") or die ("Gagal query".mysql_error());
			if($qrySave){				
				# Ambil semua data barang yang dipilih, berdasarkan user yg login
				$tmpSql ="SELECT * FROM tmp_outgoing_terima_detail WHERE nomor='$txtNomor'";
				$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
				while ($tmpRow = mysql_fetch_array($tmpQry)) {
					// Masukkan semua barang yang udah diisi ke tabel transfer detail
					$itemSql = "INSERT INTO outgoing_terima_detail SET nomor='$kodeBaru', dari='$tmpRow[dari]', no_lpb='$txtLpb', tgl_lpb='".InggrisTgl($_POST['cmbTgllpb'])."', kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]', ket='$tmpRow[ket]'"; 
		  			mysql_query($itemSql, $koneksidb) or die ("Gagal Query Simpan detail barang".mysql_error());

					// Update stok saldo barang jadi
					$barangSql = "UPDATE barang SET stok=stok + $tmpRow[jumlah] WHERE kd_barang='$tmpRow[kode]' and kd_kategori='K02'";
		  			mysql_query($barangSql, $koneksidb) or die ("Gagal Query Edit Stok".mysql_error());
	// Update stok saldo barang sisa/scrap
					$barangSql = "UPDATE barang SET stok=stok + $tmpRow[jumlah] WHERE kd_barang='$tmpRow[kode]' and kd_kategori='K04'";
		  			mysql_query($barangSql, $koneksidb) or die ("Gagal Query Edit Stok".mysql_error());
			
			// update stok di stock outgoing
			$pemasukanSql ="SELECT * FROM stock_pengeluaran WHERE kode='$tmpRow[kode]'";
			$pemasukanQry = mysql_query($pemasukanSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$pemasukanQty = mysql_num_rows($pemasukanQry);
			if ($pemasukanQty == 1) {

					$updateSql = "UPDATE stock_pengeluaran SET jumlah=jumlah + $tmpRow[jumlah] WHERE kode='$tmpRow[kode]'";
		  			mysql_query($updateSql, $koneksidb) or die ("Gagal Query Edit Stok".mysql_error());
			}
			else {
				$insertSql = "INSERT INTO stock_pengeluaran SET kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]'";
				mysql_query($insertSql, $koneksidb) or die ("Gagal Query detail barang : ".mysql_error());
			}
			// update stok di jumlah di stock pemasukan atau stock pengeluaran
			$terimaSql ="SELECT * FROM tmp_outgoing_terima WHERE nomor='$tmpRow[nomor]' and dari='PRODUKSI'";
			$terimaQry = mysql_query($terimaSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$terimaQty = mysql_num_rows($terimaQry);
			if ($terimaQty == 1) {

					$updateSql = "UPDATE stock_produksi SET jumlah=jumlah - $tmpRow[jumlah] WHERE kode='$tmpRow[kode]'";
		  			mysql_query($updateSql, $koneksidb) or die ("Gagal Query Edit Stok".mysql_error());
			}
			else {
					$updateSql = "UPDATE stock_pemasukan SET jumlah=jumlah - $tmpRow[jumlah] WHERE kode='$tmpRow[kode]'";
		  			mysql_query($updateSql, $koneksidb) or die ("Gagal Query Edit Stok".mysql_error());
			}

				}
				# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("DELETE FROM tmp_outgoing_terima WHERE nomor='$txtNomor'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				mysql_query("DELETE FROM tmp_outgoing_terima_detail WHERE nomor='$txtNomor'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());

$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menerima barang OUTGOING dengan nomor LPB: $txtLpb dan tanggal $cmbTgllpb', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Outgoing-Terima-Data&Act=Success'>";
				
			}
			else{
				$message[] = "Gagal penyimpanan ke database";
			}
		}	
	}  
	// ============================================================================
# JIKA ADA PESAN ERROR DARI VALIDASI
	// (Form Kosong, atau Duplikat ada), Ditampilkan lewat kode ini
	if (! count($message)==0 ){
		echo "<div class='mssgBox'>";
		echo "<img src='images/attention.png' class='imgBox'> <hr>";
			$Num=0;
			foreach ($message as $indeks=>$pesan_tampil) { 
			$Num++;
				echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
			} 
		echo "</div> <br>"; 
	}
	}
} // Penutup GET
# TAMPILKAN DATA KE FORM
$nomorTransaksi = buatKode("outgoing_terima", "000");
$dataLpb		= isset($_POST['txtLpb']) ? $_POST['txtLpb'] : '';
$tglLpb		 	= isset($_POST['cmbTgllpb']) ? $_POST['cmbTgllpb'] : date('d-m-Y');

?>
<style type="text/css">
<!--
.style1 {
	color: #0000CC;
	font-weight: bold;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>

<form action="?page=Outgoing-Terima-View" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3" align="right"><h2>DATA PENERIMAAN BARANG (OUTGOING)</h2></td>
	</tr>
   <tr>
	  <td colspan="3"><input id="txtNomorLpb" type="hidden" value="<?php echo $nomorTransaksi; ?>" size="10" maxlength="10" readonly="readonly"/></td></tr>
	<tr>
	  <td width="30%"><b>Laporan Penerimaan Barang(LPB) </b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="69%"><input name="txtLpb" readonly="readonly" value="<?php echo $nextNoTransaksi; ?>" size="45" maxlength="100" /></td></tr>

	<tr>
      <td><b>Tanggal LPB</b></td>
	  <td><b>:</b></td>
	  <td><?php echo form_tanggal("cmbTgllpb",$tglLpb); ?></td>
    </tr>
   


	<tr>
	  <td colspan="3"><span class="style1">DATA PENGIRIMAN</span></td>
	</tr>
    
    <tr>
	  <td colspan="3"><input name="txtNomor" id="txtNomor" type="hidden" value="<?php echo $dataNomor; ?>" size="10" maxlength="10" readonly="readonly"/></td></tr>
    <tr>
	  <td width="15%"><b>Dari </b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtDari" type="text" id="txtDari" value="<?php echo $dataDari; ?>" size="50" readonly="readonly"/>
    </td></tr>

	<tr>
	  <td ><b>No SPB</b></td>
	  <td ><b>:</b></td>
	  <td ><input name="txtSpb" id="txtSpb" value="<?php echo $dataSpb; ?>" size="50" maxlength="100"  readonly="readonly"/></td></tr>
    <tr>
	  <td><b>Tgl SPB </b></td>
	  <td><b>:</b></td>
      <td ><input name="txtTglspb" id="txtTglspb" value="<?php echo IndonesiaTgl($dataTglspb); ?>" size="50" maxlength="100"  readonly="readonly"/></td></tr>
	<tr>

    <tr>
      <td><b>Dept. Tujuan</b></td>
	  <td><b>:</b></td>
<td ><input name="txtDept" id="txtDept" value="<?php echo $dataDept; ?>" size="50" maxlength="100"  readonly="readonly"/></td></tr>
      
	<tr>
      <td><b>PIC</b></td>
	  <td><b>:</b></td>
      <td ><input name="txtPpc" id="txtPpc" value="<?php echo $dataPpc; ?>" size="50" maxlength="100"  readonly="readonly"/></td></tr>

	<tr>
      <td><b>Catatan</b></td>
	  <td><b>:</b></td>
      <td ><input name="txtCatatan" id="txtCatatan" value="<?php echo $dataCatatan; ?>" size="50" maxlength="100"  readonly="readonly"/></td></tr>

<tr>
	  <td><strong>Send by</strong></td>
	  <td><b>:</b></td>
            <td ><input name="txtUser" id="txtUser" value="<?php echo $dataUser; ?>" size="50" maxlength="100"  readonly="readonly"/></td></tr>

<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
     <tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>
&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" />&nbsp;&nbsp;&nbsp; <input onclick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" name="btnSave" type="submit" style="cursor:pointer;" value="Terima Barang" /></td>
    </tr>
	
</table>
<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="8" align="left">DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="150" align="center" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="400" bgcolor="#CCCCCC"><b>Nama Barang </b></td>
    <td width="50" align="Center" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td width="110" align="center" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="150" align="center" bgcolor="#CCCCCC"><b>Keterangan</b></td>
  
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, tmp_outgoing_terima_detail.*
		FROM tmp_outgoing_terima_detail inner join barang on tmp_outgoing_terima_detail.kode=barang.kd_barang
		WHERE tmp_outgoing_terima_detail.nomor='$KodeView'
		ORDER BY tmp_outgoing_terima_detail.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="center"><b><?php echo $tmpRow['kode']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="center"><?php echo format_angka($tmpRow['jumlah']); ?></td>
    <td align="center"><?php echo $tmpRow['ket']; ?></td>
   
  </tr>
<?php 
}?>
  <tr>
    <td colspan="3" align="right"><b>Grand Total : </b></td>
    <td colspan="3" align="left"><b>Jumlah brg: <?php echo format_angka($qtyBrg); ?></b></td>
    </tr>
</table>
</form>

