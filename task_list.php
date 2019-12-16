<?php include 'header.php';?>


<?php include 'manage_task_tabs.php';?> 



<h1 style="     margin-top: 0px;    margin-bottom: 30px;">View Tasks</h1>
<div >
<table class="table table-responsive table-bordered">
<tr>
	<th>ID</th>
	<th>Task Name</th>
	<th>Task Type</th>
	<th>Task Time</th>
	<th>Task Personnel</th>
	<th>Task supervisor</th>
	<th>Description</th> 
</tr>
<?php
include 'sql.php';

$SQL = "SELECT * FROM task_list ORDER BY task_name ASC";
$result = mysqli_query($db_handle, $SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	 
	$a = $db_field['task_id'];
	$b = $db_field['task_name'];
	$c = $db_field['task_type'];
	$d = $db_field['time_added'];
	$e = $db_field['username']; 
	$f = $db_field['description']; 
	print("<tr><td> $a </td>");
	print(" <td> $b </td>");
	print(" <td> $c </td>");
	print(" <td> $d </td>");
	print(" <td> $e </td>");
	print(" <td>
	



	
	</td>");
	if($f ==""){
		print("<td > <font color = 'red'>no description</font> </td>");
	}
	else{
		print("<td>$f</td>");
	}
	print("<td><a href = 'delete_task_list.php?key=".$a."'>Delete</img></a></td>");
	print("<td><a href = 'edit_task_list.php?key=".$a."'>Edit</img></a></td></tr>");
}
mysqli_close($db_handle);

?>
</table>
</div>
 


</body>
</html>