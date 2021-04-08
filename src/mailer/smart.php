<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mailer.pulse@gmail.com';   
$mail->Password = 'payv elyo lghy tvcp';                        // Your password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('mailer.pulse@gmail.com', 'Pulse RunSmart');   // From who sended
$mail->addAddress('petohoj666@shzsedu.com');     // To who sended
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Informacja o zamówieniu';
$mail->Body    = '
		Użytkownik zostawił informacje <br> 
	Imie: ' . $name . ' <br>
	Numer telefonu: ' . $phone . '<br>
	E-mail: ' . $email . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>