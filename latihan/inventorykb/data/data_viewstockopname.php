<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
		
	# TAMPILKAN 
	$TglView= isset($_GET['tanggal']) ?  $_GET['tanggal'] : $_POST['tanggal'];
	
	
} // Penutup GET
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/style-page.css" />
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="data/viewstockopname.js"></script>

</head>

<body>

<div id="divSearch">
  <form id="formSearch">
  <table width="100%">
  <tr>
    <td colspan="7" align="right"><h3><b><input type='hidden' name='tglstock' value='<?php echo $TglView; ?>'><?php echo $TglView; ?></b></h3></td>
  </tr>
  <tr>
    <td colspan="7"><a href="?page=Add-Penyesuaian" target="_self"><img src="images/btn_add_data2.png" height="25" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="7" align="left"><h3><b>CARI DETAIL STOCK OPNAME</b></h3></td>
  </tr>
  <tr>
  <td width="150">Cari Berdasarkan</td><td width="100"><select id="pilihcari">
      <option value="kode">Kode barang</option>
      <option value="nama">Nama barang</option>
      <option value="kategori">Kategori barang</option>
      <option value="semua">Semua</option>
  </select></td>
  <td id="kolompilih" width="80"><input type="text" name="fieldcari" id="fieldcari" /></td><td>
  <input type="submit" value="Cari" /><input type='hidden' name='tglstock' value='$TglView'></td>
  </tr></table>
  </form><br />
</div>
<div id="divPageData"></div>
</body>
</html>