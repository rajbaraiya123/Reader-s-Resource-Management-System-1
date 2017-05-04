<?php 
						 
						  
						   $con=mysql_connect("localhost","root","");
	mysql_select_db("lib1");
	$id = $_GET['id'];
 
$q = "SELECT * FROM cart WHERE isbn = '".$id."'";
$r = mysql_query($q) or die(mysql_error()) ;
$a = mysql_fetch_array($r);
echo("../".$a['pdf']);
	?>