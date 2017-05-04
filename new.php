<?php 
session_start();
if(isset($_SESSION['id']))
{
$mysqli=mysql_connect("localhost","root","");
	mysql_select_db("library");

$query = "SELECT id,password,email,phno FROM user WHERE id = '".$_SESSION['id']."'";
if($row = mysql_query($query))
{
    
        echo "<div align=\"center\">";
        echo "<br />Your <b><i>Profile</i></b> is as follows:<br />";
        echo "<b>First name:</b> ". $row['id'];
        echo "<br /><b>Last name:</b> ".$row['password'];
        echo "<br /><b>Program:</b> ".$row['email'];
        echo "<br /><b>Year:</b> ".$row['phno'];
        echo "</div>";   
   
}
else
{
    echo "No results found";
}
}
else
{
	echo "set session";
}
?>