<?php
include_once "library/inc.sessuperadmin.php";
$KodeDelete= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode'];
if($_GET) {
	if(empty($KodeDelete)){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$sqlDelete = "DELETE FROM kategori WHERE kd_kategori='$KodeDelete'";
		$qryDelete = mysql_query($sqlDelete, $koneksidb) or die ("Eror hapus data".mysql_error());
		if($qryDelete){
			$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menghapus data kategori barang dengan kode:$KodeDelete', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
			echo "<meta http-equiv='refresh' content='0; url=?page=Data-Kategori'>";
		}
	}
}
?>