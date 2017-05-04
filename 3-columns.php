<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education Time | 3 Columns</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="../layout/styles/3_column.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="../homepage.php">E-Library</a></h1>
   
    </div>
    <form action="#" method="post" id="login">
      <fieldset>
        <legend>Student Login</legend>
        <input type="password" />
        <input type="text" />
        <div id="forgot">Need <a href="#">Help ?</a> or <a href="#">Forgot Your Details ?</a></div>
        <input type="image" src="../layout/images/sign_in.gif" id="signin" alt="Sign In" />
      </fieldset>
    </form>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li><a href="../homepage.php">Homepage</a></li>
      <li><a href="style-demo.html">Books</a></li>
      <li><a href="full-width.html">Regestration</a></li>
      <li><a href="#">Magazines</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
        </ul>
      </li>
      <li class="active"><a href="news.php">News</a></li>
      <li class="last"><a href="gallery.html">Profile</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="left_column">
      <div class="holder">
        <h2 class="title">Quick Links</h2>
        <ul class="nostart">
          <li><a href="#">Academic departments</a></li>
          <li><a href="#">Alumni</a></li>
          <li><a href="#">Business &amp; Enterprise</a></li>
          <li><a href="#">Departments A-Z</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Graduate Courses</a></li>
          <li><a href="#">International Students</a></li>
          <li><a href="#">Job opportunities</a></li>
          <li><a href="#">Lifelong Learning</a></li>
          <li><a href="#">Maps and Directions</a></li>
          <li><a href="#">Online Courses</a></li>
          <li><a href="#">Parents</a></li>
          <li><a href="#">Postgraduate research</a></li>
          <li><a href="#">Postgraduate taught</a></li>
          <li><a href="#">Prospective Students</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="#">Students</a></li>
          <li><a href="#">Teaching &amp; Learning</a></li>
          <li><a href="#">Undergraduate Courses</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="#">Visiting the University</a></li>
          <li><a href="#">What's On</a></li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title">Lorem ipsum dolor</h2>
        <div class="imgholder"><img src="../images/demo/190x90.gif" alt="" /></div>
        <div class="imgholder last"><img src="../images/demo/190x90.gif" alt="" /></div>
      </div>
    </div>
    <!-- ############ -->
    <div id="content">
      <h1 class="title">Main Title Here</h1>
    <div class="container">
<?php


	$xml = simplexml_load_file("https://sports.yahoo.com/top/rss.xml");
	echo '<ul class="list-group">';
	foreach($xml->channel->item as $itm)
	{
		$title = $itm->title;
		$link = $itm->link;
		$description = $itm->description;
		$date = $itm->pubDates;
	
		echo '<li class="list-group-item"><a href="'.$link.'">'.$title.'</a> <hr> '.$description.' <br> '.$date.' </li>';
	}
	echo '</ul>';
?>
</div>


    </div>
    <!-- ############ -->
    <div id="right_column">
      <div class="holder">
        <h2 class="title">Lorem ipsum dolor</h2>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li>Etiam vel sapien et</li>
          <li><a href="#">Etiam vel sapien et</a></li>
        </ul>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="holder">
        <h2 class="title">Lorem ipsum dolor</h2>
        <div class="imgholder"><img src="../images/demo/240x90.gif" alt="" /></div>
        <div class="imgholder"><img src="../images/demo/240x90.gif" alt="" /></div>
        <div class="imgholder last"><img src="../images/demo/240x90.gif" alt="" /></div>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
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
</body>
</html>