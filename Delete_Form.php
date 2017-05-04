
<?php
	include("cookie.php");
?>
<?php
 include("session.php");
 ?>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lib1");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Form</title>
	<link href="Style/Delete_Form.css" type="text/css" rel="stylesheet" />
</head>

<body background="Images/MyBackground.png" bgcolor="#999966">
	<div class="topbar"><center><h1 style="color:#FFF">Delete Form</h1></center></div>
	<div id="box"><center>
    
    	<?php
		
			$id = $_GET['txtid'];
			include ("connect.php");
			$i = "select * from cart where isbn=".$id;
			$h = mysql_query($i);
			if($tr=mysql_fetch_array($h))
			{
		?>
    
	<table>
    		<form method="post" action="">
    	<tr>
        	<th>ID:</th>
            <td><input type="text" name="txtid" value="<?php echo $tr[0]; ?>" /></td>
        </tr>
        <tr>
        	<th>BOOK Name:</th>
            <td><input type="text" name="txtname" value="<?php echo $tr[1]; ?>"/></td>
        </tr>
        <tr>
        	<th>Authore Name</th>
            <td><input type="text" name="txtgender" value="<?php echo $tr[2]; ?>" /></td>
        </tr>
        <tr>
        	<th>Category</th>
            <td><input type="text" name="txtdob" value="<?php echo $tr[3]; ?>" /></td>
        </tr>
        <tr>
        	<th>Language</th>
            <td><input type="text" name="txtaddress" value="<?php echo $tr[3]; ?>" /></td>
        </tr>
      
        <?php
			}
		?>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="cmddelete" value="Delete"/>
            <a href="index.php"><img src="Images/Users_Group.png" title="Go Back" /></a>
            </td>
        </tr>
        	</form>
    </table></center>
	</div>
        <?php
        $id=$_GET['txtid'];
			if(isset($id))
			{
        include("connect.php");
        $i = mysql_query("delete from cart where isbn=".$id);
        if($i==true){
        header("Location: viewfavrit1.php");


        }
			}
        //header('Location::index.php');
        //exit;
        //mysql_close();
    ?>
</body>
</html>