<?php
	$destino = "mxzthemaster@gmail.com";
	$nombre = $_POST["contact-name"];
	$correo = $_POST["contact-email"];
	$asunto = $_POST["contact-Subject"];
	$mensaje = $_POST["contact-message"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
	mail($destino, "contacto", $contenido);
	if(mail){
	    echo("<script language='JavaScript' type='text/JavaScript'>alert('Su mensaje ha sido enviado satisfactoriamente');open('index.html','_parent');</script>");
	}else{
	    echo("<script language='JavaScript' type='text/JavaScript'>alert('Ha ocurrido un error y no se envio su mensaje.int&eacute;ntelo m&aacute;s tarde o escr&iacute;banos al mail de contacto.');</script>");
	}
	
	header ("Location:index.html");
    

?>

