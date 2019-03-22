<?php
try {
    $jsondata = array();

    $email = $_POST['email'];
    $name = $_POST['name'];
    $puesto = $_POST['puesto'];
    $empresa = $_POST['empresa'];
    
    //ccade 
    $list_id = '5378fb697b';
    $api_key = '**********';
     
    $data_center = substr($api_key,strpos($api_key,'-')+1);
     
    $url = 'https://'. $data_center .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members';
     
    $json = json_encode([
        'email_address' => $email,
        'status' => 'subscribed', //pass 'subscribed' or 'pending'
        'merge_fields' => [
            'FNAME'     => $name,
            'MMERGE2'     => $empresa,
            'MMERGE3'     => $puesto
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
    //echo $status_code;
    if($status_code == 200)
    {
        $jsondata['message'] = 'Se suscribió con éxito';
    }
    else
    {
        $jsondata['message'] = 'Correo no válido o ya esta registrado';
    }
    

    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
}
catch(Exception $e){
    return $e;
}
?>