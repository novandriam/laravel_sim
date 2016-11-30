<?php
	include_once "library/inc.connection.php";
        
	$return_arr = array();
	
	$data = mysql_query("SELECT kd_barang,nm_barang FROM barang WHERE kd_barang LIKE '%" . mysql_real_escape_string($_GET['term']) . "%' order by kd_barang asc");
	while($line = mysql_fetch_array($data, MYSQL_ASSOC)){
		$row_array["value"] = $line["kd_barang"];
		$row_array["kd_barang"] = $line["kd_barang"];
		$row_array["nm_barang"] = $line["nm_barang"];
		array_push($return_arr, $row_array);
	}
	echo json_encode($return_arr);
?>