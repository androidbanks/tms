
 <?php include 'header.php';?> 
<?php include 'mes_tabs.php';?> 

 <?php

$msg = "";
include 'sql.php';

if (isset($_POST['cancel'])) {
	print "<script>location.href = 'inbox.php'</script>";
}
else if (isset($_POST['send'])) {
	$user = $_SESSION['username'];
	$nem = $_POST['hid_nem'];
	$sub = $_POST['sub'];
	$mes = $_POST['mes'];
	
	$SQL = "INSERT INTO sent_items (`to_receiver`, `from_sender`, `mail_subject`, `message`) VALUES ('$nem', '$user', '$sub', '$mes')";
	mysqli_query($db_handle,$SQL);
	
	$SQL = "INSERT INTO messaging (`to_receiver`, `from_sender`, `mail_subject`, `message`) VALUES ('$nem', '$user', '$sub', '$mes')";
	$result = mysqli_query($db_handle,$SQL);
	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'messages.php'</script>");
	}
	$msg = "Message Sent.";
	print("<div style='top:260; left:550; position:absolute; z-index:1;'>");
	print("<form name='ok_form' method='post' action='messages.php'>");
	print("<input name = 'ok' type = 'submit' value = 'OK'>");
	print("</div>");
}
else{
	$name = $_REQUEST['key'];
	?>
	 
	
 
	  To:  
	 
	 
	 <?phpecho  $name; ?> 
	 
	  Subject:  
	 
	 <form name = 'reply_form' method = 'post' action = 'reply_mail.php'> 
	 <div class="form-group has-success">
	 <label class="control-label" for="inputSuccess">To</label>    
	 <input class="form-control" name = 'hid_nem' type = 'hidden' value = "$name"> 
	 </div>
	 <div class="form-group has-success">
	 <label class="control-label" for="inputSuccess">Subject</label>    
	 <input class="form-control" name = 'sub' type = 'text' value = '' size = '69'>  
	 </div>
	 <textarea class="form-control" name = 'mes' rows = '15' cols = '59'> </textarea> 
	  
	 <input name = 'cancel' type = 'submit' value = 'CANCEL'> 
	 
	  <input name = 'send' type = 'submit' value = 'SEND'>  
 </form> 
	
	
	<?php 
	
}	
?>
 

<div style="top:200; left:300; position:absolute; z-index:1;">
<font face="Cooper Black" size = "5" color = "blue"><?php print $msg; ?></font>
</div>

 
</body>
</html>