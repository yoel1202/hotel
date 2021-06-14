<?php




 
if (isset($_REQUEST['telefono'])) {
 
$telefono=$_REQUEST['telefono'];
$nombre=$_REQUEST['nombre'];
$correo=$_REQUEST['correo'];
$correo=$_REQUEST['asunto'];
$correo=$_REQUEST['mensaje'];
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $correo;
    $to = "empresarialyorjanny@gmail.com";
    $subject = $asunto.' '.$nombre;
    $message = $mensaje.' '.$nombre.' '.$telefono;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
  
        header ("Location: contact.php?mensaje=OK"); 

   
    
 }
    

 
?