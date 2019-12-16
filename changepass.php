 <?php include 'header.php';?> 

<div>
<div>
<?php
	print("<table>");
	print "<tr><td><h1>". strtoupper($user)."</h1></td><td>(Administrator)</td></tr>";
	print("</table>");
?>
</div>
</div>

<?php
include 'sql.php';
if (isset($_POST['edit'])) {
	include 'sql.php';
	$pasc = $_POST['upasc'];
	$pas1 = $_POST['upas1'];
	$pas2 = $_POST['upas2'];
	$SQL = "SELECT * FROM info WHERE username = '$user'";
	$result = mysqli_query($db_handle,$SQL);
	while ($db_field = mysqli_fetch_assoc($result)) {
		$a= $db_field['password'];
		if ($pasc == $a){
			if($pas1 == $pas2){
				$SQL = "UPDATE info SET password  = '$pas1' WHERE username = '$user'";
				mysqli_query($db_handle,$SQL);
				mysqli_close($db_handle);
				$msg = "Password change.";
			}
			else{
				$msg = "Password did not match.";
			}
		}
		else{
			$msg = "Current password error.";
		}
	}
}


?>
  

	<div class="col-md-5"> 
	 <form name='edit_form' method='post' action='changepass.php'> 
  <div class="form-group has-success">
	  <label class="control-label" for="inputSuccess">Current Password: </label>     
	 <input class="form-control" name = 'upasc' type = 'password' value = ''>  
	  </div>
	    <div class="form-group has-success">
	 <label class="control-label" for="inputSuccess">  New Password:</label>   
	 <input class="form-control" name = 'upas1' type = 'password' value = ''>  
	 </div>
	 <div class="form-group has-success">
	 <label class="control-label" for="inputSuccess">Re-type Password:</label>  
	 <input class="form-control" name = 'upas2' type = 'password' value = ''>  
	 </div>
	  
	 
	  <input class="btn btn-primary" name = 'edit' type = 'submit' value = 'change password'> 
	 
	 </form> 
	 </div> 
 

</body>
</html>