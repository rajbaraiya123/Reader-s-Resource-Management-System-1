

<!DOCTYPE html>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lib1");
?>
	

<html>
<head>
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style2 {
            width: 201px;
        }
        .auto-style3 {
            width: 320px;
        }
        .auto-style4 {
            font-size: xx-large;
        }
        .auto-style5 {
            width: 320px;
            height: 23px;
        }
        .auto-style6 {
            width: 201px;
            height: 23px;
        }
        .auto-style7 {
            height: 23px;
        }
    </style>
	<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
    <form name="frmImage" enctype="multipart/form-data" action="n.php" method="POST" class="frmImageUpload" >
    <div>
    
        <br />
        <table class="auto-style1">
            <caption class="auto-style4">
                Book Insert</caption>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">Book Name</td>
                <td>
                    <input type="text" name="bookname" >
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">Authore Name</td>
                <td>
                     <input type="text" name="auth">
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">Category</td>
                <td><select name="category">
				<option>select ctegory</option>
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
		</select></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">Language</td>
                <td><select name="lan">
				<option>select language</option>
				<?php
				$get_cats = "select * from language";
		$run_cats=mysql_query($get_cats);
		while($row_cats=mysql_fetch_array($run_cats))
		{
			$cat_id=$row_cats['lid'];
			$cat_name=$row_cats['lname'];
			echo "<option value='$cat_id'>$cat_name</option>";
		}
				?>
			</select>
		</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">image</td>
                <td><input type="file" name="image" /></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">Upload Book(pdf)</td>
              
                <td><input type="file" name="pdf" /></td>
            </tr>
            <tr>
                <td class="auto-style3">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style5"></td>
                <td class="auto-style6">Description</td>
             
                <td class="auto-style7"><textarea name="desc" cols="12" rows="20"></textarea></td>
                <td class="auto-style7"></td>
            </tr>
            <tr>
                <td class="auto-style5">&nbsp;</td>
                <td class="auto-style6">&nbsp;</td>
             
                <td class="auto-style7">&nbsp;</td>
                <td class="auto-style7">&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style5">&nbsp;</td>
                <td class="auto-style6">&nbsp;</td>
             
                <td class="auto-style7">&nbsp;</td>
                <td class="auto-style7">&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style5">&nbsp;</td>
                <td class="auto-style6">&nbsp;</td>
             
                <td class="auto-style7">
                    <input type="submit" height="25px"  width="92px"  />
                </td>
                <td class="auto-style7">&nbsp;</td>
            </tr>
        </table>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    
    </div>
    </form>
	
</body>
</html>
