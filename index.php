<?php
session_start();
session_destroy();
$user = "";
$pass = "";
$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	include 'sql.php';

	$user = $_POST['uname'];
	$pass = $_POST['pword'];
		
	//unwanted HTML (scripting attacks)
	$user = htmlspecialchars($user);
	$pass = htmlspecialchars($pass);
	
	$SQL = "SELECT * FROM info";
	$result = mysqli_query($db_handle,$SQL);
	while ($db_field = mysqli_fetch_assoc($result)) {
		$a = $db_field['username'];
		$b = $db_field['password'];
		$pos = $db_field['position'];
		if(($user == $a) AND ($pass == $b)){
			if($pos == "admin"){
				session_start();
				$_SESSION['username'] = $user;
				$_SESSION['admin'] = "log";
				mysqli_close($db_handle);
				header("Location: admin.php");
				break;
			}
			else if($pos == "leader"){
				session_start();
				$_SESSION['username'] = $user;
				$_SESSION['leader'] = "log";
				mysqli_close($db_handle);
				header("Location: leader.php");
				break;
			}
			else if($pos == "member"){
				session_start();
				$_SESSION['username'] = $user;
				$_SESSION['member'] = "log";
				mysqli_close($db_handle);
				header("Location: member.php");
				break;
			}
		}
	}
	$msg = "Check username and/or password.";
	mysqli_close($db_handle);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/signin/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>
<div class="container">
    <div class="col-md-4 offset-md-4" style="padding-top: 200px;">

      <form name='login_form' method='post' class="form-signin" action=''>
        <h2 class="form-signin-heading">Sign In Here</h2>
		
        <label for="inputEmail"  class="sr-only">Email address</label>
        <input name = 'uname' class="form-control" placeholder="Email address" required type = 'text' value = ''  required autofocus> 
		
        <label for="inputPassword" class="sr-only">Password</label>
        <input name = 'pword' type='password'class="form-control" placeholder="Password" required value = ''>
         
		<input name = 'login' type = 'submit' class="btn btn-lg btn-primary btn-block" value = 'Sign in'>
         
      </form>

    </div>  
    </div>  
	
	
    <div class="container col-md-4 offset-md-5" style="padding-top:15px;">
	<div class="row">
	  <div class="col-*-*"> </div>
	  <div class="col-md-6"><center>to register contact admin,signup disabled for security reason</center></div>
	  <div class="col-*-*"> </div>
	</div>
	
	</div>
	
  </body>
</html>
