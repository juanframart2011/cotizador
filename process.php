<?php
	//Capturamos los datos enviados desde el formulario
	$nombre_cliente=strip_tags($_POST['firstname']);
	$email_cliente=strip_tags($_POST['email']);
	$telefono_cliente=strip_tags($_POST['phone']);
	$producto_elegido=strip_tags($_POST['producto']);
	$estilo_producto=strip_tags($_POST['estilo']);
	$cantidad_producto=strip_tags($_POST['cantidad']);
	$rango_precio=strip_tags($_POST['rango']);
	$ancho_producto=strip_tags($_POST['ancho']);
	$marco_exterior=strip_tags($_POST['exterior']);
	$marco_interior=strip_tags($_POST['interior']);
	
	//Ahora llamaremos la funcion de PHPMailer que se encargara de enviar los datos
	include('phpmailer/sendmail.php');
	$asunto="SOLICITUD DE COTIZACION";
	$plantilla="confirmation.html";
	$mi_correo="pruebanueva@inventarioycontrol.com";//Email que envia
	$mi_nombre="California Interiors";//Nombre de organizacion o empresa que envia
	$responder_a="pruebanueva@inventarioycontrol.com";//correo al cual pueden responder
	$nombres_responder="California Interiors";//Nombre de la organizacion a responder
	$address=array('ancho'=>$ancho_producto,'exterior'=>$marco_exterior,'interior'=>$marco_interior);//Arreglo que contiene la direccion del cliente
	$product_info="$producto_elegido, $estilo_producto, Rango: $rango_precio";//Informacion del producto
	sendmail($mi_correo,$mi_nombre,$responder_a,$nombres_responder,$email_cliente,$nombre_cliente,$asunto,$plantilla,$address,$product_info);
?>
