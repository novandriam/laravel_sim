<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtKode'])=="") {
			$message[] = "<b>Kode barang</b> tidak boleh kosong !";		
		}

		if (trim($_POST['txtBarang'])=="") {
			$message[] = "<b>Nama barang</b> tidak boleh kosong !";		
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
		$txtKode	= $_POST['txtKode'];
		$txtKode	= str_replace("'","&acute;",$txtKode);
		$txtBarang	= $_POST['txtBarang'];
		$txtBarang	= str_replace("'","&acute;",$txtBarang);
		$txtType	= $_POST['txtType'];
		$txtType	= str_replace("'","&acute;",$txtType);
		$txtSpec	= $_POST['txtSpec'];
		$txtSpec	= str_replace("'","&acute;",$txtSpec);
		$txtStok	= $_POST['txtStok'];
		$txtStok	= str_replace("'","&acute;",$txtStok);
		$txtKeterangan	= $_POST['txtKeterangan'];
		$txtKeterangan	= str_replace("'","&acute;",$txtKeterangan);
		$cmbKategori	= $_POST['cmbKategori'];
		$cmbSatuan	= $_POST['cmbSatuan'];
		$status = (isset($_POST['status'])); if ($status == 1 ){ $status = 1;}else {$status = 0; };
 		
		# Validasi Nama barang, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM barang WHERE kd_barang='$txtKode'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, barang dengan kode <b> $txtKode </b> sudah ada, ganti dengan yang lain";
		}

		

		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			
			$qrySave=mysql_query("INSERT INTO barang SET kd_barang='$txtKode', nm_barang='$txtBarang', type='$txtType', spec='$txtSpec', ket='$txtKeterangan', stok='$txtStok', satuan='$cmbSatuan', kd_kategori='$cmbKategori', aktif='$status'") or die ("Gagal query".mysql_error());
			if($qrySave){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data barang dengan kode $txtKode dan nama $txtBarang', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=Data-Barang'>";
				
			}
			exit;
		}	
		
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
	} // Penutup POST
		
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= isset($_POST['txtKode']) ? $_POST['txtKode'] : '';
	$dataNama	= isset($_POST['txtBarang']) ? $_POST['txtBarang'] : '';
	$dataType	= isset($_POST['txtType']) ? $_POST['txtType'] : '';
	$dataSpec	= isset($_POST['txtSpec']) ? $_POST['txtSpec'] : '';
	$dataStok	= isset($_POST['txtStok']) ? $_POST['txtStok'] : '0';
	$dataKeterangan	= isset($_POST['txtKeterangan']) ? $_POST['txtKeterangan'] : '';
	$dataKategori	= isset($_POST['cmbKategori']) ? $_POST['cmbKategori'] : '';
	$dataSatuan	= isset($_POST['cmbSatuan']) ? $_POST['cmbSatuan'] : '';
} // Penutup GET
?>
<form action="?page=Add-Barang" method="post" name="frmadd" target="_self">
<table width="100%" cellpadding="2" cellspacing="1" class="table-list" style="margin-top:0px;">
	<tr>
	  <td colspan="3" align="left"><h2>KELOLA DATA AWAL BARANG</h2> </td>
	</tr>
	<tr>
	  <td width="15%"><b>Kode Barang</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtKode" value="<?php echo $dataKode; ?>" onKeyPress="return tabE(this,event)" size="20" /></td></tr>
	<tr>
	  <td><b>Nama Barang </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtBarang" value="<?php echo $dataNama; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>
	<tr>
	  <td><b>Type</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtType" value="<?php echo $dataType; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>
	<tr>
	  <td><b>Spesifikasi</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtSpec" value="<?php echo $dataSpec; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>

	
    <tr>
      <td colspan="3"><b></b><b></b>        <input name="txtStok" type="hidden" value="<?php echo $dataStok; ?>" size="10" onKeyPress="return tabE(this,event)" readonly="readonly" maxlength="30" /></td>
    </tr>
    <tr>
      <td><b>Satuan</b></td>
	  <td><b>:</b></td>
	  <td><select name="cmbSatuan" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT * FROM satuan ORDER BY kode";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['jenis']== $_POST['cmbSatuan']) {
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
	  <td><input name="txtKeterangan" value="<?php echo $dataKeterangan; ?>" size="100" maxlength="200" onKeyPress="return tabE(this,event)" /></td>
    </tr>
	<tr>
      <td><strong>Kategori Barang </strong></td>
	  <td><b>:</b></td>
	  <td><select name="cmbKategori" onKeyPress="return tabE(this,event)">
          <option value="BLANK"> </option>
          <?php
	  $dataSql = "SELECT * FROM kategori ORDER BY kd_kategori";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['kd_kategori']== $_POST['cmbKategori']) {
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
	  <td><input type="checkbox" checked="checked" name="status"  value="1" >&nbsp;Ya&nbsp;</td>
	</tr>
	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onclick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
    </tr>
</table>
</form>
