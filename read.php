<?php 
	session_start();
?>
<html>
<body>
<?php 					  
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lib1");
$id = $_GET['id'];
$q = "SELECT * FROM books WHERE isbn = '".$id."'";
$r = mysql_query($q) or die(mysql_error()) ;
while($a = mysql_fetch_array($r))
{
	$path = $a['pdf'];
	$file = $a['bname'];
	header('content-type:application/pdf');
	header('content-Disposition: inline; filename = "'.$file.'"');
	header('content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');
	@readfile($path);
	
}
	?>
</body>
</html>