
<?php
$loginSql = "SELECT * FROM user_login WHERE userid='".$_SESSION['SES_LOGIN']."'";
$loginQry = mysql_query($loginSql, $koneksidb)  or die ("Query user salah : ".mysql_error());
$nomor  = 0; 
$loginRow = mysql_fetch_array($loginQry);
?> <br><br>
<div><left><form name="logForm" method="post" action="?page=Ubah-Password" enctype="multipart/form-data">
<table width="600" border="0" class="table-list">
  <tr>
    <td colspan="3"><strong>INFO LOGIN </strong></td>
  </tr>
  <tr>
    <td width="195">User ID </td>
    <td width="10"><strong>:</strong></td>
    <td width="381"><?php echo $loginRow['userid']; ?></td>
  </tr>
  <tr>
    <td>Nama Anda </td>
    <td><strong>:</strong></td>
    <td><?php echo $loginRow['nm_user']; ?></td>
  </tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
     <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF"><input type="submit" name="btnUbah" value=" Ubah Password" /></td>
    </tr>
</table>
</form></left></div>

