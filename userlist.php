 <?php include 'header.php';?> 

<div >
<div>
<?php
	print("<table>");
	print "<tr><td><h1>". strtoupper($user)."</h1></td><td>(Administrator)</td></tr>";
	print("</table>");
?>
</div>
</div>

<div >
<table class="table table-bordered" >
<tr>
	<th>Username</th>
	<th>Group</th>
</tr>

<?php
include 'sql.php';

$SQL = "SELECT * FROM info ORDER BY email, username ASC";
$result = mysqli_query($db_handle,$SQL);
while ($db_field = mysqli_fetch_assoc($result)) {
	$a = $db_field['username'];
	$b = $db_field['email'];
	print("<tr>");
	print("<td align = 'center'>$a</td>");
	print("<td align = 'center'>$b</td>");
	print("</tr>");
}
?>
</table>
</div>

 

 

</body>
</html>