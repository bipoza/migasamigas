<?php
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];


//incluimos la clase PHPMailer
//require_once('php/PHPMailer/class.phpmailer.php');
require_once('php/PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
//indico a la clase que use SMTP
$mail->IsSMTP();
//permite modo debug para ver mensajes de las cosas que van ocurriendo
//$mail->SMTPDebug = 2 ;
//Debo de hacer autenticación SMTP
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
//indico el servidor de Gmail para SMTP
$mail->Host = "smtp.gmail.com";
//indico el puerto que usa Gmail
$mail->Port = 465;
//indico un usuario / clave de un usuario de gmail
$mail->Username = "zureemaila@gmail.com";
$mail->Password = "zurepasahitza";
$mail->SetFrom('zureemaila@gmail.com', "$name");
$mail->AddReplyTo("$email","$name");
$mail->Subject = "Migas amigas bezeroaren mezua";
$mail->MsgHTML("$message");
//indico destinatario
$address = "zureemaila@gmail.com";
$mail->AddAddress($address, "$name");
if(!$mail->Send()) {
return "Error al enviar: " . $mail->ErrorInfo;
} else {
echo "Mezua bidalita!";
}




/*$myObj->name = $name;
$myObj->email = $email;
$myObj->message = $message;

$myJSON = json_encode($myObj);
*/

/*$returnMessage = "Izena: " . $name . " Email: " . $email . "Mezua: " . $message;
echo $returnMessage;*/
?>