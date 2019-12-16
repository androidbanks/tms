<?php include 'header.php';?>
<?php include 'manage_task_tabs.php';?> 


<?php

include 'sql.php';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$task_id=$_POST['task_id']; 
	$description=$_POST['description']; 
 
$sql=mysqli_query($db_handle,"INSERT INTO `task_leader` (`Task_leader_id`, `username`, `task_id`, `description`) 
VALUES (NULL, '$username', '$task_id', '$description');");
if($sql>0) {
	echo " <h3 style='color:blue'>task added</h3>";
}else{
 echo $message1="<<h3 color='blue'>task Registration Failed, Try again</font>";
}
	
		mysqli_close($db_handle);}	
?>





 
<form name='add_form' method='post' action=''>
<div >
	<h1 style="margin-top: 0px; margin-bottom: 30px;">Add task</h1>
</div>
<div class="col-md-6">
<form name='add_form' role="form" method='post' action='add_task_list_out.php'> 

<div> 


<div  class="form-group has-success">
	<label class="control-label" for="inputSuccess">Supervisor</label>
	 <select class="form-control" name = 'username' type = 'text' value = ''> 
	 <option> select A Supervisor</option> 
	 <?php
include 'sql.php';
		$SQL = "SELECT * FROM info WHERE position = 'leader' ORDER BY position, username ASC";
		$result = mysqli_query($db_handle,$SQL);
		while ($db_field = mysqli_fetch_assoc($result)) {
			$a = $db_field['name'];
			$b = $db_field['email'];
			$c = $db_field['position'];
			print("<option>$a </option>");
			  
		}
		mysqli_close($db_handle); 
?>
	 </select> 
	 
	 
</div><div  class="form-group has-success">
	<label class="control-label" for="inputSuccess">Vacant Task</label>
	 <select class="form-control" name = 'task_id' type = 'text' value = ''> 
	 <option> select A Task </option> 
	 <?php
include 'sql.php';
		$super = "SELECT * FROM task_list ORDER BY task_id, task_number ASC";
		$result_super = mysqli_query($db_handle,$super);
		while ($db_field_super = mysqli_fetch_assoc($result_super)) {
			$a = $db_field_super['task_name'];
			$b = $db_field_super['task_type'];
			$c = $db_field_super['position'];
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
  
 <input  class="btn btn-primary"name = 'cancel' type = 'submit' value = 'CANCEL'>
<input class="btn btn-primary" name = 'submit' type = 'submit' value = 'ADD'> 
</div>
</div>
</form>
</div>
 
 
</body>
</html>