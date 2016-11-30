<?php
if(empty($_SESSION['SES_SUPERADMIN'])) {
session_unset();
session_destroy();
echo "<meta http-equiv='refresh' content='0; url=?page'>";
exit;
}
?>

