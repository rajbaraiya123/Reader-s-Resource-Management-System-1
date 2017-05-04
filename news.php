<?php
include('session1.php');
?>
<?php
	include("cookie.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style2 {
            width: 150px;
        }
        .auto-style3 {
            width: 280px;
        }
        .auto-style4 {
            width: 230px;
        }
        #id1 {
            width: 177px;
        }
        #id2 {
            width: 178px;
        }
        #id3 {
            width: 177px;
        }
        #id4 {
            width: 175px;
        }
        #id5 {
            width: 176px;
        }
        #id6 {
            width: 175px;
        }
        #id7 {
            width: 172px;
        }
    </style>
</head>
<body id="top">
    
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="../homepage.php">Reader's Resource</a></h1>
      <p></p>
    </div>
      <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">LOG OUT </a>
      
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
 <ul>
      <li ><a href="../homepage.php">Homepage</a></li>
	     <li ><a href="viewbooks.php">BOOKS</a></li>
      <li><a href="uploadbooks.php">View Uploaded Books</a></li>
    
      <li><a href="addcat.php">Add Things</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>s
        </ul>
      </li>
      <li class="active"><a href="news.php">News Feeds</a></li>
	    <li ><a href="modified.php">Modified</a></li>
	   
      <li class="last" ><a href="userprofile.php">Profile</a></li>

	  
    </ul>

    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->

    <!-- ####################################################################################################### -->
  
    
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
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    <div class="foot_contact">
      <h2>VR_SOFTWEAR SOLUTION</h2>
      <address>
      
      OFFICE:DHARAMSINH DESAI UNIVERSITY<br />
      City:NADIAD<br />
      Postcode/Zip
      </address>
      <ul>
        <li><strong>Tel:</strong> 9824406620</li>
        <li><strong>Fax:</strong> 98862394729</li>
        <li class="last"><strong>Email:</strong> <a href="#">raj.rk.rb@gmail.com</a></li>
      </ul>
    </div>
    
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">VR_COMPANY</a></p>
 
  </div>
</div>
   
</body>
</html>