<?php // Ejemplo aprenderaprogramar.com

// Iremos leyendo línea a línea del fichero.txt hasta llegar al fin (feof($fp))

// fichero.txt tienen que estar en la misma carpeta que el fichero php

// fichero.txt es un archivo de texto normal creado con notepad, por ejemplo.

 require_once("conexion.php");
 $conexion = new Conexion();



if (isset($_POST['key'])) {
	if($_POST['key']=='buscarcedula'){
$cedulas=  $_POST['cedula'] ; 

$consulta =$conexion->consulta("SELECT nombre,apellido,correo,telefono FROM  tbl_clientes WHERE cedula='".$cedulas."' ");

    
$row = $conexion->extraer_registro();
   
    if($row){
      
     
    echo 'simple'.','.json_encode($row);

    }else {
       $fp = fopen("PADRON_COMPLETO.txt", "r");

while(!feof($fp)) {

$linea = fgets($fp);

$cedula=explode(",", $linea);

if ($cedula[0]==$cedulas) {
	# code...
	echo 'compleja'.','.$cedula[0] .','.$cedula[5].','.$cedula[6].','.$cedula[7];
}


}

fclose($fp);
      # code...
    }


}
}


?>