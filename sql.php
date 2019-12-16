<?php

/*
$user_name = "fees0_4320930";
$password = "charts";
$database = "fees0_4320930_bui";
$server = "sql212.0fees.net";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
*/

$user_name = "root";
$password = "";
$database = "tms";
$server = "localhost";
$db_handle = mysqli_connect($server, $user_name, $password,$database);
//$db_found = mysql_select_db($database, $db_handle);


if (!$db_handle) {
	die("DATABASE not found!contact tremendouschatikobo@gmail.com/app on +263778046755 or click the link for help.");
}

?>