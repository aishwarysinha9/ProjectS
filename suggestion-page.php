<?php
require 'cnect.php';
require_once 'vendor/autoload.php';


$sn=$_POST['sname'];
$em=$_POST['email_s'];
$sb=$_POST['sub'];
$sg=$_POST['suggestion'];
$dt=date("d-m-Y");
date_default_timezone_set("Asia/Kolkata");
$current_date = date("H:i:s");
//$newURL="http://localhost:90/Suggestion-box/index.php";



/*-------------------------------- PHPMAILER ----------------------------------------*/


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 2525;
//587 
$mail->Host       = "smtp.elasticemail.com";
$mail->Username   = "ashwary@ednerds.com";
$mail->Password   = "52FB4F617D2DAD9A7EA214D9F312DA6B63F9";


$mail->IsHTML(true);
$mail->addaddress($em, $em);
$mail->setfrom("ashwary@ednerds.com", "ashwary");
$mail->addreplyto("ashwary@ednerds.com", "ashwary");
$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = $sb;
$content = "<b> ".$sg."</b>";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}


$randnum;


$sql_q1="SELECT FLOOR(RAND() * 99999) AS c_num FROM sug WHERE 'c_num' NOT IN (SELECT case_num FROM sug) LIMIT 1";
$result_1= mysqli_query($link, $sql_q1);

if(mysqli_num_rows($result_1) > 0)
{
    while($row = mysqli_fetch_assoc($result_1))
    {
        global $randnum;
        $randnum=$row['c_num'];
    }
}
$case_num ="CNS".$randnum;
session_start();
$sql_q2="INSERT INTO sug (s_no, case_num, name_s, email_s, heading_s, sug_s, reply, remove, t_s, d_s, time_stamp) VALUES (NULL, '".$case_num."', '".$sn."', '".$em."', '".$sb."', '".$sg."', '0', '0', '".$current_date."', '".$dt."', CURRENT_TIMESTAMP)"; 
if(mysqli_query($link, $sql_q2))
{
    
    echo '<script>window.alert("Your value has been added");</script>';
   $_SESSION['x1']=1;
   $_SESSION['x2']=$case_num;
   header("refresh:0; url=http://localhost:90/Suggestion-box/Confirmation-page.php");
}
else
{
    echo '<script>window.alert("Your value has not been added");</script>';
    $_SESSION['x1']=2;
   $_SESSION['x2']=$case_num;
    header("refresh:0; url=http://localhost:90/Suggestion-box/Confirmation-page.php");
}


?>