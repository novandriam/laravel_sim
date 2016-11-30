<?php
/*
Untuk masa depan pengembangan PHP, mulai hari ini gunakan open dan close tag: <?php ?>
For future if PHP Development, use <?php ?> as open and close tag

@author: hairul azami a.k.a dr.emi
@contact: webmaster@dremi.info
@website: www.dremi.info
*/

include_once "library/inc.connection.php";
include 'backup/dbclass.php';

$db = new mydb();
$db->connect(_DB_HOST, _DB_USER, _DB_PASS, _DB_NAME);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Backup Restore Database</title>
<style type="text/css" media="all">

a { text-decoration: none;color:#143301; }
a:hover { text-decoration: none;color:#ffb400; }
.input { border:solid 1px #cccccc; }
.update { border:solid 1px #cccccc; background: url('./images/db_update.png') 10px 5px no-repeat #f4f4f4; padding-left:25px; min-width:80px; height:30px; color:#660000; }
.add { border:solid 1px #cccccc; background: url('./images/db_add.png') 10px 5px no-repeat #f4f4f4; padding-left:25px; min-width:80px; height:30px; color:#660000; }
#footer { margin-top:40px; }
</style>
</head>
<body>


<?php
$cTask = $db->clearString($_GET['cTask']);
$cTask2 = $db->clearString($_GET['cTask2']);

	?>
	<fieldset><legend>RESTORE DATABASE</legend>
	<form name="restoreDB" action="<?php echo $_SERVER['PHP_SELF']; ?>?page=Restore-Database" method="POST" enctype="multipart/form-data">
	<table width="100%" border="0" cellspacing="2" cellpadding="4">
  	<tr>
    <td width="20%" valign="top"><strong>Browse Database File</strong></td>
    <td width="2%" valign="top"><strong>:</strong></td>
    <td width="78%" valign="top">
      <input name="cur_db_name" value="" type="file" class="standarInput" size="65" />
      <p>(* File type: *.SQL, *.ZIP</p>
    </td>
  	</tr>
  	<tr>
    <td width="20%" valign="top"><input type="submit" class="add" name="submitRestoreDB" value="upload and restore database" /></td>
    <td width="2%" valign="top"></td>
    <td width="78%" valign="top">
     <?php
	if(isset($_POST['submitRestoreDB']))
	{
		if(!empty($_FILES['cur_db_name']['name']))
		{
			if($db->getlast($_FILES['cur_db_name']['name']) == 'sql')
			{
				$tempFile   = $_FILES['cur_db_name']['tmp_name'];
				$targetFile = 'temp/'.$_FILES['cur_db_name']['name'];
				move_uploaded_file($tempFile, $targetFile);
				$db->restoreDatabaseSql($targetFile);
			}
			elseif($db->getlast($_FILES['cur_db_name']['name']) == 'zip')
			{
				$tempFile   = $_FILES['cur_db_name']['tmp_name'];
				$targetFile = 'backup/temp/'.$_FILES['cur_db_name']['name'];
				move_uploaded_file($tempFile, $targetFile);
				$db->restoreDatabaseZip($targetFile);
			}
			else
			{
				echo "Invalid Database File Type";
			}
		}
	}	
	?>
    </td>
  	</tr>
	</table>
	</form>
	</fieldset>

</body>