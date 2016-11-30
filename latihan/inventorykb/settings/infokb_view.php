<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
	# TAMPILKAN DATA PENERIMA UNTUK DIEDIT
	
	$sqlShow = "SELECT * FROM infokb ";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data kb salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataID	= $dataShow['id'];
	$dataKode	= $dataShow['kode'];
	$dataNama	= $dataShow['nama'];
	$dataAlamat	= $dataShow['alamat'];
	$dataProp	= $dataShow['prop'];
	$dataKota	= $dataShow['kota'];
	$dataNpwp	= $dataShow['npwp'];
	$dataTelp	= $dataShow['telp'];
	$dataFax	= $dataShow['fax'];
	$dataSkepkb	= $dataShow['skepkb'];
	$dataTglskep	= $dataShow['tglskep'];
	
} // Penutup GET
?>
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>DATA PERUSAHAAN</h2></td>
	</tr>
    <tr>
	  <td width="15%"><b>Kode Perusahaan</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><?php echo $dataKode; ?></td></tr>
	<tr>
	  <td><b>Nama Perusahaan</b></td>
	  <td ><b>:</b></td>
	  <td ><?php echo $dataNama; ?></td></tr>
	<tr>
      <td><b>Alamat Lengkap </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataAlamat; ?></td>
    </tr>
    <tr>
      <td><b>Propinsi</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataProp; ?></td>
    </tr>
    <tr>
      <td><b>Kota</b></td>
	  <td><b>:</b></td>
      <td><?php echo $dataKota; ?></td>
    </tr>
	<tr>
      <td><b>No Telpon </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataTelp; ?></td>
    </tr>
    <tr>
      <td><b>NPWP </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataNpwp; ?></td>
    </tr>
	<tr>
      <td><b>No Fax</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataFax; ?></td>
    </tr>
	<tr>
      <td><b>Skep Pendirian KB</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataSkepkb; ?></td>
    </tr>
	<tr>
      <td><b>Tgl Skep</b></td>
	  <td><b>:</b></td>
	  <td><?php echo IndonesiaTgl($dataTglskep); ?></td>
    </tr>
	

	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><a href="?page=Edit-Perusahaan&amp;ID=<?php echo $dataID; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0"  />Edit</a>&nbsp;&nbsp;&nbsp;<input type="button" value="Kembali" onclick="self.history.back()" /></td>

    </tr>
</table>

