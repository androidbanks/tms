<?php include 'header.php';?>
<?php include 'manage_task_tabs.php';?> 


<?php

include 'sql.php';
if(isset($_POST['submit'])){
	$task_number=$_POST['task_number'];
	$task_name=$_POST['task_name'];
	$task_type=$_POST['task_type'];
	$username=$_POST['username']; 
	$description=$_POST['description']; 
$sql1=mysqli_query($db_handle,"SELECT * FROM task_list WHERE task_number='$task_number'")or die(mysqli_error($db_handle));
 $result=mysqli_fetch_array($sql1);
if($result>0){
 echo $message="<font color='blue'>sorry the username entered already exists</font>";
}else{
$sql=mysqli_query($db_handle,"INSERT INTO `task_list` (`task_id`, `task_number`, `task_name`, `task_type`, `time_added`, `username`, 
	`description`) 	VALUES (NULL, '$task_number', '$task_name', '$task_type', CURRENT_TIMESTAMP, 
	'$username', '$description');");
if($sql>0) {
	echo " task added";
}else{
 echo $message1="<font color=red>task Registration Failed, Try again</font>";
}
	}}	
?>





 
<form name='add_form' method='post' action=''>
<div >
	<h1 style="margin-top: 0px; margin-bottom: 30px;">Add task</h1>
</div>
<div class="col-md-6">
<form name='add_form' role="form" method='post' action='add_task_list_out.php'> 

<div>
<div  class="form-group has-success">
	<label class="control-label" for="inputSuccess">Task Number:</label>
	 <input class="form-control" name = 'task_number' type = 'text' value = ''> 
</div>
<div  class="form-group has-success">
	<label class="control-label" for="inputSuccess">Task Name:</label>
	 <input class="form-control" name = 'task_name' type = 'text' value = ''> 
</div>

<div  class="form-group has-success">
	<label class="control-label" for="inputSuccess">Task Type:</label>
	 <input class="form-control" name = 'task_type' type = 'text' value = ''> 
</div>


<div  class="form-group has-success">
	<label class="control-label" for="inputSuccess">Technician</label>
	 <select class="form-control" name = 'username' type = 'text' value = ''> 
	 <option> select A Technician </option> 
	 <?php
	 
include 'sql.php';
		$SQL = "SELECT * FROM info WHERE position != 'admin' ORDER BY position, username ASC";
		$result = mysqli_query($db_handle,$SQL);
		while ($db_field = mysqli_fetch_assoc($result)) {
			$a = $db_field['name'];
			$b = $db_field['email'];
			$c = $db_field['position'];
			print("<option>$a </option>");
			 
			 
			 
			 
			 
		}
		mysqli_close($db_handle);

?>

	 }
	 ?>
	 </select> 
</div>
<div class="form-group has-success">
	<label class="control-label" for="inputSuccess">Description</label>
	<div><textarea  class="form-control" name = 'description'></textarea></div>
</div>
<div>
 
<input class="btn btn-primary" name = 'reset' type = 'reset' value = 'reset'> 
 <input  class="btn btn-primary"name = 'cancel' type = 'submit' value = 'CANCEL'>
<input class="btn btn-primary" name = 'submit' type = 'submit' value = 'ADD'> 
</div>
</div>
</form>
</div>
 
 
</body>
</html>