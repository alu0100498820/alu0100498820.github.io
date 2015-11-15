<?php

 $nombre = $_POST["nombre"];

 $correo = $_POST["correo"];

 $contenido = $_POST["contenido"];

 $para = "bbarvil@gmail.com";
 $asunto = "Nuevo Mensaje de $nombre";

 $mensaje = "

 Nombre del remitente: ".$nombre."
 Correo: ".$correo."
 Mensaje: ".$contenido."
 ";

 mail($para,$asunto,utf8_decode($mensaje));

 echo "<p><h2>Hemos recibido tu mensaje correctamente, pronto te contestaremos, gracias.</h2></p>";

?>
