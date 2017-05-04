<?php 
	session_start();
?>
<?php
	include("cookie.php");
?>
   <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lib1");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education Time | Full Width</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
    <style type="text/css">
        .auto-style6 {
            width: 100%;
            border-collapse: collapse;
            border-style: solid;
            border-width: 1px;
        }
        .auto-style7 {
            height: 18px;
        }
        .auto-style23 {
            width: 88%;
            border-collapse: collapse;
            float: right;
            border: 1px solid #FFFFFF;
            margin-left: 136px;
        }
        .auto-style24 {
            height: 19px;
            width: 553px;
        }
        .auto-style25 {
            width: 86px;
        }
        .auto-style26 {
            height: 18px;
            width: 86px;
        }
        .auto-style28 {
            height: 18px;
            width: 553px;
        }
        .auto-style29 {
            width: 553px;
        }
        .auto-style30 {
            height: 36px;
            width: 86px;
        }
        .auto-style31 {
            height: 36px;
        }
        .auto-style32 {
            font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
            font-size: x-large;
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
            padding: 1px;
        }
    </style>
</head>
<body id="top">
    <form id="form1" runat="server">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="../index.html">Education Time</a></h1>
      <p>Free Website Template</p>
    </div>
      <fieldset>
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="alogout.php">LOG OUT </a>
           </fieldset>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
       <li ><a href="../homepage.php">Homepage</a></li>
      
      <li ><a href="pages/viewbooks.php">BOOKS</a></li>
	  <li class="active"><a href="pages/viewfavrit1.php">My Books</a></li>
      <li><a href="pages/add.php">DropDown</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>s
        </ul>
      </li>
      <li><a href="pages/news.php">News Feeds</a></li>
	  <li ><a href="pages/addbooks2.php">Upload Book</a></li>
      <li class="last"><a href="pages/userprofile.php">Profile</a></li>
	  
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
      <table class="auto-style6">
          <tr>
              <td class="auto-style25">&nbsp;</td>
              <td>&nbsp;</td>
          </tr>
          <tr>
              <td class="auto-style25">&nbsp;</td>
              <td>&nbsp;</td>
          </tr>
          <tr>
<?php
$id = $_GET['id'];
$q = "SELECT isbn,bname,authname,image,descript FROM books WHERE isbn = '".$id."'";
$r = mysql_query($q) or die(mysql_error()) ;
$a = mysql_fetch_array($r);
{
	?>
              <td class="auto-style25">&nbsp;</td>
              <td style="font-family: Algerian; font-size: x-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a><?php  echo  $a['bname'];  ?></a>&nbsp;</td>
          </tr>
          <tr>
              <td class="auto-style26"></td>
              <td class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="auto-style32">&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</td>
          </tr>
          <tr>
              <td class="auto-style26">&nbsp;</td>
              <td class="auto-style7"></td>
          </tr>
          <tr>
              <td class="auto-style30">
                  <image src="" name="image" height="299px" width="160px" />
              </td>
              <td class="auto-style31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table align="right" class="auto-style23">
                  <tr>
                      <td class="auto-style24"><a>Authore Name</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -<?php  echo  $a['authname'];  ?></td>
                  </tr>
                  <tr>
                      <td class="auto-style24">&nbsp;</td>
                  </tr>
                  <tr>
                      <td class="auto-style24"><a>Language</a>&nbsp;&nbsp; -<?php  echo  $a['category'];  ?></td>
                  </tr>
                  <tr>
                      <td class="auto-style24"></td>
                  </tr>
                  <tr>
                      <td class="auto-style24"><a>Category</a>&nbsp; -&nbsp; <?php  echo  $a['language'];  ?></td>
                  </tr>
                  <tr>
                      <td class="auto-style24"></td>
                  </tr>
                  <tr>
                      <td class="auto-style28"><a>Description</a>&nbsp;&nbsp; -<?php  echo  $a['descript'];  ?></td>
                  </tr>
                  <tr>
                      <td class="auto-style29">&nbsp;</td>
                  </tr>
                  <tr>
                      <td class="auto-style29">&nbsp;</td>
                  </tr>
                  <tr>
                      <td class="auto-style29">&nbsp;</td>
                  </tr>
                  <tr>
                      <td class="auto-style29">&nbsp;</td>
                  </tr>
                  </table>
              </td>
          </tr>
          <tr>
              <td class="auto-style26">&nbsp;</td>
              <td class="auto-style7"></td>
          </tr>
          <tr>
              <td class="auto-style26">&nbsp;</td>
              <td class="auto-style7"></td>
          </tr>
          <tr>
              <td class="auto-style25">&nbsp;</td>
              <td>
                  <asp:ImageButton ID="ImageButton1" runat="server" Height="33px" Width="161px" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <asp:ImageButton ID="ImageButton2" runat="server" Height="33px" Width="160px" />
              </td>
          </tr>
          <tr>
              <td class="auto-style25">&nbsp;</td>
          </tr>
          <tr>
              <td class="auto-style25">&nbsp;</td>
              <td>&nbsp;</td>
          </tr>
          <tr>
              <td class="auto-style25">&nbsp;</td>
              <td>&nbsp;</td>
          </tr>
          </table>
<?php } ?>
  </div>
</div>
<!-- ####################################################################################################### -->
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


