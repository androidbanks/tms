 <?php include 'header.php';?> 
 
<?php include 'manage_task_tabs.php';?> 

<h1 style="     margin-top: 0px;    margin-bottom: 30px;">Completion </h1>
 

<div>
<table class="table table-responsive table-bordered">
<tr>
	<th>Group</th>
	<th>Leader</th>
	<th>Status</th>
</tr>
<?php
include 'sql.php';

$SQL = "SELECT * FROM info WHERE position = 'leader' ORDER BY name ASC";
$result = mysqli_query($db_handle,$SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$a = $db_field['email'];
	$b = $db_field['username'];
	print("<tr><td align = 'center'><b>$a</b></td>");
	print("<td align = 'center'>$b</td>");
	
	$tot = 0;
	$counter = 0;
	$SQL1 = "SELECT * FROM info WHERE email = '$a'";
	$result1 = mysqli_query($db_handle,$SQL1);
	while ($db_field = mysqli_fetch_assoc($result1)) {
		$c = $db_field['email'];
		$tot = $tot + $c;
		$counter = $counter + 1;
	}
	if($counter == 0){
		$tot = $tot / ($counter - 1);
	}
	print("<td align = 'center'>".round($tot,2)." %</td>");
}


mysqli_close($db_handle);

?>
</table>
</div>

</body>
</html>