<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
		
	# TAMPILKAN 
	$TglView= isset($_GET['tanggal']) ?  $_GET['tanggal'] : $_POST['tanggal']; 
	
	
} // Penutup GET

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 100;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM closing where tgl_closing = '$TglView'";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$dataShow = mysql_fetch_array($pageQry);
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<h2>VIEW DETAIL CLOSING STOCK</h2>
  <table width="100%" border="0"  class="table-list">
    <tr>
      <td bgcolor="#CCCCCC"><div align="left"><strong>PERIODE TANGGAL DILAKUKAN CLOSING</strong></div></td>
    </tr>
    <tr>
      <td><strong>Periode: <?php echo IndonesiaTgl($TglView); ?> </strong></td>
    </tr>
    
  </table>

<table class="table-list" width="100%" border="1" cellspacing="1" cellpadding="2">
  <tr>
  	<td  width="40" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td align="center" width="90" bgcolor="#CCCCCC"><b>Kode barang </b></td>
    <td align="left" width="431" bgcolor="#CCCCCC"><b>Nama barang </b></td>
    <td align="center" width="54" bgcolor="#CCCCCC"><b>Sat </b></td>
    <td align="center" width="50" bgcolor="#CCCCCC"><b> Stock</b></td>
     <td align="center" bgcolor="#CCCCCC"><b>Kategori</b></td> 
	<?php
	# Query utama. Query ini sama dg yg dipakai Paging di atas
 $dataSql="SELECT T1.kd_barang, T1.nm_barang, T1.satuan, T2.*, T3.*	 FROM barang As T1, kategori As T2, closing As T3
	WHERE T1.kd_barang = T3.kd_barang AND T1.kd_kategori = T2.kd_kategori
	AND T3.tgl_closing = '$TglView'  
	ORDER BY T3.kd_barang ASC";
	$dataQry = mysql_query($dataSql, $koneksidb) or die ("Error Query".mysql_error());
	$nomor = 0;
	while ($dataRow = mysql_fetch_array($dataQry)) {
		$tglclosing = $dataRow['tgl_closing'];
		$nomor++;
	?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="left"><?php echo $dataRow['kd_barang']; ?></td>
    <td align="left"><?php echo $dataRow['nm_barang']; ?></td>
    <td align="center"><?php echo $dataRow['satuan']; ?></td>
    <td align="right"><?php echo $dataRow['stock']; ?></td>
    <td align="left"><?php echo $dataRow['nm_kategori']; ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="3"><b>Jumlah Data :</b> <?php echo $jml; ?> </td> <td align="center"><a href="view/view_excel_closing.php?tanggal=<?php echo $tglclosing; ?>" target="_new" alt="Ekspor ke Excel" onclick="return confirm('ANDA YAKIN AKAN MENGEKSPOR DATA?')"><img src="images/excel.jpg" width="20" height="20"  border="0"  alt="Ekspor Excel" />Excel</a></td>
    <td colspan="11" align="right"><b>Halaman ke :</b>
      <?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=Daftar-Closing&hal=$list[$h]&startTgl='>$h</a> ";
	}
	?></td>
  </tr>
</table>
