<?php




 
if (isset($_REQUEST['telefono'])) {
 
$telefono=$_REQUEST['telefono'];
$nombre=$_REQUEST['nombre'];
$correo=$_REQUEST['correo'];

ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $correo;
    $to = "empresarialyorjanny@gmail.com";
    $subject = "Solicitud enviada por parte de:".' '.$nombre;
    $message = .$nombre.' '.$telefono;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
  
        header('Location: '.$_SERVER['HTTP_REFERER']);

   
    
 }
    

 
?>