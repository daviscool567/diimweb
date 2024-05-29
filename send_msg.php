<?php
if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['phone']) && isset ($_GET['msg']))
{
require 'config.php';
$name=$_GET['name'];
$email=$_GET['email'];
$subject=$_GET['subject'];
$msg=$_GET['msg'];
$phone=$_GET['phone'];




$name=stripslashes($name);
$email=stripslashes($email);
$subject=stripslashes($subject);
$msg=stripslashes($msg);
$phone=stripslashes($phone);




require("mail/class.phpmailer.php");

$mail2 = new PHPMailer();

$mail2->IsSMTP();        // set mailer to use SMTP
$mail2->Host = "diimtech.com";  // specify main and backup server
$mail2->SMTPAuth = true;     // turn on SMTP authentication
$mail2->Username = "support@diimtech.com";  // SMTP username
$mail2->Password = "Diim@2021_2021@obi"; // SMTP password
$mail2->From = "support@diimtech.com";
$mail2->FromName = $name;
$mail2->AddAddress("support@diimtech.com");
//$mail2->AddAddress(" tours@ng.gbtafrica.com");
//$mail2->AddAddress($email);
$mail2->AddReplyTo($email);

$mail2->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail2->IsHTML(true);                                  // set email format to HTML

$mail2->Subject = $subject;
$mail2->Body    = '<!DOCTYPE HTML>     
    <html>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body>
<div style="dbackground-color:#eee; border:solid; border-width:thin; border-color:#EEE; position: relative; font-size:15px; padding-top:2em; padding:1em; font-family:Verdana, Geneva, sans-serif">

<div style="width: 100%; text-align: center;">
</div>
<p style="font-size:15px; dtext-align:center;">
New Contact Form Submission . Find details below; 
</p>

<table>


<tr><td>Name : <td>'.$name.'</td></td></tr>
<tr><td> Subject  : <td>'.$subject.'</td></td></tr>
<tr><td>Email : <td>'.$email.'</td></td></tr>
<tr><td>Phone : <td>'.$phone.'</td></td></tr>
<tr><td>Message : <td>'.$msg.'</td></td></tr>


</table>
			
</div>
</body>
</html>';

//$mail2->addAttachment("m/passports/".$passport);
//$mail2->addAttachment("m//data_pages/".$data_page);

if($mail2->Send())
{
$suc = "YES";
} 


$output = array('success'=>$suc);
echo $_GET['callback']."(".json_encode($output).")"; //output JSON data

}
?>
