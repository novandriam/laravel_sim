<html lang="en">
	<head>
		<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/style-page.css" />
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="data/databarang.js"></script>

</head>

<body>

 <table width="100%" id="tblbarang" >
   <tr>
    <td colspan="8" align="right"><h3><b>DATA BARANG </b></h3></td>
  </tr>
  <tr>
   <td colspan="2"><a href="?page=Add-Barang" target="_self"><img src="images/btn_add_data2.png" height="25" border="0" /></a></td>
    <td colspan="3" ><a href="?page=Upload-Excel-DaftarKodebrg" target="_self"><img src="images/btn_xls.jpg" title="Tambah data barang melalui impor excel"  height="25" border="0" />Import Excel</a></td>
    <td colspan="3"  align="left"><a href="view/view_excel_stockbarang.php" target="_new" alt="Expor ke Excel" title="Expor data barang dalam format excel" onClick="return confirm('ANDA YAKIN AKAN MENGEKSPOR DATA?')"><img src="images/excel.jpg" width="20" height="20"  border="0"  alt="Expor Excel" />Ekspor Excel</a></td>
  </tr>
  <tr>
    <td colspan="9">&nbsp;</td>
  </tr>
  </table>
<div id="divPageData"></div>
</body>
</html>