<?php
session_start();
$user = $_SESSION['username'];
$log = $_SESSION['admin'];
if ($log != "log"){
	header ("Location: login.php");
}
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
            <!-- /.navbar-header -->

             
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         
                        <li>
                            <a href = "admin.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href = "manage_user.php"><i class="fa fa-bar-chart-o fa-fw"></i>Manage TAsks </span></a> 
                        </li>
                        <li>
                            <a href = "group_task.php"><i class="fa fa-table fa-fw"></i>Group Tasks</a>
                        </li>
                        <li>
                            <a href = "messages.php"><i class="fa fa-edit fa-fw"></i> Message</a>
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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class=""> 
				<?php	 echo "welcome".strtoupper($user);?>
			</div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
     

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
