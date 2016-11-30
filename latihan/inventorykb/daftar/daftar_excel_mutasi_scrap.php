<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";


# Set Tanggal skrg
$tgl 	= isset($_POST['tgl']) ? $_POST['tgl'] : date('d-m-Y');
$tglakhir 	= isset($_POST['tglakhir']) ? $_POST['tglakhir'] : date('d-m-Y');

?>
<h2>LAPORAN EXCEL PERTANGGUNGJAWABAN BARANG SISA DAN SCRAP</h2>
<form action="view/view_excel_mutasi_scrap.php" method="post" name="form1" target="_blank" id="form1">
  <table width="100%" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="left"><strong>PERIODE TANGGAL</strong></div></td>
    </tr>
    <tr>
      <td width="90"><strong>Periode </strong></td>
      <td width="5"><strong>:</strong></td>
      <td width="815"><?php echo form_tanggal("tgl",$tgl); ?> s/d <?php echo form_tanggal("tglakhir",$tglakhir); ?>
      <input name="btnShow" type="submit" value="Ekspor excel"  /> <img src='images/excel.jpg' width='20'  height='20' align="top" border='0'  /></td>
    </tr>
     <tr><td colspan="3"><input name="txtKategori" value="K04" type="hidden" size="10" maxlength="10" readonly="readonly"/></td></tr>
  </table>
</form>
