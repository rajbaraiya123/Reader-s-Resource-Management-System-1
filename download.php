<?php
					  
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lib1");
$id = $_GET['id'];
$q = "SELECT * FROM books WHERE isbn = '".$id."'";
$r = mysql_query($q) or die(mysql_error()) ;
while($a = mysql_fetch_array($r))
{
	$path = $a['pdf'];
	header('content-Disposition: attachment; filename = '.$path.'');
	header('content-type:application/octent-strem');
	header('content-length='.$filesize($path));
	readfile($path);
	
}
	?>