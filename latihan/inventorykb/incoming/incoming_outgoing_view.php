<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
		
	# TAMPILKAN DATA  UNTUK DIEDIT
	$KodeView= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM incoming_outgoing WHERE nomor='$KodeView'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data penyerahan salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['no_spb'];
	$dataTglspb	= $dataShow['tgl_spb'];
	$dataDept	= $dataShow['dept'];
	$dataPpc	= $dataShow['name_ppc'];
	$dataCatatan	= $dataShow['catatan'];
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

<form action="?page=Edit-Pemakaian&Act=Update" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>DATA PENYERAHAN BARANG DARI INCOMING KE OUTGOING</h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>No SPB</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><?php echo $dataKode; ?></td></tr>
    <tr>
	  <td><b>Tgl SPB </b></td>
	  <td><b>:</b></td>
	  <td><?php echo IndonesiaTgl($dataTglspb); ?></td></tr>
	<tr>

    <tr>
      <td><b>Departemen</b></td>
	  <td><b>:</b></td>
      <td><?php echo $dataDept; ?></td>
    </tr>
	<tr>
      <td><b>PIC</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataPpc; ?></td>
    </tr>
	<tr>
      <td><b>Catatan</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataCatatan; ?></td>
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
&nbsp;&nbsp;&nbsp;<input type="button" value="Kembali" onclick="self.history.back()" />&nbsp;&nbsp;&nbsp; <a href="nota/incoming-outgoing_spb.php?nomor=<?php echo $KodeView; ?>" target="_new" alt="Cetak SPB" onclick="return confirm('ANDA YAKIN AKAN MENCETAK SPB INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak SPB" />Cetak</a></td>
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
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, incoming_outgoing_detail.*
		FROM incoming_outgoing_detail inner join barang on incoming_outgoing_detail.kode=barang.kd_barang
		WHERE incoming_outgoing_detail.nomor='$KodeView'
		ORDER BY incoming_outgoing_detail.id ";
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

