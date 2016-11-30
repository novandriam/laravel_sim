<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
$KodeEdit= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtBarang'])=="") {
			$message[] = "Nama barang tidak boleh kosong !";		
		}
		if (trim($_POST['txtType'])=="") {
			$message[] = "<b>Type barang</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtSpec'])=="") {
			$message[] = "<b>Spesifikasi barang</b> agar diisi!";		
		}

		if (! is_numeric(trim($_POST['txtStok']))) {
			$message[] = "<b>Stok</b> barang harus diisi angka !";		
		}
		if (trim($_POST['cmbSatuan'])=="BLANK") {
			$message[] = "<b>Satuan Barang</b> belum dipilih !";		
		}
		if (trim($_POST['cmbKategori'])=="BLANK") {
			$message[] = "<b>Kategori Barang</b> belum dipilih !";		
		}

		
		# Baca Variabel Form
		$txtLama	= $_POST['txtLama'];
		$txtKode= $_POST['txtKode'];
		$txtKode= str_replace("'","&acute;",$txtKode);

		$txtBarang= $_POST['txtBarang'];
		$txtBarang= str_replace("'","&acute;",$txtBarang);
		$txtType	= $_POST['txtType'];
		$txtType	= str_replace("'","&acute;",$txtType);
		$txtSpec	= $_POST['txtSpec'];
		$txtSpec	= str_replace("'","&acute;",$txtSpec);
		$txtKeterangan	= $_POST['txtKeterangan'];
		$txtKeterangan	= str_replace("'","&acute;",$txtKeterangan);
		$cmbKategori	= $_POST['cmbKategori'];
		$cmbSatuan	= $_POST['cmbSatuan'];
		$Status	= $_POST['status'];
		
		# Validasi Nama barang, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM barang WHERE kd_barang='$txtKode' AND NOT(kd_barang='$txtLama')";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, barang dengan kode <b> $txtKode </b> sudah ada, ganti dengan yang lain";
		}
		
		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){	
			$qryUpdate=mysql_query("UPDATE barang SET nm_barang='$txtBarang', type='$txtType', spec='$txtSpec', ket='$txtKeterangan', satuan='$cmbSatuan', kd_kategori='$cmbKategori', aktif='$Status' WHERE kd_barang ='".$_POST['txtKode']."'") 
					   or die ("Gagal query update".mysql_error());
			if($qryUpdate){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Mengubah data barang dengan kode $KodeEdit dan nama $txtBarang', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				// Refresh
				echo "<meta http-equiv='refresh' content='0; url=?page=Data-Barang'>";
			}
			exit;
		}	
		
		# Jika ada error message ditemukan
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
	} // Penutup POST
	
	# TAMPILKAN DATA UNTUK DIEDIT
	$KodeEdit= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM barang WHERE kd_barang='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data barang salah : ".mysql_error());
	$dataShow= mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['kd_barang'];
	$dataNama	= isset($dataShow['nm_barang']) ?  $dataShow['nm_barang'] : $_POST['txtBarang'];
	$dataLama	= $dataShow['kd_barang'];
	$dataType	= isset($dataShow['type']) ?  $dataShow['type'] : $_POST['txtType'];
	$dataSpec	= isset($dataShow['spec']) ?  $dataShow['spec'] : $_POST['txtSpec'];
	$dataStok	= isset($dataShow['stok']) ?  $dataShow['stok'] : $_POST['txtStok'];
	$dataKeterangan	= isset($dataShow['ket']) ?  $dataShow['ket'] : $_POST['txtKeterangan'];
	$dataKategori	= isset($dataShow['kd_kategori']) ?  $dataShow['kd_kategori'] : $_POST['cmbKategori'];
	$dataSatuan	= isset($dataShow['satuan']) ?  $dataShow['satuan'] : $_POST['cmbSatuan'];
} // Penutup GET
?>
<form action="?page=Edit-Barang" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>UBAH DATA BARANG </h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>Kode Barang</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtKode" value="<?php echo $dataKode; ?>" size="8" maxlength="4"  readonly="readonly"/>
    <input name="txtLama" type="hidden" value="<?php echo $dataLama; ?>" /></td></tr>
	<tr>
	  <td><b>Nama Barang </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtBarang" type="text" value="<?php echo $dataNama; ?>" size="80" maxlength="100" />
      </td></tr>
	<tr>
	  <td><b>Type</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtType" value="<?php echo $dataType; ?>" size="80" maxlength="100" /></td>
	</tr>
	<tr>
	  <td><b>Spesifikasi</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtSpec" value="<?php echo $dataSpec; ?>" size="80" maxlength="100" /></td>
	</tr>

	<tr>
      <td><b>Stok</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtStok" value="<?php echo $dataStok; ?>" size="10" readonly="readonly" maxlength="30" /></td>
    </tr>
     <tr>
      <td><b>Satuan</b></td>
	  <td><b>:</b></td>
	  <td><select name="cmbSatuan">
          <option value="BLANK"> </option>
          
          <?php
	  $dataSql = "SELECT * FROM satuan ORDER BY kode";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['jenis']== $dataSatuan) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[jenis]' $cek>$dataRow[jenis]&nbsp;-&nbsp;$dataRow[nama]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>
	<tr>
      <td><b>Keterangan</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtKeterangan" value="<?php echo $dataKeterangan; ?>" size="100" maxlength="200" /></td>
    </tr>
	<tr>
      <td><strong>Kategori Barang </strong></td>
	  <td><b>:</b></td>
	  <td><select name="cmbKategori">
          <option value="BLANK"> </option>
          <?php
	  $dataSql = "SELECT * FROM kategori ORDER BY kd_kategori";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['kd_kategori']== $dataKategori) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[kd_kategori]' $cek>$dataRow[nm_kategori]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
	</tr>
    <tr>
      <td><b>Aktif</b></td>
	  <td><b>:</b></td>
	  <td><?php
    
      if ($dataShow['aktif'] == 1) echo "<input type='checkbox' name='status' value='1' checked> Ya";
      else echo "<input type='checkbox' name='status' value='1'> Ya";

      ?></td>
    </tr>
	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onclick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
    </tr>
</table>
</form>

