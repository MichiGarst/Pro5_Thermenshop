<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer\src\Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer\src\SMTP.php';

//var_dump($_POST);

foreach($_POST['checkbox1'] as $selected1) {
echo ("<script>console.log('Farbe ".$selected1."');</script>");
}

foreach($_POST['checkbox2'] as $selected2) {
    echo ("<script>console.log('Größe ".$selected2."');</script>");
}


$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$desire = $_POST["desires"];
$product = $_POST["product"];


if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
    $nameError = "Only letters and white space allowed";
}

echo("<script>console.log('Wunsch ".$product."');</script>");
echo("<script>console.log('Vorname ".$firstname."');</script>");
echo("<script>console.log('Nachname ".$lastname."');</script>");
echo("<script>console.log('E-Mail ".$email."');</script>");
echo("<script>console.log('Telefon ".$telephone."');</script>");
echo("<script>console.log('Wunsch ".$desire."');</script>");


$mail = new PHPMailer(TRUE);

ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465"); //No further need to edit your configuration files.
$mail->CharSet ="UTF-8";
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->SMTPSecure = "ssl";
$mail->Username = 'thermeninsel@gmail.com'; //account with which you want to send mail. Or use this account. i dont care :-P
$mail->Password = 'Geheim007'; //this account's password.
$mail->Port = "465";
$mail->isSMTP();  // telling the class to use SMTP
$mail->SetFrom('thermeninsel@gmail.com');
$mail->addAddress('S1610238017@students.fh-hagenberg.at', 'Joe User');     // Add a recipient
$mail->addReplyTo('S1610238017@students.fh-hagenberg.at', 'Information');
$mail->addCC('S1610238017@students.fh-hagenberg.at');
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Neue Anfrage';
$mail->Body    = "Du hast eine neue Anfrage von: <br> Name: ".$firstname." ".$lastname."<br> Email: ".$email."<br> Telefon: ".$telephone."<br> Wunsch: ".$desire."<br> <br>  Produkt: ".$product."<br>Farbe: ";
foreach($_POST['checkbox1'] as $selected1) {
    $mail->Body .= $selected1."  ";
}
$mail->Body .= "<br> Größe: ";
foreach($_POST['checkbox2'] as $selected2) {
    $mail->Body .= $selected2."  ";
}
$mail->Body .= "<br> Fertig";

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
//Something went bad
    echo "Fail - " . $mail->ErrorInfo;
}
echo("<script>location.href='http://localhost:63342/Pro5_Thermenshop/Thermeninsel/request.php'</script>");

//header("Location: http://localhost:63342/Pro5_Thermenshop/Thermeninsel/request.php");
?>
