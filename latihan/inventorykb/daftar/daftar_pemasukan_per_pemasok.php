<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

$SqlPeriode = ""; $startTgl=""; $endTgl="";

# Set Tanggal skrg
$tglStart 	= isset($_POST['cmbTglStart']) ? $_POST['cmbTglStart'] : date('d-m-Y');
$tglEnd 	= isset($_POST['cmbTglEnd']) ? $_POST['cmbTglEnd'] : date('d-m-Y');
$Supplier	= isset($_POST['cmbSupplier']) ? $_POST['cmbSupplier'] : '';

# Jika Nomor Page (halaman) diklik
if($_GET) {


	if (isset($_POST['btnShow'])) {
		$SqlPeriode = "AND ( T2.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."')";
	}
	else {
		$startTgl 	= isset($_GET['startTgl']) ? $_GET['startTgl'] : $tglStart;
		$endTgl 	= isset($_GET['endTgl']) ? $_GET['endTgl'] : $tglEnd;
		$cmbSupplierr 	= isset($_GET['cmbSupplier']) ? $_GET['cmbSupplier'] : $Supplier;
				
		$SqlPeriode = " AND (T2.pemasok='$cmbSupplierr' AND T2.tgl_bpb BETWEEN '".InggrisTgl($startTgl)."' AND '".InggrisTgl($endTgl)."')";
	}
}

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 1000;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT T1.kd_barang, T1.nm_barang, T1.satuan, T2.nomor, T2.no_bpb, T2.tgl_bpb, T2.pemasok, T2.jenis_dokpab, T2.no_dokpab, T2.tgl_dokpab, T3.nomor, T3.kode, T3.jumlah, T3.valuta, T3.nilai, T4.kode_pemasok, T4.nama FROM barang As T1, pemasukan As T2, pemasukan_detail As T3, pemasok as T4
			 WHERE T1.kd_barang = T3.kode 
			 AND T2.pemasok = '$Supplier'
			 AND T2.pemasok = T4.kode_pemasok
			 AND T2.nomor 	 = T3.nomor 	$SqlPeriode
";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<h2>LAPORAN PEMASUKAN BARANG PER NAMA PEMASOK/SUPPLIER</h2>
<form action="?page=Lap-Pemasukan-Perpemasok" method="post" name="form1" target="_self" id="form1">
  <table width="100%" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="left"><strong>PEMASOK DAN PERIODE TANGGAL PENERIMAAN</strong></div></td>
    </tr>
    <tr>
      <td><b>Pemasok</b></td>
	  <td><b>:</b></td>
  	  <td><select name="cmbSupplier">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT kode_pemasok,nama FROM pemasok ORDER BY kode_pemasok";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['kode_pemasok']== $_POST['cmbSupplier']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[kode_pemasok]' $cek>$dataRow[kode_pemasok]&nbsp;-&nbsp;$dataRow[nama]</option>";
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
    <td colspan="2" align="center" bgcolor="#CCCCCC"><b>BPB</b></td>
    <td align="left" rowspan="2" width="200" bgcolor="#CCCCCC"><b>Pemasok/Pengirim </b></td>
    <td align="left" rowspan="2" width="200" bgcolor="#CCCCCC"><b>Kode barang </b></td>
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

	$dataSql = "SELECT T1.kd_barang, T1.nm_barang, T1.satuan, T2.nomor, T2.no_bpb, T2.tgl_bpb, T2.pemasok, T2.jenis_dokpab, T2.no_dokpab, T2.tgl_dokpab, T3.nomor, T3.kode, T3.jumlah, T3.valuta, T3.nilai, T4.kode_pemasok, T4.nama FROM barang As T1, pemasukan As T2, pemasukan_detail As T3, pemasok as T4
		 WHERE T1.kd_barang = T3.kode 
		 AND T2.pemasok = '$Supplier'
		 AND T2.pemasok = T4.kode_pemasok
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
    <td align="left"><?php echo $dataRow['no_bpb']; ?></td>
    <td align="center"><?php echo IndonesiaTgl($dataRow['tgl_bpb']); ?></td>
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
		echo " <a href='?page=Lap-Pemasukan-Perpemasok&hal=$list[$h]&startTgl='>$h</a> ";
	
	}
	?></td>
  </tr>
</table>
