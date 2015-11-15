<?php
//Recibimos los campos del formulario
$nombre=$_POST[nombre];
$correo=$_POST[email];
$mensaje=$_POST[mensaje];
//Acomodamos todo para darle orden al cuerpo del mensaje
$texto_mensaje="El usuario ".$nombre." dijo: \n".$mensaje." \n
Puedes contactarlo a su correo: ".$correo;
mail("bbarvil@gmail.com",$texto_mensaje);
echo "Su mensaje se ha enviado! Nos pondremos en contacto contigo.";
?>
