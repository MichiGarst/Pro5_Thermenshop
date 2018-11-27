@@ -1,45 +0,0 @@
<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer\src\Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer\src\SMTP.php';

$name = $_POST["first_name"];

echo("<script>console.log('PHP: 1 ".$name."');</script>");

$mail = new PHPMailer(TRUE);

ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465"); //No further need to edit your configuration files.
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->SMTPSecure = "ssl";
$mail->Username = "thermeninsel@gmail.com"; //account with which you want to send mail. Or use this account. i dont care :-P
$mail->Password = "Geheim007"; //this account's password.
$mail->Port = "465";
$mail->isSMTP();  // telling the class to use SMTP
$mail->SetFrom('thermeninsel@gmail.com');
$mail->addAddress('S1610238017@students.fh-hagenberg.at', 'Joe User');     // Add a recipient
$mail->addReplyTo('S1610238017@students.fh-hagenberg.at', 'Information');
$mail->addCC('S1610238017@students.fh-hagenberg.at');
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
//Something went bad
    echo "Fail - " . $mail->ErrorInfo;
}
?>
