<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
		
	# TAMPILKAN DATA KONVERSI UNTUK DIEDIT
	$KodeView= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow ="SELECT barang.kd_barang,barang.nm_barang, konversi.*
		FROM konversi inner join barang on konversi.kd_barang=barang.kd_barang
		WHERE konversi.id='$KodeView'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data konversi salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['id'];
	$dataKdbarang = $dataShow['kd_barang'];
	$dataNmbarang	= $dataShow['nm_barang'];
	$dataType	= $dataShow['type'];
	$dataSpec	= $dataShow['spec'];
	$dataKet	= $dataShow['ket'];
	$dataUser	= $dataShow['userid'];
	
} // Penutup GET
?>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>

<form action="?page=Konversi-Edit&Act=Update" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>DATA KONVERSI BARANG</h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>ID</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><?php echo $dataKode; ?></td></tr>
	<tr>
	  <td><b>Kd brg Jadi</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataKdbarang; ?></td></tr>
    <tr>
      <td><b>Nama</b></td>
	  <td><b>:</b></td>
      <td><?php echo $dataNmbarang; ?></td>
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
      <td><b>Keterangan</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataKet; ?></td>
    </tr>

<tr>
	  <td><strong>USER</strong></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataUser; ?></td>
    </tr>
<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    
	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>
&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" />&nbsp;&nbsp;&nbsp; </td>
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
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, konversi_detail.*
		FROM konversi_detail inner join barang on konversi_detail.kode=barang.kd_barang
		WHERE konversi_detail.kd_barang='$dataKdbarang'
		ORDER BY konversi_detail.id asc ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="center"><b><?php echo $tmpRow['kd_barang']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></td>
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

