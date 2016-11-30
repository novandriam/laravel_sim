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
	
	<fieldset><legend>BACKUP DATABASE</legend>
	<form name="backUpDB" action="<?php echo $_SERVER['PHP_SELF']; ?>?page=Backup-Database" method="POST">
	<table width="100%" border="0" cellspacing="2" cellpadding="4">
  	<tr>
    <td width="20%" valign="top"><strong>Database Name</strong></td>
    <td width="2%" valign="top"><strong>:</strong></td>
    <td width="78%" valign="top">
      <input name="cur_db_name" value="<?php if(isset($_POST['submitBackupDB'])) { echo $_POST['cur_db_name']; } else { echo _DB_NAME; } ?>" type="text" class="standarInput" readonly="readonly" size="45" />    
    </td>
  	</tr>
  	<tr>
    <td width="20%" valign="top"><input type="submit" class="update" name="submitBackupDB" value="backup and download database" /></td>
    <td width="2%" valign="top"></td>
    <td width="78%" valign="top">
    <?php
	if(isset($_POST['submitBackupDB']))
	{
		if(!empty($_POST['cur_db_name']))
		{
			$db->backupDatabase($_POST['cur_db_name']);
		}
	}
	
	if($cTask2 == 'removeBckDB')
	{
		if(file_exists($db->clearString($_GET['file'])))
		{
			if($db->remove($db->clearString($_GET['file'])))
			{
				echo 'Backup database file has removed';
			}
			else
			{
				echo 'Something wrong, but I cannot explain';
			}
		}
		else
		{
			echo 'Backup database file not found';
		}
	}	
	?>
    </td>
  	</tr>
 	</table>
	</form>
	</fieldset>
	


</body>