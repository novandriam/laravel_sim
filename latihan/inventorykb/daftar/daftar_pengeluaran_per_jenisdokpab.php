<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

$SqlPeriode = ""; $startTgl=""; $endTgl="";

# Set Tanggal skrg
$tglStart 	= isset($_POST['cmbTglStart']) ? $_POST['cmbTglStart'] : date('d-m-Y');
$tglEnd 	= isset($_POST['cmbTglEnd']) ? $_POST['cmbTglEnd'] : date('d-m-Y');
$Jenisdokpab	= isset($_POST['cmbDokpab']) ? $_POST['cmbDokpab'] : '';

# Jika Nomor Page (halaman) diklik
if($_GET) {


	if (isset($_POST['btnShow'])) {
		$SqlPeriode = "AND ( T2.tgl_dokpab BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."')";
	}
	else {
		$startTgl 	= isset($_GET['startTgl']) ? $_GET['startTgl'] : $tglStart;
		$endTgl 	= isset($_GET['endTgl']) ? $_GET['endTgl'] : $tglEnd;
		$cmbJenisdokpab 	= isset($_GET['cmbJenisdokpab']) ? $_GET['cmbJenisdokpab'] : $Jenisdokpab;
				
		$SqlPeriode = " AND (T2.jenis_dokpab='$cmbJenisdokpab' AND T2.tgl_dokpab BETWEEN '".InggrisTgl($startTgl)."' AND '".InggrisTgl($endTgl)."')";
	}
}

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 1000;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT T1.kd_barang, T1.nm_barang, T1.satuan, T2.nomor, T2.no_sj, T2.tgl_sj, T2.penerima, T2.jenis_dokpab, T2.no_dokpab, T2.tgl_dokpab, T3.nomor, T3.kode, T3.jumlah, T3.valuta, T3.nilai, T4.kode_penerima, T4.nama FROM barang As T1, pengeluaran As T2, pengeluaran_detail As T3, penerima as T4
			 WHERE T1.kd_barang = T3.kode AND T2.penerima = T4.kode_penerima
			 AND T2.jenis_dokpab = '$Jenisdokpab'
			 AND T2.nomor	 = T3.nomor 	$SqlPeriode
";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<h2>LAPORAN PENGELUARAN BARANG PER JENIS DOKUMEN PABEAN</h2>
<form action="?page=Lap-Pengeluaran-Perjenisdokpab" method="post" name="form1" target="_self" id="form1">
  <table width="100%" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="left"><strong>JENIS DAN PERIODE TANGGAL DOK PABEAN</strong></div></td>
    </tr>
    <tr>
      <td><b>Jenis dokpab</b></td>
	  <td><b>:</b></td>
	  <td><select name="cmbDokpab">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT kode,jenis FROM jenisbckeluar ORDER BY kode";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['jenis']== $_POST['cmbDokpab']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[jenis]' $cek>$dataRow[jenis]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
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
    <td colspan="3" align="center" bgcolor="#CCCCCC"><strong>Dok Pabean</strong></td>
    <td colspan="2" align="center" bgcolor="#CCCCCC"><b>Surat Jalan</b></td>
    <td align="left" rowspan="2" width="200" bgcolor="#CCCCCC"><b>Penerima</b></td>
    <td align="left" rowspan="2" width="150" bgcolor="#CCCCCC"><b>Kode barang </b></td>
    <td align="left" rowspan="2" width="200" bgcolor="#CCCCCC"><b>Nama barang </b></td>
    <td align="center" rowspan="2" width="34" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td align="center" rowspan="2" width="52" bgcolor="#CCCCCC"><b>Jumlah</b></td>
    <td align="center" rowspan="2" colspan="2" width="80" bgcolor="#CCCCCC"><b>Nilai barang</b></td>  
<tr>
  <td width="59" bgcolor="#CCCCCC" align="center">Jenis</td>
  <td width="44" bgcolor="#CCCCCC" align="center">Nomor</td>
  <td width="77" bgcolor="#CCCCCC" align="center">Tanggal</td>
  <td width="174" bgcolor="#CCCCCC" align="center">Nomor</td>
  <td width="70" bgcolor="#CCCCCC" align="center" >Tanggal</td>
  </tr>
	<?php
	# Query utama. Query ini sama dg yg dipakai Paging di atas

	$dataSql = "SELECT T1.kd_barang, T1.nm_barang, T1.satuan, T2.nomor, T2.no_sj, T2.tgl_sj, T2.penerima, T2.jenis_dokpab, T2.no_dokpab, T2.tgl_dokpab, T3.nomor, T3.kode, T3.jumlah, T3.valuta, T3.nilai, T4.kode_penerima, T4.nama FROM barang As T1, pengeluaran As T2, pengeluaran_detail As T3, penerima as T4
		 WHERE T1.kd_barang = T3.kode AND T2.penerima = T4.kode_penerima
		 AND T2.jenis_dokpab = '$Jenisdokpab'
		 AND T2.nomor = T3.nomor 	$SqlPeriode
		 ORDER BY T2.nomor ASC LIMIT $hal, $row";
 
	$dataQry = mysql_query($dataSql, $koneksidb) or die ("Error Query".mysql_error());
	$nomor = 0;
	while ($dataRow = mysql_fetch_array($dataQry)) {
		$nomor++;
	?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="center"><?php echo $dataRow['jenis_dokpab']; ?></td>
    <td align="center"><?php echo $dataRow['no_dokpab']; ?></td>
    <td align="center"><?php echo IndonesiaTgl($dataRow['tgl_dokpab']); ?></td>
    <td align="left"><?php echo $dataRow['no_sj']; ?></td>
    <td align="center"><?php echo IndonesiaTgl($dataRow['tgl_sj']); ?></td>
    <td align="left"><?php echo $dataRow['nama']; ?></td>
    <td align="left"><?php echo $dataRow['kode']; ?></td>
    <td align="left"><?php echo $dataRow['nm_barang']; ?></td>
    <td align="center"><?php echo $dataRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($dataRow['jumlah']); ?></td>
    <td align="left"><?php echo $dataRow['valuta']; ?></td>&nbsp;<td align="right"><?php echo format_angka($dataRow['nilai']); ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="4"><b>Jumlah Data :</b> <?php echo $jml; ?> </td>
    <td colspan="11" align="right"><b>Halaman ke :</b>
      <?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=Lap-Pengeluaran-Perjenisdokpab&hal=$list[$h]&startTgl='>$h</a> ";
	
	}
	?></td>
  </tr>
</table>
