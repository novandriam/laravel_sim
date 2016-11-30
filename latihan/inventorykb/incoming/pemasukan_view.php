<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
		
	# TAMPILKAN DATA PEMASOK UNTUK DIEDIT
	$KodeView= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT pemasukan.*, pemasok.kode_pemasok, pemasok.nama, catatan.* FROM pemasukan inner join pemasok on pemasukan.pemasok=pemasok.kode_pemasok inner join catatan on pemasukan.catatan=catatan.kd_catatan WHERE pemasukan.nomor='$KodeView'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data pemasukan salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['no_bpb'];
	$dataTglbpb	= $dataShow['tgl_bpb'];
	$dataPemasok	= $dataShow['nama'];
	$dataNoinvoice	= $dataShow['no_invoice'];
	$dataTglinvoice	= $dataShow['tgl_invoice'];
	$dataNokontrak	= $dataShow['no_kontrak'];
	$dataTglkontrak	= $dataShow['tgl_kontrak'];
	$dataNodo	= $dataShow['no_do'];
	$dataCatatan	= $dataShow['nm_catatan'];
	$dataJenisdokpab	= $dataShow['jenis_dokpab'];
	$dataNodokpab	= $dataShow['no_dokpab'];
	$dataTgldokpab	= $dataShow['tgl_dokpab'];
	$dataHarga	= $dataShow['harga'];
	$dataJenisKemasan	= $dataShow['jenis_kemasan'];
	$dataMerekKemasan	= $dataShow['merek_kemasan'];
	$dataJmlKemasan	= $dataShow['jumlah_kemasan'];
	$dataBrutto	= $dataShow['brutto'];
	$dataNetto	= $dataShow['netto'];
	$dataVolume	= $dataShow['volume'];
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

<form action="?page=Edit-Supplier&Act=Update" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3" align="right"><h2>DATA PEMASUKAN BARANG DARI PEMASOK KE INCOMING</h2></td>
	</tr>
	<tr>
	  <td width="20%"><b>Nomor/Tanggal BPB</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="79%"><?php echo $dataKode; ?>&nbsp;tanggal&nbsp;<?php echo IndonesiaTgl($dataTglbpb); ?></td></tr>
    <tr>
	  <td><b>Nama Pemasok </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataPemasok; ?></td></tr>
	<tr>
      <td><b>Nomor/Tanggal Invoice </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataNoinvoice; ?>&nbsp;tanggal&nbsp;<?php echo IndonesiaTgl($dataTglinvoice); ?></td>
    </tr>
    <tr>
      <td><b>Nomor/Tanggal Kontrak </b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataNokontrak; ?>&nbsp;tanggal&nbsp;<?php echo IndonesiaTgl($dataTglkontrak); ?></td>
    </tr>
   
    <tr>
      <td><b>Nomor P/O</b></td>
	  <td><b>:</b></td>
      <td><?php echo $dataNodo; ?></td>
    </tr>
	<tr>
      <td><b>Catatan</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataCatatan; ?></td>
    </tr>
	<tr>
      <td><b>Jenis,Nomor,Tanggal Dokumen Pabean</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataJenisdokpab; ?> :&nbsp;<?php echo $dataNodokpab; ?>&nbsp;tanggal&nbsp;<?php echo IndonesiaTgl($dataTgldokpab); ?></td>
    </tr>
	
    	<tr>
      <td><b>Nilai CIF (dalam USD)</b></td>
	  <td><b>:</b></td>
	  <td><?php echo format_angka($dataHarga); ?></td>
    </tr>

	<tr>
      <td><b>Jenis Kemasan</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataJenisKemasan; ?></td>
    </tr>
	<tr>
      <td><b>Merek Kemasan</b></td>
	  <td><b>:</b></td>
	  <td><?php echo $dataMerekKemasan; ?></td>
    </tr>
	<tr>
      <td><b>Jumlah Kemasan</b></td>
	  <td><b>:</b></td>
	  <td><?php echo format_angka($dataJmlKemasan); ?></td>
    </tr>
	<tr>
      <td><b>Total Brutto (kg)</b></td>
	  <td><b>:</b></td>
	  <td><?php echo format_angka($dataBrutto); ?></td>
    </tr>
	<tr>
      <td><b>Total Netto (kg)</b></td>
	  <td><b>:</b></td>
	  <td><?php echo format_angka($dataNetto); ?></td>
    </tr>
	<tr>
      <td><b>Total Volume (m3)</b></td>
	  <td><b>:</b></td>
	  <td><?php echo format_angka($dataBrutto); ?></td>
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
&nbsp;&nbsp;&nbsp;<input type="button" value="Kembali" onclick="self.history.back()" />&nbsp;&nbsp;&nbsp; <a href="nota/bpb.php?nomor=<?php echo $KodeView; ?>" target="_new" alt="Cetak BPB" onclick="return confirm('ANDA YAKIN AKAN MENCETAK BPB INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak BPB" />Cetak</a></td>
    </tr>
</table>
<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="10" align="left">DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="150" align="left" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="220" align="left" bgcolor="#CCCCCC"><b>Nama Barang </b></td>
    <td width="50" align="center" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td width="110" align="right" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="35" align="center" bgcolor="#CCCCCC"><strong>Valuta</strong> </td>
    <td width="80" align="right" bgcolor="#CCCCCC"><b>Nilai</b></td>
    <td width="80" align="right" bgcolor="#CCCCCC"><b>Netto (kg)</b></td>
    <td width="80" align="right" bgcolor="#CCCCCC"><b>Volume (m3)</b></td>
   
  
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, pemasukan_detail.*
		FROM pemasukan_detail inner join barang on pemasukan_detail.kode=barang.kd_barang
		WHERE pemasukan_detail.nomor='$KodeView'
		ORDER BY pemasukan_detail.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$nilaiBrg = 0; $qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	$nilaiBrg = $nilaiBrg + $tmpRow['nilai'];
	
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="left"><b><?php echo $tmpRow['kode']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></td>
    <td align="center"><?php echo $tmpRow['valuta']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['nilai']); ?></td>
     <td align="right"><?php echo format_angka($tmpRow['netto_detail']); ?></td>
    <td align="right"><?php echo format_angka($tmpRow['volume_detail']); ?></td>

  </tr>
<?php 
}?>
  <tr>
    <td colspan="3" align="right"><b>Grand Total : </b></td>
    <td colspan="3" align="left"><b>Jumlah brg: <?php echo format_angka($qtyBrg); ?></b></td>
    <td colspan="4" align="left"><b>Nilai brg: <?php echo format_angka($nilaiBrg); ?></b></td>
    </tr>
</table>
</form>

