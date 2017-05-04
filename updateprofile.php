<?php
include('session.php');
?>
<?php
	include("cookie.php");
?>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("library");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education Time | Full Width</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
    <style type="text/css">
        .auto-style1 {
            width: 100%;
            border-left-style: solid;
            border-left-width: 3px;
            border-right: 3px solid #C0C0C0;
            border-top-style: solid;
            border-top-width: 3px;
            border-bottom: 3px solid #C0C0C0;
        }
        .auto-style4 {
            width: 1067px;
            height: 424px;
        }
        .auto-style5 {
            width: 70%;
            border: 3px solid #CCCCCC;
        }
        .auto-style6 {
            height: 27px;
        }
        .auto-style7 {
            width: 24%;
            border: 3px solid #CCCCCC;
        }
        .auto-style8 {
            width: 249px;
        }
        .auto-style9 {
            height: 23px;
        }
        .auto-style15 {
            width: 249px;
            height: 19px;
        }
        .auto-style17 {
            width: 249px;
            height: 26px;
        }
        .auto-style18 {
            width: 289px;
            height: 120px;
        }
    </style>
</head>
<body id="top">
    <form method="POST" action="updatepro.php" >
<?php
		include ("db.php");
		$i ="select id,password,email,phno from member1 where uid=$loggedin_id";
		$result=mysqli_query($db,$i);
		
	?>
<?php
while($rows=mysqli_fetch_array($result)){
?>

<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="../index.html">Reader's Resource</a></h1>
    
    </div>
      
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
       <li ><a href="../homepage.php">Homepage</a></li>
      <li><a href="style-demo.html">LIBRARY</a></li>
      <li ><a href="viewbooks.php">BOOKS</a></li>
      <li><a href="addcat.php">DropDown</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>s
        </ul>
      </li>
      <li><a href="news.php">News Feeds</a></li>
      <li class="active last"><a href="userprofile.php">Profile</a></li>
	  
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
      <table cellpadding="2" class="auto-style1">
          <tr>
              <td class="auto-style4">
                  <table align="right" class="auto-style5">
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</td>
                      </tr>
                     
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                      </tr>
                      
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>User-Id</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs;<input type="text" name="id" value="<?php echo $row['id']; ?>" /></td>
                      </tr>
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="password" value="<?php echo $row['password']; ?>" ></td>
                      </tr>
                      <tr>
                          <td class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>E-mail</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="text" name="email" value="<?php echo $row['email']; ?>" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          </td>
                      </tr>
                      <tr>
                          <td class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>Contact-No</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="text" name="contact" value="<?php echo $row['phno']; ?>" /></td>
                      </tr>
					      <tr>
                          <td class="auto-style6"
						  </tr>
						  <tr>
                          <td class="auto-style6"
						  </tr>
	
                      <tr>
                          <td class="auto-style6"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="SAVE"></td>
                      </tr>
					  
                   
                              <?php } ?>
						
                      </table>
					 
                  <table align="left" class="auto-style7">
                      <tr>
                          <td class="auto-style8">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ADMIN PANEL&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="profile.php">My Profile</a>
                              &nbsp;&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="updateprofile.php">Update My Profile</a>
                              &nbsp;</td>
                      </tr>
					  
                      <tr>
                          <td class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                           &nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style8">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style15"></td>
                      </tr>
                      <tr>
                          <td class="auto-style15">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style17"></td>
                      </tr>
                      
                      </table>
              </td>
          </tr>
      </table>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    <div class="foot_contact">
      <h2>University Name Here</h2>
      <address>
      Address Line 1<br />
      Address Line 2<br />
      Town/City<br />
      Postcode/Zip
      </address>
      <ul>
        <li><strong>Tel:</strong> xxxxx xxxxxxxxxx</li>
        <li><strong>Fax:</strong> xxxxx xxxxxxxxxx</li>
        <li class="last"><strong>Email:</strong> <a href="#">contact@mydomain.com</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Administration</h2>
      <ul>
        <li><a href="#">Disclaimer</a></li>
        <li><a href="#">Accessibility</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
        <li><a href="#">Press Release Information</a></li>
        <li><a href="#">Annual Report</a></li>
        <li><a href="#">Financial Statements</a></li>
        <li><a href="#">Job Vacancies</a></li>
        <li class="last"><a href="#">Semester Dates</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Link Block 2</h2>
      <ul>
        <li><a href="#">Schools and Colleges</a></li>
        <li><a href="#">Student Activities</a></li>
        <li><a href="#">Student Affairs</a></li>
        <li><a href="#">Student Development</a></li>
        <li><a href="#">Student Financial Services</a></li>
        <li><a href="#">Student Group Directory</a></li>
        <li><a href="#">Student Life</a></li>
        <li><a href="#">International Students</a></li>
        <li class="last"><a href="#">Global Learning</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Link Block 3</h2>
      <ul>
        <li><a href="#">Academic Advisory</a></li>
        <li><a href="#">Academic Assistance</a></li>
        <li><a href="#">Academic Calendars</a></li>
        <li><a href="#">Academics Office</a></li>
        <li><a href="#">Administration</a></li>
        <li><a href="#">Adult Learners</a></li>
        <li><a href="#">Alumni Chapters</a></li>
        <li><a href="#">Alumni Events</a></li>
        <li class="last"><a href="#">Residential Colleges</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
    </form>
</body>
</html>
