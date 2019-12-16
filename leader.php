 <?php include 'supheader.php';?> 

<div style="top:140; left:250; position:absolute; z-index:1;">
<div style="top:0; left:0; position:absolute; z-index:1;">
<?php
	print("<table>");
	print "<tr><td><h1>". strtoupper($user)."</h1></td><td>(Leader)</td></tr>";
	print("</table>");
?>
</div>
</div>

<div style="top:200; left:255; position:absolute; z-index:1;">
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

<div style="top:550; left:300; position:absolute; z-index:1;">
<img border = "none" src = "images/maulawka.gif"></img>
</div>

<div style="top:150; left:800; position:absolute; z-index:1;">
<img src = "images/image002.gif"></img>
<div style="top:50; left:10; position:absolute; z-index:1;">
<a href = "changepassl.php"><img src = "images/changepass.gif" border = "0"></img></a>
</div>
<div style="top:100; left:10; position:absolute; z-index:1;">
<a href = "userlistl.php"><img src = "images/userlist.gif" border = "0"></img></a>
</div>
</div>
</body>
</html>