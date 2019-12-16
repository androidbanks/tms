 <?php include 'header.php';?> 
<?php include 'manage_user_tabs.php';?> 

<div >
<table class="table table-responsive table-bordered">
<tr>
	<th>Name</th>
	<th>Group</th>
	<th>Position</th>
	<th>Action</th>
</tr>
<?php
include 'sql.php';

$SQL = "SELECT * FROM info WHERE position != 'admin' ORDER BY position, username ASC";
$result = mysqli_query($db_handle,$SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$a = $db_field['username'];
	$b = $db_field['email'];
	$c = $db_field['position'];
	print("<tr><td>$a </td>");
	if($b == ""){
		print("<td> <font color = 'red'>no group</font></b></td>");
	}
	else{
		print("<td  >$b</td>");
	}
	if($c == "leader"){
		print("<td ><font color = 'red'> $c </font></td>");
	}
	else{
		print("<td  >$c</td>");
	}
	print("<td align='center'><a class='btn btn-primary' href = 'edit_user.php?key=".$a."'><i class='fa fa-edit'></i> </a></td>");
	print("<td align='center'><a class='btn btn-danger' href = 'delete.php?key=".$a."'><i class='fa fa-trash-o'></i></a></td>");
//	if($c == "leader"){
//		print("<a href = 'add_task.php?key=".$a."'><img src = 'images/addtask.jpg' border = '0' alt = 'add group task'></img></a></td></tr>");
//	}
}
mysqli_close($db_handle);

?>
</table>
</div>
 



</body>
</html>