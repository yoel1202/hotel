<?php  
@ob_start();
session_start();
 require_once("conexion.php");
 $conexion = new Conexion();
 
if ($_POST['key']=='cerrarsesion') {

  session_destroy();
}

 
 if ($_POST['key']=='login') {


$email=  $_POST['email'] ;
$pass=  $_POST['pass'] ;
$consulta =$conexion->consulta("SELECT * FROM tbl_login where email ='".$email."' and pass='".$pass."' ");
if (isset($consulta)) {
        
         $row = $conexion->extraer_registro();
               
                
          if (isset($row[1]) and$row[3]=="ACTIVADO") {

         

            $_SESSION['id'] = $row[0];
            $_SESSION['username'] = $row[1];
             $_SESSION['tipo'] = $row[5];
            echo "ha iniciado correctamente";
            
          }else{
            
            
          echo  "Su usuario o contraseña son incorrectos";;
          }
      
         

      }
 }

?>