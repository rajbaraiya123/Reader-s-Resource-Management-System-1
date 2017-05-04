<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'lib1');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$fullname = $_POST['cato'];
	
	
		
    
	$query = "INSERT INTO category (cname) VALUES ('$fullname')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	header("Location: addcat.php?cat=1");
	}
}

function SignUp()
{
if(!empty($_POST['cato']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT cname FROM category WHERE cname = '$_POST[cato]' ") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		NewUser();
	}
	else
	{
		header("Location: addcat.php?catu=1");
	}
}
}
if(isset($_POST['cato']))
{
	SignUp();
}
?>
