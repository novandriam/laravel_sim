<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

?>
<style type="text/css">
<!--
.style1 {color: #0000CC}
-->
</style>

<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <th colspan="3">UPLOAD STOCK AWAL DARI EXCEL</th>
	</tr>
</table>
<form action="?page=Proses-ImporExcel" method="post" name="frmadd" enctype="multipart/form-data" target="_self">

  <p>Silakan Pilih File Excel:<input name="userfile" type="file">
    <input name="upload" type="submit" value="Import"></p>
    <p>
(cari file excel: <span class="style1">template_import.xls</span> di folder template impor)  </p>

</form>
