<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
		
	# TAMPILKAN DATA  UNTUK DIEDIT
	$KodeView= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM incoming_terima WHERE nomor='$KodeView'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data pemakaian salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataLpb	= $dataShow['no_lpb'];
	$dataTgllpb	= $dataShow['tgl_lpb'];
	$dataDari	= $dataShow['dari'];
	$dataSpb	= $dataShow['no_spb'];
	$dataTglspb	= $dataShow['tgl_spb'];
	$dataDept	= $dataShow['dept'];
	$dataPpc	= $dataShow['name_ppc'];
	$dataCatatan= $dataShow['catatan'];
	$dataUsertrt= $dataShow['user_trt'];
	$dataUser	= $dataShow['userid'];
	
} // Penutup GET
?>
<form action="?page=Edit-Pemakaian&Act=Update" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>DATA LPB INCOMING</h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>No LPB</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><?php echo $dataLpb; ?></td></tr>
    <tr>
      <td><b>Tgl LPB</b></td>
	  <td><b>:</b></td>
	  <td><?php echo IndonesiaTgl($dataTgllpb); ?></td>
    </tr>
	<tr>
	  <td><b>Pengirim</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataDari; ?></td></tr>
      <tr>
	  <td><b>No SPB</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataSpb; ?></td></tr>
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
	  <td><strong>Dikirim oleh</strong></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataUsertrt; ?></td>
    </tr>
<tr>
	  <td><strong>Diterima oleh</strong></td>
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
&nbsp;&nbsp;&nbsp;<input type="button" value="Kembali" onclick="self.history.back()" />&nbsp;&nbsp;&nbsp; <a href="nota/incoming_lpb.php?nomor=<?php echo $KodeView; ?>" target="_new" alt="Cetak LPB" onclick="return confirm('ANDA YAKIN AKAN MENCETAK LPB INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak LPB" />Cetak LPB</a></td>
    </tr>
</table>
<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="8"  align="left"> DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="150" align="left" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="200" bgcolor="#CCCCCC" align="left"><b>Nama Barang </b></td>
    <td width="50" align="center" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td width="80" align="right" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="250" align="left" bgcolor="#CCCCCC"><b>Keterangan</b></td>
  
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, incoming_terima_detail.*
		FROM incoming_terima_detail inner join barang on incoming_terima_detail.kode=barang.kd_barang
		WHERE incoming_terima_detail.nomor='$KodeView'
		ORDER BY incoming_terima_detail.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="left"><b><?php echo $tmpRow['kode']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></td>
    <td align="left"><?php echo $tmpRow['ket']; ?></td>
   
  </tr>
<?php 
}?>
  <tr>
    <td colspan="3" align="right"><b>Grand Total : </b></td>
    <td colspan="3" align="left"><b>Jumlah brg: <?php echo format_angka($qtyBrg); ?></b></td>
    </tr>
</table>
</form>

