 <?php include 'memheader.php';?> 


<div>
<div>
<?php
	print("<table>");
	print "<tr><td><h1>". strtoupper($user)."</h1></td><td>(Member)</td></tr>";
	print("</table>");
?>
</div>
</div>

<div>
<?php
$mess = "";
$user = $_SESSION['username'];
include 'sql.php';

$count = 0;
$SQL = "SELECT * FROM messaging WHERE to_receiver = '$user' AND opened = 0";
$result = mysqli_query($db_handle,$SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$count = $count + 1;
}
mysqli_close($db_handle);
if($count > 0){
	print("You have ".$count." new message!");
}
else{
	print("You have no new message!");
}

?>
</div>
 
 

</body>
</html>