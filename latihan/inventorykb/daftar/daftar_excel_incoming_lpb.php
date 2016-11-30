<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";


# Set Tanggal skrg
$tglStart 	= isset($_POST['cmbTglStart']) ? $_POST['cmbTglStart'] : date('d-m-Y');
$tglEnd 	= isset($_POST['cmbTglEnd']) ? $_POST['cmbTglEnd'] : date('d-m-Y');

?>
<h2>LAPORAN PENERIMAAN BARANG (INCOMING) FORMAT EXCEL </h2>
<form action="view/view_excel_lpb_incoming.php" method="post" name="form1" target="_blank" id="form1">
  <table width="924" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="left"><strong>PERIODE TANGGAL LPB</strong></div></td>
    </tr>
    <tr>
      <td width="90"><strong>Periode </strong></td>
      <td width="5"><strong>:</strong></td>
      <td width="815"><?php echo form_tanggal("cmbTglStart",$tglStart); ?> s/d <?php echo form_tanggal("cmbTglEnd",$tglEnd); ?>
      <input name="btnShow" type="submit" value="Ekspor excel"  /> <img src='images/excel.jpg' width='20'  height='20' align="top" border='0'  /></td>
    </tr>
  </table>
</form>
