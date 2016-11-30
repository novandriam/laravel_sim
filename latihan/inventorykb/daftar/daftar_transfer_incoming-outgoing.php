<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

$SqlPeriode = ""; $startTgl=""; $endTgl="";

# Set Tanggal skrg
$tglStart 	= isset($_POST['cmbTglStart']) ? $_POST['cmbTglStart'] : date('d-m-Y');
$tglEnd 	= isset($_POST['cmbTglEnd']) ? $_POST['cmbTglEnd'] : date('d-m-Y');

# Jika Nomor Page (halaman) diklik
if($_GET) {
	if (isset($_POST['btnShow'])) {
		$SqlPeriode = "T2.tgl_spb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'";
	}
	else {
		$startTgl 	= isset($_GET['startTgl']) ? $_GET['startTgl'] : $tglStart;
		$endTgl 	= isset($_GET['endTgl']) ? $_GET['endTgl'] : $tglEnd; 
		$SqlPeriode = "T2.tgl_spb BETWEEN '".InggrisTgl($startTgl)."' AND '".InggrisTgl($endTgl)."'";
	}
}

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT T1.kd_barang,T1.nm_barang,T1.satuan, T2.nomor,T2.no_spb,T2.tgl_spb,T2.name_ppc, T3.nomor, T3.kode,T3.jumlah 
FROM incoming_outgoing As T2 inner join incoming_outgoing_detail As T3 on T2.nomor = T3.nomor inner join barang As T1 on T3.kode = T1.kd_barang WHERE $SqlPeriode 
";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<h2>LAPORAN PENGIRIMAN INCOMING - OUTGOING</h2>
<form action="?page=Lap-Pengiriman-Incoming-Outgoing" method="post" name="form1" target="_self" id="form1">
  <table width="100%" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="left"><strong>PERIODE TANGGAL SPB</strong></div></td>
    </tr>
    <tr>
      <td width="90"><strong>Periode </strong></td>
      <td width="5"><strong>:</strong></td>
      <td width="815"><?php echo form_tanggal("cmbTglStart",$tglStart); ?> s/d <?php echo form_tanggal("cmbTglEnd",$tglEnd); ?>
      <input name="btnShow" type="submit" value=" Tampilkan " /></td>
    </tr>
  </table>
</form>
<table class="table-list" width="100%" border="1" cellspacing="1" cellpadding="2">
  <tr>
    <td rowspan="2" width="21" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td colspan="2" align="center" bgcolor="#CCCCCC"><b>SPB</b></td>
    <td align="left" rowspan="2" width="128" bgcolor="#CCCCCC"><b>PIC </b></td>
    <td align="left" rowspan="2" width="150" bgcolor="#CCCCCC"><b>Kode barang </b></td>
    <td align="left" rowspan="2" width="200" bgcolor="#CCCCCC"><b>Nama barang </b></td>
    <td align="center" rowspan="2" width="50" bgcolor="#CCCCCC"><b>Satuan </b></td>
    <td align="center" rowspan="2" width="52" bgcolor="#CCCCCC"><b>Jumlah</b></td>
<tr>
  <td width="174" bgcolor="#CCCCCC" align="center">Nomor</td>
  <td width="77" bgcolor="#CCCCCC" align="center" >Tanggal</td>
  </tr>
	<?php
	# Query utama. Query ini sama dg yg dipakai Paging di atas

	$dataSql = "SELECT T1.kd_barang,T1.nm_barang,T1.satuan, T2.nomor,T2.no_spb,T2.tgl_spb,T2.name_ppc, T3.nomor, T3.kode,T3.jumlah	 FROM incoming_outgoing As T2 inner join incoming_outgoing_detail As T3 on T2.nomor = T3.nomor inner join barang As T1 on T3.kode = T1.kd_barang
		 WHERE $SqlPeriode
		 ORDER BY T2.nomor ASC LIMIT $hal, $row";
 
	$dataQry = mysql_query($dataSql, $koneksidb) or die ("Error Query".mysql_error());
	$nomor = 0;
	while ($dataRow = mysql_fetch_array($dataQry)) {
		$nomor++;
	?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="left"><?php echo $dataRow['no_spb']; ?></td>
    <td align="center"><?php echo IndonesiaTgl($dataRow['tgl_spb']); ?></td>
    <td align="left"><?php echo $dataRow['name_ppc']; ?></td>
    <td align="left"><?php echo $dataRow['kode']; ?></td>
    <td align="left"><?php echo $dataRow['nm_barang']; ?></td>
    <td align="center"><?php echo $dataRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($dataRow['jumlah']); ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="4"><b>Jumlah Data :</b> <?php echo $jml; ?> </td>
    <td colspan="7" align="right"><b>Halaman ke :</b>
      <?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=Lap-Pengiriman-Incoming-Outgoing&hal=$list[$h]&startTgl='>$h</a> ";
	}
	?></td>
  </tr>
</table>
