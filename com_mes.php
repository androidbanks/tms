
<?php include 'header.php';?> 
<?php include 'mes_tabs.php';?> 
<h1 style="     margin-top: 0px;    margin-bottom: 30px;">Messages </h1>
 
<?php

$msg = "";
include 'sql.php';

if (isset($_POST['cancel'])) {
	print "<script>location.href = 'messages.php'</script>";
}
else if (isset($_POST['send'])) {
	$user = $_SESSION['username'];
	$nem = $_POST['nem'];
	$sub = $_POST['sub'];
	$mes = $_POST['mes'];
	
	$SQL = "INSERT INTO messaging (`to_receiver`, `from_sender`, `mail_subject`, `message`) VALUES ('$nem', '$user', '$sub', '$mes')";
	$result = mysql_query($SQL);
	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'messages.php'</script>");
	}
	
	$SQL = "INSERT INTO sent_items (`to_receiver`, `from_sender`, `mail_subject`, `message`) VALUES ('$nem', '$user', '$sub', '$mes')";
	$result = mysql_query($SQL);
	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'messages.php'</script>");
	}
	
	$msg = "Message Sent.";
	print("<div>");
	print("<form name='ok_form' method='post' action='messages.php'>");
	print("<input name = 'ok' type = 'submit' value = 'OK'>");
	print("</div>");
}
else{ ?>

 
 <form name = 'reply_form' method = 'post' action = 'com_mes.php'> 
	<div class="form-group has-success">
		<label class="control-label" for="inputSuccess">To</label>
		<input class="form-control" name = 'nem' type = 'text' value = ''> 
	</div> 
	<div class="form-group has-success"> 
		<label class="control-label" for="inputSuccess">Subject</label>    
		<input class="form-control" name = 'sub' type = 'text' value = '' size = '69'> 
	</div> 
	 
	  
	 <div class="form-group has-success"> 
 <textarea class="form-control" name = 'mes' rows = '15' cols = '59'> </textarea>
	   </div> 
	   
	   
	 
	 <input class="btn btn-primary" name = 'cancel' type = 'submit' value = 'CANCEL'> 
	  
	
	  
	 <input class="btn btn-info" name = 'send' type = 'submit' value = 'SEND'> 
	   
</form> 
<?php
	 
	
	
	

}	
?>
 
 

<div>
<h5 face="Cooper Black" size = "5" color = "blue"><?php print $msg; ?></h5>
</div>
 

</body>
</html>