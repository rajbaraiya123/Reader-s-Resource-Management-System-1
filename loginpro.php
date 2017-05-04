<?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"]  ==  "POST")
{
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$result  =  mysqli_query($db,"SELECT  *  FROM  member1");
$c_rows  =  mysqli_num_rows($result);
if  ($c_rows!=$username)  {
header("location:  login.php");
}
$sql="SELECT  uid  FROM  member1  WHERE  id='$username'  and  password='$password'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($result);
if($count==1)
{
$_SESSION['login_user']=$username;
setcookie("login","1",time()+3600);
header("location: homepage.php");
}
else
{
	header("location: login.php?err=1");
}
}
?>