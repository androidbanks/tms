<?php include 'header.php';

include 'sql.php';
?> 

<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$position=$_POST['position'];
	$phone_contact=$_POST['phone_contact'];
	$date_of_birth=$_POST['date_of_birth'];
	$email=$_POST['email'];
$sql1=mysqli_query($db_handle,"SELECT * FROM info WHERE username='$username'")or die(mysqli_error($db_handle));
 $result=mysqli_fetch_array($sql1);
if($result>0){
 echo $message="<font color=blue>sorry the username entered already exists</font>";
}else{
$sql=mysqli_query($db_handle,"INSERT INTO `info` (`name`, `username`, `password`, `address`, `position`, `phone_contact`, `date_of_birth`, `email`) 
	VALUES ('$name', '$username', '$password', '$address', '$position', '$phone_contact', '$date_of_birth', '$email');");
if($sql>0) {
	echo " thanks for logiing in";
}else{
$message1="<font color=red>Registration Failed, Try again</font>";
}
	}}	
?>

<?php include 'manage_user_tabs.php';?> 
<h1 style="     margin-top: 0px;    margin-bottom: 30px;">Add Users Here</h1>
 
<form  method='post' action=''>
<div class="row">
<div class="col-md-6">
<div class="form-group has-success" >
			<label class="control-label" for="inputSuccess">User's Full Names </label>
			<input type="text" name="name" class="form-control" id="inputSuccess">
		</div>
	 	
		<div class="form-group has-success">
			<label class="control-label" for="inputSuccess">Usernames </label>
			<input type="text" name="username" class="form-control" id="inputSuccess">
		</div>
	 	
		<div class="form-group has-success">
			<label class="control-label" for="inputSuccess">Password </label>
			<input type="text" name="password" class="form-control" id="inputSuccess">
		</div>
	 	
		<div class="form-group has-success">
			<label class="control-label" for="inputSuccess">User's Email Address </label>
			<input type="text" name="email" class="form-control" id="inputSuccess">
		</div>
	 	
		<div class="form-group has-success">
			<label class="control-label" for="inputSuccess">User's Phyisical Address </label>
			<input type="text" name="address" class="form-control" id="inputSuccess">
		</div>
</div>
<div class="col-md-6"> 
		<div class="form-group has-success">
			<label class="control-label" for="inputSuccess">User's Phone Contact </label>
			<input type="text" name="phone_contact" class="form-control" id="inputSuccess">
		</div>
	 	
		<div class="form-group has-success">
			<label class="control-label" for="inputSuccess">User's Date of Birth</label>
			<input type="date" name="date_of_birth" class="form-control" id="inputSuccess">
		</div>
	 	
		<div class="form-group has-success">
			<label class="control-label" for="inputSuccess">User's Area of Expertise </label>
			<input type="text" name="area_of_expertise" class="form-control" id="inputSuccess">
		</div>
	 	
		<div class="form-group has-success">
			<label class="control-label" for="inputSuccess">User's Position </label>
			<select type="text" name="position" class="form-control" id="inputSuccess">
				<option>Member</option>
				<option>Supervisor</option>
				<option>Administrator</option>
			</select>
		</div>
	 	
	   
		<input class="btn btn-primary" name = 'submit' type = 'submit' value = 'Add User'> 
	 
	 
	</div>
</form>
</div>
</div>

</body>
</html>