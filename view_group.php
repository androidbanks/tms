<?php include 'header.php';?>


<?php include 'manage_user_tabs.php';?> 

<h1 style="     margin-top: 0px;    margin-bottom: 30px;">View Group</h1>
 

<div>
<table class="table table-responsive table-bordered">
<tr>
	<th>Group</th>
	<th>Leader</th>
	<th>Member/s</th>
	<th>Action</th>
</tr>
<?php
include 'sql.php';

$SQL = "SELECT * FROM group_title WHERE group_name != 'admin' ORDER BY group_name ASC";
$result = mysqli_query($db_handle, $SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$a = $db_field['group_name'];
	$b = $db_field['group_leader'];
	print("<tr><td align = 'center'><b>$a</b></td>");
	if($b == ""){
		print("<td align = 'center'><b><font color = 'red'>no leader</font></b></td>");	
	}
	else{
		print("<td align = 'center'>$b</td>");
	}
	print("<td align = 'center'>");
	$SQL1 = "SELECT username FROM info WHERE groups = '$a' AND position = 'member'";
	$result1 = mysqli_query($db_handle, $SQL1);
	while ($db_field = mysqli_fetch_assoc($result1)) {
		$c = $db_field['username'];
		print ($c.", ");
	}
	print("</td>");
	print("<td><a href = 'delete_group.php?key=".$a."'>delete</img></a></td>");
	print("<td><a href = 'edit_group.php?key=".$a."'>Edit</img></a></td>");
}
mysqli_close($db_handle);

?>
</table>
</div>
 

</body>
</html>