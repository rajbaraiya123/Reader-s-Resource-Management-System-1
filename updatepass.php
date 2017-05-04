
<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'library');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


if(isset($_POST['email']))
{
$email = $_POST['email'];
$sql = "select password from member1 where email='$email'";
$R = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
while($rows=mysql_fetch_array($R))
{
     
	  $password=$rows['password'];

	  echo($password);

if(isset($email) && isset($password)) 
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
$mail->Subject = "Forget Password in E-Library System";
$mail->Body = $password;
	$mail->AddAddress($email);
$mail->Send();
header("Location: login.php?md=1");
}}
}
?>
