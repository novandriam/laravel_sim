<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";


# Set Tanggal skrg
$tglStart 	= isset($_POST['cmbTglStart']) ? $_POST['cmbTglStart'] : date('d-m-Y');
$tglEnd 	= isset($_POST['cmbTglEnd']) ? $_POST['cmbTglEnd'] : date('d-m-Y');

?>
<h2>LAP. EXCEL PENGELUARAN BARANG PER PENERIMA</h2>
<form action="view/view_excel_pengeluaran-perpenerima.php" method="post" name="form1" target="_blank" id="form1">
  <table width="924" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="left"><strong>NAMA PENERIMA DAN PERIODE TANGGAL SURAT JALAN</strong></div></td>
    </tr>
        <tr>
      <td><b>Penerima</b></td>
	  <td><b>:</b></td>
  	  <td><select name="cmbPenerima">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT kode_penerima,nama FROM penerima ORDER BY kode_penerima";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['kode_penerima']== $_POST['cmbPenerima']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[kode_penerima]' $cek>$dataRow[kode_penerima]&nbsp;-&nbsp;$dataRow[nama]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>


    <tr>
      <td width="90"><strong>Periode </strong></td>
      <td width="5"><strong>:</strong></td>
      <td width="815"><?php echo form_tanggal("cmbTglStart",$tglStart); ?> s/d <?php echo form_tanggal("cmbTglEnd",$tglEnd); ?>
      <input name="btnShow" type="submit" value="Ekspor excel"  /> <img src='images/excel.jpg' width='20'  height='20' align="top" border='0'  /></td>
    </tr>
  </table>
</form>
