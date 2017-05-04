<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'lib1');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$fullname = $_POST['lan'];
	
	
		
    
	$query = "INSERT INTO language (lname) VALUES ('$fullname')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "Category Is Uploaded...";
	}
}

function SignUp()
{
if(!empty($_POST['lan']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT lname FROM language WHERE lname = '$_POST[lan]' ") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		NewUser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>
