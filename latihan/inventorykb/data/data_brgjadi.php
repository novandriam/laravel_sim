<html lang="en">
	<head>
		<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/style-page.css" />
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="data/brgjadi.js"></script>

</head>

<body>

<div id="divSearch">
  <form id="formSearch">
  <table width="100%">
  <tr>
    <td colspan="7" align="right"><h3><b>DATA LAPORAN PRODUKSI (BARANG JADI)</b></h3></td>
  </tr>
  <tr>
    <td colspan="7"><a href="?page=Brgjadi-Add" target="_self"><img src="images/btn_add_data2.png" height="25" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="7" align="left"><h3><b>CARI DATA LAPORAN PRODUKSI(LP)</b></h3></td>
  </tr>
  <tr>
  <td width="150">Cari Berdasarkan</td><td width="100"><select id="pilihcari">
  		<option value="project">Nama Project</option>
      <option value="dept">Nama Departemen</option>
      <option value="nobpb">Nomor LP</option>
      <option value="ppc">Nama PPC</option>
      <option value="semua">Semua</option>
  </select></td>
  <td id="kolompilih" width="80"><input type="text" name="fieldcari" id="fieldcari" /></td><td>
  <input type="submit" value="Cari" /></td>
  </tr></table>
  </form><br />
</div>
<div id="divPageData"></div>
</body>
</html>