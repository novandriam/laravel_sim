<?php
include_once "library/inc.sesadmin.php";
$KodeDelete= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
if($_GET) {
	if(empty($KodeDelete)){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$sqlDelete = "DELETE FROM barang WHERE kd_barang='$KodeDelete'";
		$qryDelete = mysql_query($sqlDelete, $koneksidb) or die ("Eror hapus data".mysql_error());
		if($qryDelete){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menghapus data barang dengan kode: $KodeDelete', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
			echo "<meta http-equiv='refresh' content='0; url=?page=Data-Barang'>";
		}
	}
}
?>