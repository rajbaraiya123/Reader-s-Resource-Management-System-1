
<?php
if((isset($_FILES['image'])) && (!empty($_FILES['image']))) {
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
$connect=mysql_connect("localhost", "root", "");
mysql_select_db ("library");
$UploadName1 = $_FILES['image']['name'];
$UploadTmp1 = $_FILES['image']['tmp_name'];
$UploadType1 = $_FILES['image']['type'];
$FileSize1 = $_FILES['image']['size'];
$target_path1 = "Upload/".$UploadName1;



if(!$UploadTmp1){
		die("No File Selected, Please Upload Again");
}
else
{
			move_uploaded_file($UploadTmp1, "Upload/$UploadName1");
}

$id = $_POST['id'];
$password = $_POST['password'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$sql = "INSERT INTO member1(id,password,email,image,phno)
VALUES('$id', '$password', '$email', '$target_path1', '$phno')";

if(isset($id)){
$mysql_get_users = mysql_query("SELECT * FROM member1 where id='$id'");

$get_rows = mysql_affected_rows($connect);

if($get_rows >=1){
header("Location: registration.php?mp=1");
}




}
if(isset($current_id) && isset($email)) 
{
require_once('class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->IsHTML(true);
$mail->Username = "readers.resourcelibrary@gmail.com";
$mail->Password = "9824406620";
$mail->SetFrom("readers.resourcelibrary@gmail.com");
$mail->Subject = "Wel Come TO Elibrary sytem";
$mail->Body = "WEL COME TO OUR Elibrary SYSTEM which is powered By Digital India   <br/>
		<br/>
		<br/>
          A book is a dream that you hold in your hand.
					<br/>
                                        –Neil Gaiman";
	$mail->AddAddress($email);
$mail->Send();
header("Location: login.php?reg=1");
}}}
?>
<html>
<head>
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
            border-collapse: collapse;
            border-style: solid;
            border-width: 3px;
        }
        .auto-style3 {
            width: 176px;
            height: 116px;
        }
        .auto-style4 {
            width: 219px;
        }
        .auto-style6 {
            font-size: xx-large;
            height: 96px;
        }
        .auto-style7 {
            font-family: "Yu Gothic UI";
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
            padding: 1px;
        }
        .auto-style8 {
            width: 100%;
            border: 3px solid #808080;
        }
        .auto-style10 {
            width: 219px;
            height: 96px;
        }
        .auto-style11 {
            height: 96px;
        }
        .auto-style12 {
            width: 333px;
        }
        .auto-style14 {
            width: 573px;
        }
        .auto-style22 {
            height: 12px;
        }
        .auto-style24 {
            width: 236px;
            height: 12px;
        }
        .auto-style25 {
            font-family: "Poor Richard";
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
            padding: 2px;
        }
        .auto-style26 {
            width: 333px;
            height: 25px;
        }
        .auto-style27 {
            width: 573px;
            height: 25px;
        }
        .auto-style28 {
            height: 25px;
        }
        .auto-style34 {
            width: 236px;
        }
        .auto-style35 {
            width: 204px;
            height: 92px;
            margin-left: 0px;
        }
        .auto-style36 {
            width: 236px;
            height: 30px;
        }
        .auto-style37 {
            height: 30px;
        }
    </style>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
    <div>
    
        <table class="auto-style1">
            <tr>
                <td class="auto-style10">
                    <img alt="" class="auto-style3" src="images1.jpg" /></td>
                <td class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp; <span class="auto-style7">Readers&nbsp;&nbsp; Resourse&nbsp;&nbsp; Managment</span></td>
                <td class="auto-style11"></td>
            </tr>
            <tr>
                <td class="auto-style4">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    
    </div>
        <table cellpadding="2" class="auto-style8">
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14" style="font-size: x-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="auto-style25">&nbsp;Registration</span></td>
                <td></td>
            </tr>
            <tr>
                <td class="auto-style26"></td>
                <td class="auto-style27"></td>
                <td class="auto-style28"></td>
            </tr>
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14">
                    <table class="auto-style8">
                        <caption>
                        </caption>
                        <tr>
                            <td class="auto-style34"></td>
                            <td>
                                <img alt="" class="auto-style35" src="imagesas.jpg" /></td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; UserName</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="id" required>
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="password" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Re-Password</td>
                            <td class="auto-style37">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="repassword" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email&nbsp;</td>
                            <td class="auto-style22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="email" required>
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td>&nbsp;&nbsp;&nbsp;
                                </td>
                        </tr>
                        <tr>
                            <td class="auto-style36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Profile-Picture&nbsp;</td>
                            <td class="auto-style37">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="file" name="image" required>
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;phone-number</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="phno" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td>
                                <input type="submit" >
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="auto-style34">&nbsp;</td>
                            <td><?php 
							if(isset($_REQUEST["mp"]))
							{
								echo"User Already Exist";
							}
							?>
				</td>
                        </tr>
                    </table>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style12">&nbsp;</td>
                <td class="auto-style14">&nbsp;</td>
                <td>
							
							</td>
            </tr>
        </table>
    </form>
</body>
</html>
