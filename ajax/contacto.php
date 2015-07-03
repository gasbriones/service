<?


$nombre = $_GET['nombre'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$comentarios = $_GET['mensaje'];


$destinatario = "consulta@hogarhelp.com";
$asunto = "Consulta desde el formulario de contacto";
$cuerpo = "
<html>
    <head>
       <title>$asunto</title>
    </head>
    <body>
    <h1>Consulta desde el formulario de contacto</h1>
    <p>
    <hr>
    <b>Nombre:</b> $nombre <br/><br/>
    <b>Email:</b> $email <br/><br/>
    <b>Teléfono:</b> $telefono<br/><br/>
    <b>Comentarios:</b> $comentarios <br/><br/>
    </p>
    </body>
</html>
";

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

//dirección del remitente
$headers .= "From: $nombre  <$email>\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)
?>
