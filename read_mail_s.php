<?php include 'header.php';?> 
<?php include 'mes_tabs.php';?> 

<?php
$ctrl = $_REQUEST['key'];
include 'sql.php';

$SQL = "UPDATE sent_items SET opened = 1 WHERE ctrl_no = '$ctrl'";
mysqli_query($db_handle, $SQL);


$SQL = "SELECT * FROM sent_items WHERE ctrl_no = '$ctrl'";
$result = mysqli_query($db_handle, $SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$to = $db_field['to_receiver'];
	$date = $db_field['date_send'];
	$sub = $db_field['mail_subject'];
	$mess = $db_field['message'];
}

?>


	<div class="row show-grid" >
		<div class="col-md-1" style="border: 1px solid #dddddd0a; background-color: #ffffff05 !important;"> To</div>
		<div class="col-md-4" style="border: 1px solid #dddddd0a; background-color: #ffffff05 !important;"><?php print $to; ?></div> 
	</div>

	<div class="row show-grid" >
		<div class="col-md-1" style="border: 1px solid #dddddd0a; background-color: #ffffff05 !important;"> Date</div>
		<div class="col-md-4" style="border: 1px solid #dddddd0a; background-color: #ffffff05 !important;"><?php print $date; ?></div> 
	</div>
 
	<div class="row show-grid" >
		<div class="col-md-1" style="border: 1px solid #dddddd0a; background-color: #ffffff05 !important;">Subject</div>
		<div class="col-md-4" style="border: 1px solid #dddddd0a; background-color: #ffffff05 !important;"><?php print $sub; ?></div> 
	</div>
	
	<div class="row show-grid" >
		<div class="col-md-1" style="border: 1px solid #dddddd0a; background-color: #ffffff05 !important;">Message</div>
		<div class="col-md-4" style="border: 1px solid #dddddd0a; background-color: #ffffff05 !important;"><?php print $mess; ?></div> 
	</div>
 
 
<a class="btn btn-primary" href = "delete_mail_s.php?key=<?php print $ctrl; ?>">Delete</a>
 

 
<a class="btn btn-primary" href = "sent_items.php?key=<?php print $ctrl; ?>"> Back</a>
 

</div>

</body>
</html>