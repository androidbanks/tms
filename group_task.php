 <?php include 'header.php';?> 
 
<?php include 'manage_task_tabs.php';?> 

<h1 style="     margin-top: 0px;    margin-bottom: 30px;">View Tasks</h1>

<div >
<table class="table table-responsive table-bordered">
<tr>
	<th>Group</th>
	<th>Leader</th>
	<th>Group Task</th>
	<th>Action</th>
	<th>Notify</th>
</tr>
<?php
include 'sql.php';

$SQL = "SELECT * FROM info WHERE position = 'leader' ORDER BY name ASC";
$result = mysqli_query($db_handle, $SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$a = $db_field['name'];
	$b = $db_field['username'];
	$c = $db_field['email'];
	?>
	<tr><td>
	<?php
	print("$a");
	?>
	</td>
	<?php
	print("<td>$b</td>");
	if($c == ""){
		print("<td ><font>unassign task</font></td>");
		print("<td>Edit");
		print("<a href = 'add_group_task.php?key=".$b."'><img src = 'images/addtask.jpg' border = '0' alt = 'add group task'></img></a></td>");
		print("<td>Compose</td></tr>");
	}
	else{
		print("<td>$c</td>");
		print("<td><a href = 'edit_group_task.php?key=".$b."'>Edit</a>");
		print("<td><a href = 'edit_group_task.php?key=".$b."'>Add Task</a></td>");
		print("<td><a href = 'notify.php?key=".$b."'>Compose</a></td></tr>");
	}
}
mysqli_close($db_handle);

?>
</table>
</div>


 



</body>
</html>