<?php
function sendmail($setFromEmail,$setFromName,$addReplyToEmail,$addReplyToName,$addAddressEmail,$addAddressName,$subject,$template,$address,$product_info){
	require 'PHPMailer/PHPMailerAutoload.php';
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	// Set PHPMailer to use the sendmail transport
	$mail->isSendmail();
	//Establecer desde donde será enviado el correo electronico
	$mail->setFrom($setFromEmail, $setFromName);
	//Establecer una direccion de correo electronico alternativa para responder
	$mail->addReplyTo($addReplyToEmail, $addReplyToName);
	//Establecer a quien será enviado el correo electronico
	$mail->addAddress($addAddressEmail, $addAddressName);
	
	//Enviare una copia al administrador del sitio :D
	$mail->AddAddress($setFromEmail, $setFromName);
	
	
	//Establecer el asunto del mensaje
	$mail->Subject = $subject;
	//convertir HTML dentro del cuerpo del mensaje
	
	$date=date("d/m/Y");
	$ancho=$address['ancho'];
	
	$exterior=$address['exterior'];
	$interior=$address['interior'];
	
	$message = file_get_contents($template);
	
	// Replace the % with the actual information
	$message = str_replace('%customer_name%', $addAddressName, $message);
	$message = str_replace('%date%', $date, $message);
	$message = str_replace('%ancho%', $ancho, $message);

	$message = str_replace('%exterior%', $exterior, $message);
	$message = str_replace('%interior%', $interior, $message);
	$message = str_replace('%product_info%', $product_info, $message);
	$mail->msgHTML($message);
	//send the message, check for errors
	if (!$mail->send()) {
		echo "Error al enviar mensaje: " . $mail->ErrorInfo;
	} else {
		?>
		<div class='alert alert-info'>
			<strong>Bien hecho!</strong>
			<p>Su cotización ha sido enviada. Tan pronto como podamos nos pondremos en contacto con usted.</p>
		</div>
		<?php
	}
}

