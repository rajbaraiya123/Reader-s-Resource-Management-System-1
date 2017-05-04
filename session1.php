<?php
include('db.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($db,"select  id,uid  from  admin1  where  id='$user_check'  ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['id'];
$loggedin_id=$row['uid'];
if(!isset($loggedin_session)  ||  $loggedin_session==NULL)
{
echo  "Go  back";
header("Location:  ../adminlogin.php");
}
?>