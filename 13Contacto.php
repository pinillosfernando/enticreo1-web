<?php
/*
Proyecto SAB - Envío de correo y errores de envío
Autor:      Luis Fernando Pinillos Gómez
Fecha:      Mayo de 2018 
Objetivos:  
1. Enviar correo del formulario                             CUMPLIDO
2. Error 1: no se llenaron todos los campos                 PENDIENTE
3. El correo electrónico no es correo electrónico           PENDIENTE
4. Enviar mensaje de correo a nueva página                  PENDIENTE

Referencias y observaciones: 
 */
//Variables capturadas de la página de contacto
$nombre = $_POST["nombre"];
$de = $_POST["correo"];
$asunto = "SAB enviado por $nombre".$_POST["asunto"];
$mensaje = $_POST["mensaje"];
$para = "gerencia.sabcolombia@gmail.com";

//Variables asociadas al Correo electrónico
$headers = "MIME-Version:1.0;\r\n";
$headers .= "Content-type: text/html; \r\n charset = iso-8859-1; \r\n";

$headers .= "From: $de \r\n"; //"From: webmaster@example.com" . "\r\n";
$headers .= "To: $para; \r\n Subject: $asunto \r\n";

//Zona donde se envía el correo electrónico desde PHP
if (mail($para, $asunto, $mensaje, $headers))
    echo "Enviado correctamente";
else
    echo "Fallo en envio";

?>

