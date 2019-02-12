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

     //ccade MAILCHIMP
     $list_id = '5378fb697b';
     $api_key = '**********';
      
     $data_center = substr($api_key,strpos($api_key,'-')+1);
      
     $url = 'https://'. $data_center .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members';
      
     $json = json_encode([
         'email_address' => $correo,
         'status' => 'subscribed', //pass 'subscribed' or 'pending'
         'merge_fields' => [
             'FNAME'     => $nombre
             //'LNAME'     => $data['lastname']
         ]
     ]);
      
     $ch = curl_init($url);
     curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
     curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
     $result = curl_exec($ch);
     $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
     curl_close($ch);   

     
    if ($enviado && $status_code == 200)
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
