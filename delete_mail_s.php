<?php
session_start();
$user = $_SESSION['username'];
$log = $_SESSION['admin'];
if ($log != "log"){
	header ("Location: login.php");
}

$ctrl = $_REQUEST['key'];
include 'sql.php';

$SQL = "DELETE FROM sent_items WHERE ctrl_no = '$ctrl'";
mysqli_query($db_handle,$SQL);
mysqli_close($db_handle);

print "<script>location.href = 'sent_items.php'</script>";
?>