<?php
include('session.php');
?>
 <?php
      mysql_connect("localhost","root","");
	mysql_select_db("library");
        $i = mysql_query("update member1 set id='".$_POST['id']."',password='".$_POST['password']."', email='".$_POST['email']."', phno='".$_POST['contact']."' where uid=$loggedin_id");
        if($i==true){
        header('Location: ../login.php?ans=1');
        }
		else
		{
			echo"try again";
		}
       
        mysql_close();
    ?>  