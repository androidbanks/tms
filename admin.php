<?php include 'header.php';?> 


<div class="alert alert-success alert-dismissable">
 <button type="button" class="close" data-dismiss="alert"
 aria-hidden="true">
 &times;
 </button>
 Welcome <?php   echo strtoupper($user);?>
</div>
 
<div>
<?php
include 'sql.php';
$mess = "";
$count = 0;
$SQL = "SELECT * FROM messaging WHERE to_receiver = '$user' AND opened = 0";
$result = mysqli_query($db_handle,$SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$count = $count + 1;
}
mysqli_close($db_handle);
if($count > 0){
	print("You have ".$count." new message!");
}
else{
	print("You have no new message!");
}

?>
</div>
 
 
<a href = "changepass.php"> </a>
  
<a href = "userlist.php"> </a>
 
 

</body>
</html>