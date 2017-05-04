<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Form</title>

	<link rel="stylesheet" type="text/css"  href="Style/Edit_Form.css" />

</head>

<body background="Images/MyBackground.png" bgcolor="#FFCC99">
	<div class="topbar"> <h1 style="color:#FFF"><center>Edit Form</center></h1></div>    
	<center>
    <div class="box">
    	<?php
		$id = $_GET['txtid'];
		include ("connect.php");
		$i ="select id,bname,authname,category,language,descript from upload where id=".$id;
		$h= mysql_query($i);
		if($tr=mysql_fetch_array($h))
		{
	?>
    <table><form method="post" action="">
    	
        <tr>
        	<th>Book Name:</th>
        	<td><input type="text" name="txtname" value="<?php echo $tr[0]; ?>" /></td>
        </tr>
        <tr>
        	<th>Auth Name</th>
			<td>
            	<input type="text" name="txtgender" value="<?php echo $tr[1]; ?>" /></td>
          
        </tr>
        <tr>
        	<th>Category</th>
        	<td><input type="text" name="txtdob" value="<?php echo $tr[2]; ?>" /></td>
        </tr>
        <tr>
        	<th>Language</th>
        	<td><input type="text" name="txtsubject" value="<?php echo $tr[3]; ?>" /></td>
        </tr>
        <tr>
        	<th>Description</th>
        	
			<td><textarea cols="16" rows="3" name="txtaddress"> <?php echo $tr[4];?> </textarea></td>
        </tr>            
        
            <?php
				}
			?>
        	<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Save" />
            <a href="index.php"><img src="Images/Users_Group.png" title="Go Back"/></a>
            </td>
        </tr>
	</form></table>
    </div>
    </center>
    <?php
        include ("connect.php");
        $i = mysql_query("update upload set bname='".$_POST['txtname']."', authname='".$_POST['txtgender']."', category='".$_POST['txtdob']."', language='".$_POST['txtsubject']."' , descript='".trim($_POST['txtaddress'])."' where id=".$_POST['txtid']);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
        //header('Location::index.php');
        //exit;
        //mysql_close();
    ?>
</body>
</html>