
<?php
include('db.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($db,"select  id,uid  from  member1  where  id='$user_check'  ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['id'];
$loggedin_id=$row['uid'];
if(!isset($loggedin_session)  ||  $loggedin_session==NULL)
{
echo  "Go  back";
header("Location:  ../login.php");
}
?>


<?php
					  
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lib1");
	
$id = $_GET['id'];
$q = "SELECT * FROM books WHERE isbn = '".$id."'";
$r = mysql_query($q) or die(mysql_error());
while(($a = mysql_fetch_array($r)) && isset($loggedin_id))
{
	
	$isbn=$a['isbn'];
	$name=$a['bname'];
	$auth=$a['authname'];
	$cat=$a['category'];
	$lan=$a['language'];
	$image=$a['image'];
	$pdf=$a['pdf'];
	$sql = "INSERT INTO cart(uid,isbn,bname,authname,category,language,image,pdf)
VALUES('$loggedin_id', '$isbn', '$name', '$auth', '$cat', '$lan', '$image','$pdf')";
$current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
	if(isset($current_id)) {
    echo"SucessFully Add As Favourite";

}
}

	?>