<?php
try {
    $jsondata = array();

    $nombre = $_POST['nombre'];
    $empresa = $_POST['empresa'];
    $correo = $_POST['correo'];
    $puesto = $_POST['puesto'];
    $mensaje = $_POST['mensaje'];



$para = 'acesores@ccade.com.mx'; //correo destino 
$titulo = 'Contacto desde CCADE';
$mensaje = '<html>'.
    '<head><title>Comentario de Soporte</title></head>'.
    '<body><h1>Comentario de Soporte</h1>'.
    '<span>Hola, me llamo $nombre y trabajo en $empresa con el puesto de $puesto</span>'.
    $mensaje.
    '<hr>'.
    '</body>'.
    '</html>';
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: '.$nombre.' <'.$correo.'>';


$enviado = mail($para, $titulo, $mensaje, $cabeceras);
 
if ($enviado)
  $jsondata['message'] = 'Email enviado correctamente';
else
  $jsondata['message'] = 'Error en el envío del email';

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);

}
catch(Exception $e){
    return $e;
}
?>