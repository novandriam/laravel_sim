<?php
include_once "library/inc.sesadmin.php";
$KodeDelete= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode'];
if($_GET) {
	if(empty($_GET['Kode'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$sqlDelete = "DELETE FROM matauang WHERE kd_valas='".$_GET['Kode']."'";
		$qryDelete = mysql_query($sqlDelete, $koneksidb) or die ("Eror hapus data".mysql_error());
		if($qryDelete){
			$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menghapus data mata uang dengan data kode:$KodeDelete', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
			echo "<meta http-equiv='refresh' content='0; url=?page=Data-Matauang'>";
		}
	}
}
?>