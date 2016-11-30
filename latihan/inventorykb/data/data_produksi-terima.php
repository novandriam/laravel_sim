<html lang="en">
	<head>
		<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/style-page.css" />
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="data/produksi-terima.js"></script>

</head>

<body>

<div id="divSearch">
  <form id="formSearch">
  <table width="100%">
  <tr>
    <td colspan="7" align="right"><h3><b>PRODUKSI - DATA LAPORAN PENERIMAAN BARANG (LPB)</b></h3></td>
  </tr>
   
  <tr>
    <td colspan="7" align="left"><h3><b>CARI DATA LPB</b></h3></td>
  </tr>
  <tr>
  <td width="150">Cari Berdasarkan</td><td width="100"><select id="pilihcari">
      <option value="dari">Dari </option>
      <option value="nolpb">Nomor LPB</option>
      <option value="nospb">Nomor SPB</option>
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