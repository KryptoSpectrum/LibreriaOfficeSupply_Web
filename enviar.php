<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Mensaje Enviado</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<center>
<?php 
$myemail = 'office_supply_04@yahoo.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>


		<form method="post" action="enviar.php">
			<input type="text" name="nombre" placeholder="NOMBRE">
			<input type="email" name="email" placeholder="CORREO">
			<textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
			<input type="submit" value="ENVIAR">	
			
		</form>
	</center>

</body>
</html>