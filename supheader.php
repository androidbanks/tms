<?php
session_start();
$user = $_SESSION['username'];
$log = $_SESSION['leader'];
if ($log != "log"){
	header ("Location: index.php");
}
$msg = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Jobs and Oppotunities :TMS</title>
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/metisMenu.min.css" rel="stylesheet"> 
    <link href="style/dist/css/sb-admin-2.css" rel="stylesheet">  
	<link href= " vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">  
 
</head> 
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">TASK MANAGEMENT SYSTEM</a>
				 
            </div> 

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         
                        <li>
                            <a href = ""> <?php print " Welcome ". strtoupper($user);?></a>
                        </li>
						<li>
                            <a href = "leader.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href = "manage_user.php"><i class="fa fa-bar-chart-o fa-fw"></i>Tasks </span></a> 
                        </li>
                        
                        <li>
                            <a href = "messages.php"><i class="fa fa-edit fa-fw"></i> Message</a>
                        </li>
                        <li>
                            <a href = "changepass.php"><i class="fa fa-wrench fa-fw"></i>Change Password</span></a> 
                        </li>
                        <li>
                            <a href = "userlist.php"><i class="fa fa-wrench fa-fw"></i>Users List</span></a> 
                        </li>
                        <li>
                            <a href = "about_login.php"><i class="fa fa-wrench fa-fw"></i>About </span></a> 
                        </li>
                        <li>
                            <a href = "index.php"><i class="fa fa-sitemap fa-fw"></i> Logout </span></a>  
                        </li>
						
                         
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<div id="page-wrapper" style="margin: 0 0 0 250px;">