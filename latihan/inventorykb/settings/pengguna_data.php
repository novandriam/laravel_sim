<?php
include_once "library/inc.sessuperadmin.php";
include_once "library/inc.library.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM pengguna";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<table width="100%" border="0" cellpadding="2" cellspacing="1" class="table-border">
  <tr>
    <td colspan="2" align="right"><h2>DATA PENGGUNA</h2></td>
  </tr>
  <tr>
    <td colspan="2"><a href="?page=Add-Pengguna" target="_self"><img src="images/btn_add_data2.png" height="25" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th width="27" align="center"><b>No</b></th>
        <th width="229"><b>Nama Lengkap</b></th>
        <th width="162"><b>Pengguna ID </b></th>
        <th width="145"><b>Level</b></th>
        <td width="50" align="center" bgcolor="#CCCCCC"><b>Edit</b></td>
        <td width="50" align="center" bgcolor="#CCCCCC"><b>Delete</b></td>
      </tr>
      <?php
	$penggunaSql = "SELECT * FROM pengguna ORDER BY id ASC LIMIT $hal, $row";
	$penggunaQry = mysql_query($penggunaSql, $koneksidb)  or die ("Query pengguna salah : ".mysql_error());
	$nomor  = 0; 
	while ($penggunaRow = mysql_fetch_array($penggunaQry)) {
	$nomor++;
	$Kode = $penggunaRow['id'];
	?>
      <tr>
        <td align="center"><b><?php echo $nomor; ?></b></td>
        <td><?php echo $penggunaRow['nm_pengguna']; ?></td>
        <td><?php echo $penggunaRow['penggunaid']; ?></td>
        <td><?php echo $penggunaRow['level']; ?></td>
        <td align="center"><a href="?page=Edit-Pengguna&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="?page=Delete-Pengguna&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN INGIN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" /></a></td>
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
		echo " <a href='?page=Data-Pengguna&hal=$list[$h]'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>
