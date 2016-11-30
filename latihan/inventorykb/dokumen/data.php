<?php include "koneksi.php";
$rs = mysql_query("select * from infokb where kode='$_POST[kode]'");  
while($row = mysql_fetch_array($rs)){  
	echo $row[nama]."#".$row[alamat]."#".$row[npwp]."#".$row[skepkb];  
}  

?>