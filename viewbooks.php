<?php
	include("cookie.php");
?>
<?php
include('session.php');
?>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lib1");
?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education Time | Full Width</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
    <style type="text/css">
        .auto-style1 {
            width: 100%;
            border-style: solid;
            border-width: 3px;
        }
        .auto-style4 {
            width: 100%;
            border-style: solid;
            border-width: 3px;
        }
        .auto-style12 {
            width: 10%;
            float: right;
            border-style: solid;
            border-width: 1px;
        }
        .auto-style13 {
            height: 23px;
        }
        .auto-style14 {
            width: 100%;
            border-style: solid;
            border-width: 1px;
        }
        .auto-style15 {
            height: 537px;
            width: 1260px;
        }
        .auto-style16 {
            height: 333px;
        }
        .auto-style17 {
            height: 37px;
        }
        .auto-style18 {
            height: 22px;
        }
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
<body id="top">
    <form method="POST" action="product124.php">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="../index.html">Reader's Resource</a></h1>
      <p></p>
    </div>
      <fieldset>
        <legend>Student Login</legend>
      <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">LOG OUT </a>
      
          <table align="right" class="auto-style12">
              <tr>
                  <td>&nbsp;</td>
              </tr>
          </table>
&nbsp;<div id="forgot">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div>
        &nbsp;</fieldset>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
   <ul>
     
     <li ><a href="../homepage.php">Homepage</a></li>
      
      <li class="active"><a href="viewbooks.php">BOOKS</a></li>
	  <li><a href="viewfavrit1.php">My Books</a></li>
     
      <li><a href="news.php">News Feeds</a></li>
	  <li ><a href="addbooks2.php">Upload Book</a></li>
      <li class="last"><a href="userprofile.php">Profile</a></li>
	  

    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <table class="auto-style1">
          <tr>
              <td class="auto-style15">
                  <table align="right" class="auto-style4">
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <table class="auto-style14">
                                  <tr>
                                      <td class="auto-style17" style="color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtsearch" placeholder="Type to Search" />
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <select name="cbosearch">
												<option>ISBN</option>
												<option>Book Name</option>
												<option>Authore</option>
												<option>category</option>
												<option>language</option>
											</select>
&nbsp;&nbsp;&nbsp;&nbsp;
                                           <input type="submit" value="Search" name="cmdsearch">
										   
										
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>Category</a>&nbsp;&nbsp;
										
                                        <select name="category">
															<option>Select Category</option>
															<?php
															$get_cats = "select * from category";
															$run_cats=mysql_query($get_cats);
															while($row_cats=mysql_fetch_array($run_cats))
															{
																$cat_id=$row_cats['cid'];
																$cat_name=$row_cats['cname'];
																echo "<option value='$cat_id'>$cat_name</option>";
															}
															?>
										</select>
                                      </td>
                                  </tr>
                              </table>
                          </td>
                      </tr>
					  
                   </table>
				   
				<div id="product_box">

<?php getpro() ?>



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
				<img src='../$photo1' width='150px' height='150px' /><br/>
				
				<a href='we.php?id=".$row['isbn']."'>Description</a>				
				
			</div>
			
		";
				
}
}
?>
</div>

              </td>
          </tr>
      </table>
  </div>
</div>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
    </form>
</body>
</html>



