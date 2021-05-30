<?php
 $destino= "davidvilchez.18@gmail.com";
 $nombres= $_POST["Nombre"];
 $correo= $_POST["Correo"];
 $ciudad= $_POST["Ciudad"];
 $telefono= $_POST["Telefono"];
 $mensaje= $_POST["Mensaje"];
$contenido= "Nombre: " . $nombres . "\nCorreo: " . $correo . "\nTelefono: " .$telefono . "\nCiudad: " .$ciudad . "\nMensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);
header("Location:enviado.html")




?>