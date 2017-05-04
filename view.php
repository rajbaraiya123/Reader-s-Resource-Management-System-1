
<html>
<head>

<style type="text/css">
#product_box
{
	text_align:center;
	margin-left:30px;
	margin-botom:10px;
}
#single_product{float:left; margin-left:20px; padding:10px;}
#single_product img{border:2px solid black;}
</style>
</head>

<body>
<h3>Dynamic Grid View</h3>
<div id="product_box">
<?php getpro(); ?>




<?php
function getpro()
{
mysql_pconnect("localhost", "root", "");
mysql_select_db ("lib1");
$sql=mysql_query("SELECT isbn,bname,authname,image FROM books ")
or die(mysql_error());
while($row =mysql_fetch_array($sql)){

	//print_r($row);
		$id=$row['isbn'];
		$name=$row['bname'];
		$photo1=$row['image'];
		$auth=$row['authname'];
		echo
		"
			<div id='single_product'>
				<h3>$name</h3>
				<img src='$photo1' width='150px' height='150px' /><br/>
				
				<a href='desc.php?id=$id'>Description</a>				
				
			</div>
			
		";
				
}
}
?>
</div>
</body>
</html>