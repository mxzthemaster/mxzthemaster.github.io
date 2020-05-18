<?php
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require 'Phpmailer/Exception.php';
	require 'Phpmailer/PHPMailer.php';
	require 'Phpmailer/SMTP.php';


	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];

	// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	//Server settings
	$mail->SMTPDebug = 2;                      // Enable verbose debug output
	$mail->isSMTP();                                            // Send using SMTP
	$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	$mail->Username   = 'mxzthemaster@gmail.com';                     // SMTP username
	$mail->Password   = 'leomxz1994';                               // SMTP password
	$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	//Recipients
	$mail->setFrom($correo , $nombre); //desde donde se envia
	$mail->addAddress('mxzthemaster@gmail.com', 'Miguel Andrades');     // Add a recipient aquien se le envia
	
	// Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Contacto web';  //asunto
	$mail->Body    = 'Nombre: ' . $nombre  . "<br> \nCorreo: " . $correo . "<br> \nTelefono: " . $telefono . "<br> \n Mensaje: " . $mensaje;

	$mail->send();
	echo "<script>alert('Mensaje enviado!!, gracias, pronto le contactaremos'); location.href='index.html'</script>";
} catch (Exception $e) {
	echo "Mensaje No enviado. Mailer Error: {$mail->ErrorInfo}";
}

?>


