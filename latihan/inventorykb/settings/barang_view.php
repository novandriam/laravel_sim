<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
	# TAMPILKAN DATA PENERIMA UNTUK DIEDIT
	
	# TAMPILKAN DATA UNTUK DIEDIT
	$KodeView= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT T1.*, T2.* FROM barang as T1, kategori as T2 WHERE T1.kd_barang='$KodeView' AND T1.kd_kategori = T2.kd_kategori";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data barang salah : ".mysql_error());
	$dataShow= mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['kd_barang'];
	$dataNama	= $dataShow['nm_barang'];
	$dataType	= $dataShow['type'];
	$dataSpec	= $dataShow['spec'];
	$dataStok	= $dataShow['stok'];
	$dataSatuan	= $dataShow['satuan'];
	$dataKet	= $dataShow['ket'];
	$dataKategori	= $dataShow['nm_kategori'];
	$dataStatus	= $dataShow['aktif'];

} // Penutup GET
?>
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>DATA BARANG</h2></td>
	</tr>
    <tr>
	  <td width="15%"><b>Kode barang</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><?php echo $dataKode; ?></td>
      </tr>
	<tr>
	  <td width="15%"><b>Nama Barang</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><?php echo $dataNama; ?></td>
      </tr>
	<tr>
      <td><b>Type</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataType; ?></td>
    </tr>
    <tr>
      <td><b>Spesifikasi</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataSpec; ?></td>
    </tr>
    <tr>
      <td><b>Stok barang</b></td>
	  <td><b>:</b></td>
      <td><?php echo $dataStok; ?></td>
    </tr>
	<tr>
      <td><b>Satuan </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataSatuan; ?></td>
    </tr>
	<tr>
      <td><b>Keterangan</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataKet; ?></td>
    </tr>
	<tr>
      <td><b>Kategori</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataKategori; ?></td>
    </tr>
    <tr>
      <td><b>Status</b></td>
	  <td><b>:</b></td>
	  <td><?php  if ($dataStatus == 1) echo "Aktif";
      else echo "Tidak Aktif"; ?></td>
    </tr>

	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><a href="?page=Edit-Barang&amp;Kode=<?php echo $dataKode; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0"  /></a>Edit&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Kembali" onclick="self.history.back()" /></td>

    </tr>
</table>

