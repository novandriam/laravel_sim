<html lang="en">
	<head>
		<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/style-page.css" />
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="data/pengeluaran.js"></script>

</head>

<body>

<div id="divSearch">
  <form id="formSearch">
  <table>
  <tr>
    <td colspan="4" align="left"><h3><b>STOCK BARANG DI PENGELUARAN </b></h3></td>
  </tr>
  <tr>
  <td>Cari Berdasarkan</td><td><select id="pilihcari">
      <option value="namabarang">Nama Barang</option>
      <option value="kodebarang">Kode Barang</option>
       <option value="kategori">Kategori Barang</option>
      <option value="semua">Semua</option>
  </select></td>
  <td id="kolompilih"><input type="text" name="fieldcari" id="fieldcari" /></td><td>
  <input type="submit" value="Cari" /></td>
  </tr></table>
  </form><br />
</div>
<div id="divPageData"></div>
</body>
</html>