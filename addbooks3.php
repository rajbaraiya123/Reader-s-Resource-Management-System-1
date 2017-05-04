<?php
		 $id = $_GET['txtid'];
			include ("connect.php");
			$i = "select bname,authname,category,language,image,pdf,descript from upload where id=".$id;
			$h = mysql_query($i);
			if($rows=mysql_fetch_array($h))
			{
                         $name=$rows['bname'];

						$name1=$rows['authname'];
						$name2=$rows['category'];
						$name3=$rows['language'];
						$name4=$rows['image'];
						$name5=$rows['pdf'];
						$name6=$rows['descript'];

				$i = "INSERT INTO books(bname,authname,category,language,image,pdf,descript)
VALUES('$name', '$name1', '$name2', '$name3', '$name4', '$name5', 'name6')";
$current_id = mysql_query($i) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
if(isset($current_id) && isset($id)) 
{
	$i = "delete from  upload where id=".$id;
			$h = mysql_query($i);
$current_id1 = mysql_query($i) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
if(isset($current_id1))
{
header("Location: viewbooks.php");
}
}}
?>

			

             