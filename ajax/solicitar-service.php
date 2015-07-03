<?

$artefacto = $_GET['artefacto'];
$marca = $_GET['marca'];
$empresa = $_GET['empresa'];
$desperfecto = $_GET['desperfecto'];
$direccion = $_GET['direccion'];
$localidad = $_GET['localidad'];
$telefono = $_GET['telefono'];
$alternativo = $_GET['alternativo'];
$nombre = $_GET['nombre'];
$horario = $_GET['horario'];
$email = $_GET['email'];
$comentarios = $_GET['comentarios'];


$destinatario = "consulta@hogarhelp.com";
$asunto = "Solicitud de Service";
$cuerpo = "
<html>
    <head>
       <title>$asunto</title>
    </head>
    <body>
    <h1>Solicitud de service</h1>
    <p>
    <hr>
    <b>Artefacto: </b> $artefacto<br/><br/>
    <b>Marca: </b> $marca<br/><br/>
    <b>Desperfecto: </b> $desperfecto<br/><br/>
    <b>Direccion: </b> $direccion <br/><br/>
    <b>Localidad:</b> $localidad <br/><br/>
    <b>Teléfono:</b> $telefono<br/><br/>
    <b>Teléfono Alternativo:</b> $alternativo <br/><br/>
    <b>Nombre:</b> $nombre <br/><br/>
    <b>Horario:</b> $horario <br/><br/>
    <b>Email:</b> $email <br/><br/>
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
