 <?php include 'header.php';?> 
<?php include 'mes_tabs.php';?> 

<div>
<h1>Sent Messages</h1>
</div>

<div>
<table class="table table-bordered table-responsive">
<tr>
	<th></th>
	<th>To</th>
	<th>Subject</th>
	<th>Date</th>
	<th>Action</th>
</tr>

<?php
include 'sql.php';

$SQL = "SELECT * FROM sent_items WHERE from_sender = '$user' ORDER BY date_send DESC";
$result = mysqli_query($db_handle,$SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$ctrl = $db_field['ctrl_no'];
	$a = $db_field['opened'];
	$b = $db_field['to_receiver'];
	$c = $db_field['mail_subject'];
	$d = $db_field['date_send'];
	print("<tr>");
	if($a == 0){
		print("<td ><a class='btn btn-primary' href = 'read_mail_s.php?key=".$ctrl."'><i class='fa fa-envelope'></i></a></td>");
	}
	else{
		print("<tr><td align = 'center' width = '1'><a class='btn btn-success' href = 'read_mail_s.php?key=".$ctrl."'><i class='fa fa-envelope-o'></i></td>");
	}
	print("<td align = 'center'><b>$b</b></td>");
	if($c == ""){
		print("<td align = 'center' width = '150'>no subject</td>");
	}
	else{
		print("<td align = 'center' width = '150'>$c</td>");
	}
	print("<td align = 'center'>$d</td>");
	print("<td align = 'center' width ='60'>");
	print("<a class='btn btn-primary' href = 'delete_mail_s.php?key=".$ctrl."'><i class='fa fa-times-circle'></i></a></td>");
	print("</tr>");
}
?> 
</table>
</div>
 
</body>
</html>