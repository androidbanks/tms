<?php include 'header.php';?> 
<?php include 'mes_tabs.php';?> 
<h1 style="     margin-top: 0px;    margin-bottom: 30px;">Messages </h1>
 
<?php
include 'sql.php';

$SQL = "SELECT count( * ) as total_record  FROM messaging WHERE to_receiver = '$user'";
$result = mysqli_query($db_handle,$SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$a = $db_field['total_record'];
}

$SQL = "SELECT count( * ) as total_record  FROM sent_items WHERE from_sender = '$user'";
$result = mysqli_query($db_handle,$SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$b = $db_field['total_record'];
}
?>


<div style="top:240px; left:270px; width:500px; height:320px; position:absolute; overflow:auto; z-index:1">
<?php print $a; ?> <b>Inbox</b><br>
<?php print $b; ?> <b>Sent Items</b><br>
</div>

</body>
</html>