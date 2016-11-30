<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
		
	# TAMPILKAN DATA ADJUSTMENT UNTUK DIEDIT
	$KodeView= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM adjusment WHERE nomor='$KodeView'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data adjustment salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['no_adj'];
	$dataTgladj	= $dataShow['tgl_adj'];
	$dataTglstock	= $dataShow['tgl_stock'];
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

<form action="?page=Edit-Penyesuaian&Act=Update" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>DATA UTAMA ADJUSTMENT</h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>No Adj</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><?php echo $dataKode; ?></td></tr>
    <tr>
	  <td><b>Tgl Adj</b></td>
	  <td><b>:</b></td>
	  <td><?php echo IndonesiaTgl($dataTgladj); ?></td></tr>
    <tr>
      <td><b>Tgl Stock Opname</b></td>
	  <td><b>:</b></td>
	  <td><?php echo IndonesiaTgl($dataTglstock); ?></td>
    </tr>

	<tr>
	  <td><b>Keterangan</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataKet; ?></td></tr>
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
	  <td><input type="button" value="Kembali" onclick="self.history.back()" />&nbsp;&nbsp;&nbsp; <a href="nota/adjustment.php?nomor=<?php echo $KodeView; ?>" target="_new" alt="Cetak ADJ" onclick="return confirm('ANDA YAKIN AKAN MENCETAK ADJ INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak ADJ" /></a>Cetak</td>
    </tr>
</table>
<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="8"><span class="style1"> DETAIL BARANG</span></th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="150" align="left" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="400" bgcolor="#CCCCCC" align="left"><b>Nama Barang </b></td>
    <td width="50" align="center" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td width="110" align="right" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="150" align="left" bgcolor="#CCCCCC"><b>Catatan</b></td>
  
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang, barang.nm_barang, barang.satuan, adjusment_detail.*
		FROM adjusment_detail inner join barang on adjusment_detail.kode = barang.kd_barang
		WHERE adjusment_detail.nomor='$KodeView'
		ORDER BY adjusment_detail.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="left"><b><?php echo $tmpRow['kd_barang']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></td>
    <td align="left"><?php echo $tmpRow['cat']; ?></td>
   
  </tr>
<?php 
}?>
  <tr>
    <td colspan="3" align="right"><b>Grand Total : </b></td>
    <td colspan="3" align="left"><b>Jumlah brg: <?php echo format_angka($qtyBrg); ?></b></td>
    </tr>
</table>
</form>

