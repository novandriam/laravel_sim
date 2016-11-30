<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
if($_GET) {
		
	# TAMPILKAN DATA PEMASOK UNTUK DIEDIT
	$KodeEdit= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM pemasok WHERE kode_pemasok='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data supplier salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['kode_pemasok'];
	$dataNpwp	= $dataShow['npwp'];
	$dataNama	= $dataShow['nama'];
	$dataAlamat	= $dataShow['alamat'];
	$dataKota	= $dataShow['kota'];
	$dataNegara	= $dataShow['negara'];
	$dataTelp	= $dataShow['notelp'];
	$dataFax	= $dataShow['nofax'];
	$dataEmail	= $dataShow['email'];
	$dataStatus	= $dataShow['status'];	
} // Penutup GET
?>
<form action="?page=Edit-Supplier&Act=Update" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>LIHAT DATA PEMASOK </h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>Kode</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtKode" value="<?php echo $dataKode; ?>" size="8" maxlength="4"  readonly="readonly"/>
   </td></tr>
	<tr>
	  <td><b>NPWP/ID </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataNpwp; ?></td></tr>
	<tr>
	  <td><b>Nama Pemasok </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataNama; ?></td></tr>

	<tr>
      <td><b>Alamat Lengkap </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataAlamat; ?></td>
    </tr>
    <tr>
      <td><b>Kota</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataKota; ?></td>
    </tr>
    <tr>
      <td><b>Negara</b></td>
	  <td><b>:</b></td>
      <td><?php echo $dataNegara; ?></td>
    </tr>
	<tr>
      <td><b>No Telpon </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataTelp; ?></td>
    </tr>
	<tr>
      <td><b>No Fax</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataFax; ?></td>
    </tr>
	<tr>
      <td><b>Email</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataEmail; ?></td>
    </tr>
<tr>
	  <td><strong>Status</strong></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataStatus; ?></td>
    </tr>

	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><a href="?page=Edit-Supplier&amp;Kode=<?php echo $dataKode; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0"  />Edit</a>&nbsp;&nbsp;
        <a href="?page=Delete-Supplier&amp;Kode=<?php echo $dataKode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" />Delete</a>&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>

    </tr>
</table>
</form>

