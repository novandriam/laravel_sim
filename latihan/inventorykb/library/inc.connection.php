<?php
$koneksidb = mysql_connect("localhost","root","");
$con = mysql_select_db("inventorykb",$koneksidb);
if(!$con){
echo "Something Problem";
}
define("_DB_HOST", "localhost");
define("_DB_USER", "root");
define("_DB_PASS", "");
define("_DB_NAME", "inventorykb");
?>