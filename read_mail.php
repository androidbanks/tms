<?php include 'header.php';?> 
<?php include 'mes_tabs.php';?> 

<?php
$ctrl = $_REQUEST['key'];
include 'sql.php';

$SQL = "UPDATE messaging SET opened = 1 WHERE ctrl_no = '$ctrl'";
mysql_query($SQL);

$SQL = "SELECT * FROM messaging WHERE ctrl_no = '$ctrl'";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$from = $db_field['from_sender'];
	$date = $db_field['date_send'];
	$sub = $db_field['mail_subject'];
	$mess = $db_field['message'];
}

?>
<div style="top:150; left:250; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">From:</font></b>
</div>

<div style="top:150; left:310; position:absolute; z-index:1;">
<b><font face="Arial" size = "3"><?php print $from; ?></font></b>
</div>

<div style="top:170; left:255; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">Date:</font></b>
</div>

<div style="top:170; left:310; position:absolute; z-index:1;">
<b><font face="Arial" size = "3"><?php print $date; ?></font></b>
</div>

<div style="top:200; left:232; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">Subject:</font></b>
</div>

<div style="top:200; left:310; position:absolute; z-index:1;">
<b><font face="Arial" size = "3"><?php print $sub; ?></font></b>
</div>

<div style="top:250; left:250; position:absolute; z-index:1;">
<table border = "0" width = "500" bgcolor = "white">
<tr><td><?php print $mess; ?></td></tr>
</table>
</div>



<div style="top:150; left:800; position:absolute; z-index:1;">
<img src = "images/image002.gif"></img>

<div style="top:50; left:10; position:absolute; z-index:1;">
<a href = "com_mes.php"><img src = "images/compose.gif" border = "0"></img></a>
</div>

<div style="top:100; left:10; position:absolute; z-index:1;">
<a href = "reply_mail.php?key=<?php print $from; ?>"><img src = "images/reply.gif" border = "0"></img></a>
</div>

<div style="top:150; left:10; position:absolute; z-index:1;">
<a href = "delete_mail.php?key=<?php print $ctrl; ?>"><img src = "images/delete.gif" border = "0"></img></a>
</div>

<div style="top:200; left:10; position:absolute; z-index:1;">
<a href = "inbox.php"><img src = "images/back.gif" border = "0"></img></a>
</div>
</div>

</body>
</html>