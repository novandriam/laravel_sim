<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM jenisbckeluar";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<table width="100%" border="0" cellpadding="2" cellspacing="1" class="table-border">
  <tr>
    <td colspan="2" align="right"><h2>DATA JENIS DOK PABEAN KELUAR</h2></td>
  </tr>
  <tr>
    <td colspan="2"><a href="?page=Add-Jenisbckeluar" target="_self"><img src="images/btn_add_data2.png" height="25" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th width="32" align="center"><b>No</b></th>
        <th width="93" align="center"><b>Jenis  </b></th>
        <th width="444" align="center"><b>Nama dokumen</b> </th>
        <td width="47" align="center" bgcolor="#CCCCCC"><b>Edit</b></td>
        <td width="52" align="center" bgcolor="#CCCCCC"><b>Delete</b></td>
      </tr>
      <?php
	$dataSql = "SELECT * FROM jenisbckeluar ORDER BY kode ASC LIMIT $hal, $row";
	$dataQry = mysql_query($dataSql, $koneksidb)  or die ("Query Jenis dokpab salah : ".mysql_error());
	$nomor  = 0; 
	while ($dataRow = mysql_fetch_array($dataQry)) {
	$nomor++;
	$Kode = $dataRow['kode'];
	?>
      <tr>
        <td align="center"><b><?php echo $nomor; ?></b></td>
        <td align="center"><?php echo $dataRow['jenis']; ?></td>
        <td align="left"><?php echo $dataRow['nama']; ?></td>
        <td align="center"><a href="?page=Edit-Jenisbckeluar&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="?page=Delete-Jenisbckeluar&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" /></a></td>
      </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>
    <td><b>Jumlah Data :</b> <?php echo $jml; ?> </td>
    <td align="right"><b>Halaman ke :</b> 
	<?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=Data-Jenisbckeluar&hal=$list[$h]'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>
