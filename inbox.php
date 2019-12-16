<?php include 'header.php';?> 
<?php include 'mes_tabs.php';?> 

<div>
<h1> <?php echo $user;?>'s Inbox:</h1>
</div>

<div >
<table class="table table-bordered table-responsive">
<tr>
	<th></th>
	<th>From</th>
	<th>Subject</th>
	<th>Date</th>
	<th>Action</th>
</tr>

<?php
include 'sql.php';
$SQL = "SELECT * FROM messaging WHERE to_receiver = '$user' ORDER BY date_send DESC";
$result = mysqli_query($db_handle,$SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$ctrl = $db_field['ctrl_no'];
	$a = $db_field['opened'];
	$b = $db_field['from_sender'];
	$c = $db_field['mail_subject'];
	$d = $db_field['date_send'];
	print("<tr>");
	if($a == 0){
		print("<td align = 'center'><a class='btn btn-primary' href = 'read_mail.php?key=".$ctrl."'><i class='fa fa-envelope'></i></a></td>");
	}
	else{
		print("<tr><td align = 'center'><a class='btn btn-success' href = 'read_mail.php?key=".$ctrl."'><i class='fa fa-envelope-o'></i></a></td>");
	}
	print("<td align = 'center'><b>$b</b></td>");
	if($c == ""){
		print("<td align = 'center' width = '150'>no subject</td>");
	}
	else{
		print("<td align = 'center' width = '150'>$c</td>");
	}
	print("<td>$d</td>");
	print("<td><a href = 'reply_mail.php?key=".$b."'>reply</a></td>");
	print("<td><a href = 'delete_mail.php?key=".$ctrl."'>Delete </a></td>");
	print("</tr>");
}
?>


</table>
</div>

 
</body>
</html>