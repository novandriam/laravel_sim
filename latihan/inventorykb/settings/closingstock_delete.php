<?php
include_once "library/inc.sesadmin.php";
$KodeDelete= isset($_GET['tanggal']) ?  $_GET['tanggal'] : $_POST['tanggal']; 
if($_GET) {
	if(empty($KodeDelete)){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$sqlDelete = "DELETE FROM closing WHERE tgl_closing='$KodeDelete'";
		$qryDelete = mysql_query($sqlDelete, $koneksidb) or die ("Eror hapus data".mysql_error());
		if($qryDelete){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menghapus data closing stock dengan tanggal: $KodeDelete', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
			echo "<meta http-equiv='refresh' content='0; url=?page=Data-Closing'>";
		}
	}
}
?>