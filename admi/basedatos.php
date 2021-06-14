
<?php

@ob_start();
session_start();
  date_default_timezone_set('America/Costa_Rica');
 require_once("encriptado.php");
  require_once("conexion.php");
 $conexion = new Conexion();

if (isset($_POST['eliminarpreciotour'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_precio_tour WHERE id_precio_tour='".decrypt($id)."' ");

    

   
    if($consulta){
      
       header ("Location: precio_tours.php?mensaje=OK"); 

    }else {
       header ("Location: precio_tours.php?mensaje=error"); 
      # code...
    }
}


if (isset($_POST['editarpreciotour'])) {
    $id=$_POST['id'] ;
    $tour=  $_POST['tour'] ;
  $fechadesde=  $_POST['fechadesde'] ;
$fechahasta=  $_POST['fechahasta'] ;
$precio=  $_POST['precio'] ;

  $consulta =$conexion->consulta("UPDATE  tbl_precio_tour SET fechadesde ='".$fechadesde  ."' ,fechahasta ='".$fechahasta."' ,precio ='".$precio ."',fk_tour ='".decrypt($tour)."' WHERE id_precio_tour='".decrypt($id)."' ");

    

    if($consulta){
      
       header ("Location: precio_tours.php?mensaje=OK"); 

    }else {
       header ("Location: precio_tours.php?mensaje=error"); 
      # code...
    }
    
 }

 if (isset($_POST['guardarpreciotour'])) {
  $tour=  $_POST['tour'] ;
  $fechadesde=  $_POST['fechadesde'] ;
$fechahasta=  $_POST['fechahasta'] ;
$precio=  $_POST['precio'] ;

  $consulta =$conexion->consulta("INSERT INTO  tbl_precio_tour (fechadesde,fechahasta,precio,fk_tour) values('".$fechadesde."','".$fechahasta."','".$precio ."','".decrypt($tour) ."')");

    

    if($consulta){
      
       header ("Location: precio_tours.php?mensaje=OK"); 

    }else {
       header ("Location: precio_tours.php?mensaje=error"); 
      # code...
    }
    
 } 

if (isset($_POST['eliminartour'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_tours WHERE id_tours='".$id."' ");

    
 if($consulta){
      
   header ("Location: tour.php?mensaje=OK"); 

    }else {
       header ("Location: tour.php?mensaje=error");  
      # code...
    }
}

if (isset($_POST['editartour'])) {
        $id=$_POST['id'] ;
   $nombre=  $_POST['nombre'] ;
$cantidad=  $_POST['cantidad'] ;
$estado=  $_POST['estado'] ;
$descripcion=  $_POST['descripcion'] ;
  $consulta =$conexion->consulta("UPDATE  tbl_tours SET nombre ='".$nombre."' ,estado ='".$estado ."',cantidad='".$cantidad."',descripcion='".$descripcion."'  WHERE id_tours='".$id."' ");

    

     if($consulta){
      
   header ("Location: tour.php?mensaje=OK"); 

    }else {
       header ("Location: tour.php?mensaje=error");  
      # code...
    }

 }

 if (isset($_POST['guardartour'])) {
  $nombre=  $_POST['nombre'] ;
$cantidad=  $_POST['cantidad'] ;
$estado=  $_POST['estado'] ;

$descripcion=  $_POST['descripcion'] ;

  $consulta =$conexion->consulta("INSERT INTO   tbl_tours (nombre,estado,cantidad,descripcion) values('".$nombre."','".$estado ."','".$cantidad."','".$descripcion."')");

    

    if($consulta){
      
   header ("Location: tour.php?mensaje=OK"); 

    }else {
       header ("Location: tour.php?mensaje=error");  
      # code...
    }

 }

if (isset($_POST['eliminarreservacion'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_reservaciones WHERE id_reservacion='".$id."' ");

    

   
    
    if($consulta){
      
   header ("Location: lista_reservas.php?mensaje=OK"); 

    }else {
       header ("Location: lista_reservas.php?mensaje=error");  
      # code...
    }
}






 if (isset($_POST['key'])) {
if($_POST['key']=='guardartexto'){ 
  $segmento=$_POST['segmento'] ;
  $textos=$_POST['textos'] ;
$consulta =$conexion->consulta("DELETE FROM  tbl_pagina WHERE segmento='".$segmento."' ");
 $consulta =$conexion->consulta("INSERT INTO tbl_pagina (texto,segmento) values('".$textos."','".$segmento."') ");
if ($consulta) {
  
 echo "exito";
}else{

echo "error";
}

} 

}





if (isset($_POST['key'])) {
if($_POST['key']=='imageneshabitaciones'){ 
$habitacion=$_POST['habitacion'] ;
$consulta =$conexion->consulta("SELECT ruta from tbl_imagenes_habitaciones where id_habitaciones ='".$habitacion."' ");
$sqlarray= array();
$i = 0;
while($row = $conexion->extraer_registro()){
      $sqlarray[$i] = $row;
    
$i++; 
}
echo json_encode($sqlarray);

}}




 if (isset($_POST['key'])) {
if($_POST['key']=='reservar'){ 
$habitacion=$_POST['habitacion'] ;
$entrada=$_POST['entrada'] ;
$salida=$_POST['salida'] ;
 $personas=$_POST['personas'] ;
  $dias=  $_POST['dias'] ;
  $nombre=  $_POST['nombre'] ;
  $apellido=  $_POST['apellido'] ;
$cedula=  $_POST['cedula'] ;
$correo=  $_POST['correo'] ;
$tel=  $_POST['tel'] ;
  $nombretarjeta=  $_POST['nombretarjeta'] ;
  $numerotarjeta=  $_POST['numerotarjeta'] ;
$expiracion=  $_POST['expiracion'] ;
$expiracionfecha=  $_POST['expiracionfecha'] ;
$cvv=  $_POST['cvv'] ;



if (habitaciondisponibles($habitacion,$entrada,$salida,$personas) ){
  $precio=Preciohabitacion($habitacion,$entrada,$personas,$dias,'SIN DESAYUNO');
  $consulta =$conexion->consulta("SELECT idl_cliente from tbl_clientes where cedula ='".$cedula."' ");
$row = $conexion->extraer_registro();
       if (isset($row[0])) {
 
 
}else{
$consulta =$conexion->consulta("INSERT INTO  tbl_clientes (nombre,apellido,cedula,correo,telefono,nombre_tarjeta,tarjeta,mes,fecha_vencimiento,cvc) values('".$nombre."','".$apellido."','".$cedula ."','".$correo ."','".$tel."','".$nombretarjeta."','".encrypt($numerotarjeta)."','".encrypt($expiracion)."','".encrypt($expiracionfecha)."','".encrypt($cvv)."')");
   $consulta =$conexion->consulta("SELECT * FROM tbl_clientes ORDER BY idl_cliente DESC LIMIT 1 ");
$row = $conexion->extraer_registro();
}

$cliente= $row[0];

      
       
    
 
  $consulta =$conexion->consulta("INSERT INTO tbl_reservaciones (tipo,tbl_habitaciones_id_habitacion,fecha_desde,fecha_hasta,desayuno,cantidad_personas,total,fecha,descripcion,tbl_clientes_idl_cliente ) values('SITIOWEB','".$habitacion."','".$entrada."','".$salida."','SIN DESAYUNO','".$personas."','".$precio."','".date('Y-m-d')."','ninguna','".$cliente."') ");



echo "exito";
 if (sendmail("yoel1202@hotmail.com",$correo,"Reservacion Hotel la Galerie","Este es un mensaje de confimacion de reserva su reserva se ha hecho con exito")) {
    # code...
  } 
}else{


  echo "No disponible";
}




}
}
  if (isset($_POST['key'])) {
if($_POST['key']=='Consultarreserva'){
$entrada=$_POST['entrada'] ;
$salida=$_POST['salida'] ;
 $personas=$_POST['personas'] ;
  $dias=  $_POST['dias'] ;

$consulta =$conexion->multiconsulta("SELECT id_habitacion,nombre,descripcion,imagen FROM `tbl_habitaciones` WHERE cantidad >= '".$personas."' and estado ='ACTIVADO' and id_habitacion NOT IN (SELECT tbl_habitaciones_id_habitacion FROM tbl_reservaciones where '".$entrada."' > fecha_desde and  '".$entrada."' < fecha_hasta or '".$salida."' > fecha_desde and  '".$entrada."' < fecha_hasta ) ");
if ($consulta) {
  $list = array();
  $i=0;
   while($row = $conexion->extraer_registros()){

;
$list[$i]=$row;
array_push($list[$i], Preciohabitacion($row[0],$entrada,$personas,$dias,'SIN DESAYUNO'));
 $i++;
}
echo json_encode($list);

}else{

  echo "nulo";
}

}

  }

if (isset($_POST['guardarreservapagina'])){

       $cedula=$_POST['cedula'] ;
   $nombre=  $_POST['nombre'] ;
  $telefono=  $_POST['telefono'] ;
$apellido=  $_POST['apellido'] ;
$correo=  $_POST['correo'] ;

 $consulta =$conexion->consulta("SELECT idl_cliente from tbl_clientes where cedula ='".$cedula."' ");
$row = $conexion->extraer_registro();
       if (isset($row[0])) {
 
}else{
$consulta =$conexion->consulta("INSERT INTO  tbl_clientes (nombre,apellido,cedula,correo,telefono) values('".$nombre."','".$apellido."','".$cedula ."','".$correo ."','".$telefono."')");
   $consulta =$conexion->consulta("SELECT * FROM tbl_clientes ORDER BY idl_cliente DESC LIMIT 1");
$row = $conexion->extraer_registro();
}

$cliente= $row[0];
 

 
  $consulta =$conexion->consulta("INSERT INTO tbl_reservaciones (tipo,tbl_habitaciones_id_habitacion,fecha_desde,fecha_hasta,desayuno,cantidad_personas,total,fecha,descripcion,tbl_clientes_idl_cliente ) values('".$elemento[$i][0]."','".$elemento[$i][1]."','".$elemento[$i][2]."','".$elemento[$i][3]."','".$elemento[$i][4]."','".$elemento[$i][5]."','".$elemento[$i][6]."','".$elemento[$i][7]."','".$elemento[$i][8]."','".$cliente."') ");






}

if (isset($_POST['eliminarhabitaciones'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_habitaciones WHERE id_habitacion='".$id."' ");

    

   
    
    if($consulta){
      
   header ("Location: habitaciones.php?mensaje=OK"); 

    }else {
       header ("Location: habitaciones.php?mensaje=error");  
      # code...
    }
}

if (isset($_POST['editarhabitaciones'])) {
        $id=$_POST['id'] ;
   $nombre=  $_POST['nombre'] ;
  $n_habitacion=  $_POST['n_habitacion'] ;
$cantidad=  $_POST['cantidad'] ;
$estado=  $_POST['estado'] ;
$descripcion=  $_POST['descripcion'] ;
  $consulta =$conexion->consulta("UPDATE  tbl_habitaciones SET numero_habitacion ='".$n_habitacion  ."' ,nombre ='".$nombre."' ,estado ='".$estado ."',cantidad='".$cantidad."',descripcion='".$descripcion."'  WHERE id_habitacion='".$id."' ");

    

     if($consulta){
      
   header ("Location: habitaciones.php?mensaje=OK"); 

    }else {
       header ("Location: habitaciones.php?mensaje=error");  
      # code...
    }

 }

 if (isset($_POST['guardarhabitacion'])) {
  $nombre=  $_POST['nombre'] ;
  $n_habitacion=  $_POST['n_habitacion'] ;
$cantidad=  $_POST['cantidad'] ;
$estado=  $_POST['estado'] ;

$descripcion=  $_POST['descripcion'] ;

  $consulta =$conexion->consulta("INSERT INTO  tbl_habitaciones (numero_habitacion,nombre,estado,cantidad,descripcion) values('".$n_habitacion."','".$nombre."','".$estado ."','".$cantidad."','".$descripcion."')");

    

    if($consulta){
      
   header ("Location: habitaciones.php?mensaje=OK"); 

    }else {
       header ("Location: habitaciones.php?mensaje=error");  
      # code...
    }

 }

 if (isset($_POST['eliminarlistaorden'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_lista_orden WHERE id_lista='".$id."' ");

    

   
    
    if($consulta){
      
   header ("Location: listaordencompra.php?listaorden=".$orden."&mensaje=OK"); 

    }else {
       header ("Location: listaordencompra.php?listaorden=".$orden."&mensaje=error");  
      # code...
    }
}
  if (isset($_POST['editarlistaorden'])) {
        $id=$_POST['id'] ;
  $orden=  $_POST['orden'] ;
  $producto=  $_POST['producto'] ;
$cantidad=  $_POST['cantidad'] ;
$precio=  $_POST['precio'] ;

  $consulta =$conexion->consulta("UPDATE  tbl_lista_orden SET precio ='".$precio  ."' ,cantidad ='".$cantidad."' ,fk_producto ='".$producto ."' WHERE id_lista='".$id."' ");

    

    if($consulta){
      
   header ("Location: listaordencompra.php?listaorden=".$orden."&mensaje=OK"); 

    }else {
       header ("Location: listaordencompra.php?listaorden=".$orden."&mensaje=error");  
      # code...
    }

 }

  if (isset($_POST['guardarlistaorden'])) {
  $orden=  $_POST['orden'] ;
  $producto=  $_POST['producto'] ;
$cantidad=  $_POST['cantidad'] ;
$precio=  $_POST['precio'] ;






  $consulta =$conexion->consulta("INSERT INTO  tbl_lista_orden (precio,cantidad,fk_producto,fk_orden) values('".$precio."','".$cantidad."','".$producto ."','".$orden."')");

    

    if($consulta){
      
   header ("Location: listaordencompra.php?listaorden=".$orden."&mensaje=OK"); 

    }else {
       header ("Location: listaordencompra.php?listaorden=".$orden."&mensaje=error");  
      # code...
    }

 }

if (isset($_POST['eliminarordencompra'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_orden_compra WHERE id_orden='".$id."' ");

    

   
    if($consulta){
      
       header ("Location: ordencompra.php?mensaje=OK"); 

    }else {
       header ("Location: ordencompra.php?mensaje=error"); 
      # code...
    }
}

if (isset($_POST['editarordencompra'])) {
    $id=$_POST['id'] ;
    $provedor=  $_POST['provedor'] ;
  $orden=  $_POST['orden'] ;
  $fechainicio=  $_POST['fechainicio'] ;
$fechafinal=  $_POST['fechafinal'] ;
$condicion=  $_POST['condicion'] ;
$plazo=  $_POST['plazo'] ;
  $consulta =$conexion->consulta("UPDATE  tbl_orden_compra SET numero_orden ='".$orden  ."' ,fecha_pedido ='".$fechainicio."' ,fecha_entrega ='".$fechafinal ."',condicion ='".$condicion."',fk_usuario ='".$_SESSION['id']."',fk_provedor ='".$provedor."',plazo ='".$plazo."' WHERE id_orden='".$id."' ");

    

    if($consulta){
      
       header ("Location: ordencompra.php?mensaje=OK"); 

    }else {
       header ("Location: ordencompra.php?mensaje=error"); 
      # code...
    }
    
 }

 if (isset($_POST['guardarorden'])) {
   $provedor=  $_POST['provedor'] ;
  $orden=  $_POST['orden'] ;
  $fechainicio=  $_POST['fechainicio'] ;
$fechafinal=  $_POST['fechafinal'] ;
$condicion=  $_POST['condicion'] ;
$plazo=  $_POST['plazo'] ;






  $consulta =$conexion->consulta("INSERT INTO  tbl_orden_compra (numero_orden,fecha_pedido,fecha_entrega,condicion,fk_usuario,fk_provedor,plazo) values('".$orden."','".$fechainicio."','".$fechafinal ."','".$condicion."','".$_SESSION['id']."','".$provedor."','".$plazo."')");

    

    if($consulta){
      
       header ("Location: ordencompra.php?mensaje=OK"); 

    }else {
       header ("Location: ordencompra.php?mensaje=error"); 
      # code...
    }

 }
 if (isset($_POST['eliminarprovedor'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_provedores WHERE id_provedor='".$id."' ");

    

   
    if($consulta){
      
       header ("Location: provedores.php?mensaje=OK"); 

    }else {
       header ("Location: provedores.php?mensaje=error"); 
      # code...
    }
}

if (isset($_POST['editarprovedor'])) {
    $id=$_POST['id'] ;
$codigo=  $_POST['codigo'] ;
  $nombre=  $_POST['nombre'] ;
$cedula=  $_POST['cedula'] ;
$correo=  $_POST['correo'] ;
$telefono=  $_POST['telefono'] ;
$cuenta=  $_POST['cuenta'] ;

  $consulta =$conexion->consulta("UPDATE  tbl_provedores SET codigo ='".$codigo  ."' ,nombre ='".$nombre."' ,cedula_juridica ='".$cedula ."',correo ='".$correo."',telefono ='".$telefono."',numero_cuenta ='".$cuenta."' WHERE id_provedor='".$id."' ");

    

    if($consulta){
      
       header ("Location: provedores.php?mensaje=OK"); 

    }else {
       header ("Location: provedores.php?mensaje=error"); 
      # code...
    }
    
 }

 if (isset($_POST['guardarprovedor'])) {
  $nombre=  $_POST['nombre'] ;
  $codigo=  $_POST['codigo'] ;
$cedula=  $_POST['cedula'] ;
$correo=  $_POST['correo'] ;
$telefono=  $_POST['telefono'] ;
$cuenta=  $_POST['cuenta'] ;





  $consulta =$conexion->consulta("INSERT INTO  tbl_provedores (codigo,nombre,cedula_juridica,correo,telefono,numero_cuenta) values('".$codigo."','".$nombre."','".$cedula ."','".$correo."','".$telefono."','".$cuenta."')");

    

    if($consulta){
      
       header ("Location: provedores.php?mensaje=OK"); 

    }else {
       header ("Location: provedores.php?mensaje=error"); 
      # code...
    }
//     $encrypted_data = base64_decode($plain_text);
// $decoded = mcrypt_decrypt($algorithm, $key, $encrypted_data, $mode, $iv);
// echo $decoded . "\n";
    
 } 
  if (isset($_POST['key'])) {
if($_POST['key']=='guardarreserva'){
$elemento=json_decode($_POST['elemento']) ;

 $consulta =$conexion->consulta("SELECT idl_cliente from tbl_clientes where cedula ='".$elemento[0][9]."' ");
$row = $conexion->extraer_registro();
       if (isset($row[0])) {

        for ($i=0; $i <count($elemento)  ; $i++) { 
      
       if (habitaciondisponibles($elemento[$i][1],$elemento[$i][2],$elemento[$i][3],$elemento[$i][5]) ){
    
 
  $consulta =$conexion->consulta("INSERT INTO tbl_reservaciones (tipo,tbl_habitaciones_id_habitacion,fecha_desde,fecha_hasta,desayuno,cantidad_personas,total,fecha,descripcion,tbl_clientes_idl_cliente ) values('".$elemento[$i][0]."','".$elemento[$i][1]."','".$elemento[$i][2]."','".$elemento[$i][3]."','".$elemento[$i][4]."','".$elemento[$i][5]."','".$elemento[$i][6]."','".$elemento[$i][7]."','".$elemento[$i][8]."','".$row[0]."') ");
echo "true";
}

}
 
}else{
$consulta =$conexion->consulta("INSERT INTO  tbl_clientes (nombre,apellido,cedula,correo,telefono) values('".$elemento[0][10]."','".$elemento[0][11]."','".$elemento[0][9] ."','".$elemento[0][12] ."','".$elemento[0][13]."')");
   $consulta =$conexion->consulta("SELECT * FROM tbl_clientes ORDER BY idl_cliente DESC LIMIT 1");
$row = $conexion->extraer_registro();
}

$cliente= $row[0];
 
for ($i=0; $i <count($elemento)  ; $i++) { 
      
       if (habitaciondisponibles($elemento[$i][1],$elemento[$i][2],$elemento[$i][3],$elemento[$i][5]) ){
    
 
  $consulta =$conexion->consulta("INSERT INTO tbl_reservaciones (tipo,tbl_habitaciones_id_habitacion,fecha_desde,fecha_hasta,desayuno,cantidad_personas,total,fecha,descripcion,tbl_clientes_idl_cliente ) values('".$elemento[$i][0]."','".$elemento[$i][1]."','".$elemento[$i][2]."','".$elemento[$i][3]."','".$elemento[$i][4]."','".$elemento[$i][5]."','".$elemento[$i][6]."','".$elemento[$i][7]."','".$elemento[$i][8]."','".$_SESSION['id']."','".$cliente."') ");

echo "true";
}
}


}

  }

  if (isset($_POST['eliminarcliente'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_clientes WHERE idl_cliente='".$id."' ");

    

   
    if($consulta){
      
       header ("Location: clientes.php?mensaje=OK"); 

    }else {
       header ("Location: clientes.php?mensaje=error"); 
      # code...
    }
}
if (isset($_POST['editarcliente'])) {
    $id=$_POST['id'] ;
$nombre=  $_POST['nombre'] ;
  $apellido=  $_POST['apellido'] ;
$cedula=  $_POST['cedula'] ;
$correo=  $_POST['correo'] ;
$telefono=  $_POST['telefono'] ;
$fax=  $_POST['fax'] ;
$provincia=  $_POST['provincia'] ;
$canton=  $_POST['canton'] ;
$distrito=  $_POST['distrito'] ;
$barrio=  $_POST['barrio'] ;
$direccion=  $_POST['direccion'] ;
$tarjeta=  $_POST['tarjeta'] ;
$fecha=  $_POST['fecha'] ;
$cvc=  $_POST['cvc'] ;
  $consulta =$conexion->consulta("UPDATE  tbl_clientes SET nombre ='".$nombre  ."' ,apellido ='".$apellido."' ,cedula ='".$cedula ."',correo ='".$correo."',telefono ='".$telefono."',tarjeta ='".$tarjeta."',fecha_vencimiento ='".$fecha."',cvc ='".$cvc."' WHERE idl_cliente='".$id."' ");

    

    if($consulta){
      
       header ("Location: clientes.php?mensaje=OK"); 

    }else {
       header ("Location: clientes.php?mensaje=error"); 
      # code...
    }
    
 }

 if (isset($_POST['guardarcliente'])) {
  $nombre=  $_POST['nombre'] ;
  $apellido=  $_POST['apellido'] ;
$cedula=  $_POST['cedula'] ;
$correo=  $_POST['correo'] ;
$telefono=  $_POST['telefono'] ;
$fax=  $_POST['fax'] ;
$provincia=  $_POST['provincia'] ;
$canton=  $_POST['canton'] ;
$distrito=  $_POST['distrito'] ;
$barrio=  $_POST['barrio'] ;
$direccion=  $_POST['direccion'] ;
$tarjeta=  $_POST['tarjeta'] ;
$fecha=  $_POST['fecha'] ;
$cvc=  $_POST['cvc'] ;




  $consulta =$conexion->consulta("INSERT INTO  tbl_clientes (nombre,apellido,cedula,correo,telefono,tarjeta,fecha_vencimiento,cvc,fax,provincia,canton,distrito,barrio,direccion) values('".$nombre."','".$apellido."','".$cedula ."','".$correo ."','".$telefono."','".$tarjeta."','".$fecha."','".$cvc."','".$fax."','".$provincia."','".$canton."','".$distrito."','".$barrio."','"$direccion"')");

    

    if($consulta){
      
       header ("Location: clientes.php?mensaje=OK"); 

    }else {
       header ("Location: clientes.php?mensaje=error"); 
      # code...
    }
//     $encrypted_data = base64_decode($plain_text);
// $decoded = mcrypt_decrypt($algorithm, $key, $encrypted_data, $mode, $iv);
// echo $decoded . "\n";
    
 } 


if (isset($_POST['key'])) {
if($_POST['key']=='costohabitacion'){
  $habitacion=  $_POST['habitacion'] ;
  $fechadesde=  $_POST['fechadesde'] ;
   $cantidad=  $_POST['cantidad'] ;
  $dias=  $_POST['dias'] ;
   $estado=  $_POST['estado'] ;

$precio=Preciohabitacion($habitacion,$fechadesde,$cantidad,$dias,$estado);

  echo $precio;
// 

// $row = $conexion->extraer_registro();
// echo json_encode($row);
}

 }

function habitaciondisponibles($habitacion,$entrada,$salida,$cantidad)
{
global $conexion ;


$consulta =$conexion->consulta("SELECT id_habitacion,nombre,descripcion,imagen FROM `tbl_habitaciones` WHERE cantidad >= '".$cantidad."' and id_habitacion NOT IN (SELECT tbl_habitaciones_id_habitacion FROM tbl_reservaciones where '".$entrada."' > fecha_desde and  '".$entrada."' < fecha_hasta or '".$salida."' > fecha_desde and  '".$entrada."' < fecha_hasta ) AND id_habitacion='".$habitacion."' ");
$row= $conexion->extraer_registro();
if($row>0){
      
      return true;
    }else {
       return false;
    }

}



 function Preciohabitacion($habitacion,$fechadesde,$cantidad,$dias,$estado)
{


 global $conexion ;

   $precio=0;
  for ($i=0; $i < $dias; $i++) { 
    $date= date("Y-m-d",strtotime($fechadesde."+ ".$i." days"));
   

 $consulta =$conexion->consulta("SELECT precio FROM  tbl_precio_habitaciones WHERE estado ='".$estado."' and fk_habitacion='".$habitacion."' and '".$date."' BETWEEN fecha_desde and fecha_hasta order BY fecha_desde DESC ");
 $row = $conexion->extraer_registro();
 $precio=$precio+$row[0];
    if ($cantidad > 2) {
     for ($j=1; $j <$cantidad-1 ; $j++) { 
        $consulta =$conexion->consulta("SELECT adicional FROM  tbl_precio_habitaciones T WHERE estado ='".$estado."' and fk_habitacion='".$habitacion."' and '".$date."' BETWEEN fecha_desde and fecha_hasta order BY fecha_desde DESC ");
         $row = $conexion->extraer_registro();
         $adicional=$row[0];
        $precio=$precio +$adicional;
     }
    }

  
    
  }

return $precio;
}



 
 if (isset($_POST['eliminarprecio'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_precio_habitaciones WHERE id_precio='".$id."' ");

    

   
    if($consulta){
      
       header ("Location: precio_habitaciones.php?mensaje=OK"); 

    }else {
       header ("Location: precio_habitaciones.php?mensaje=error"); 
      # code...
    }
}


if (isset($_POST['editarprecio'])) {
    $id=$_POST['id'] ;
    $habitacion=  $_POST['habitacion'] ;
  $fechadesde=  $_POST['fechadesde'] ;
$fechahasta=  $_POST['fechahasta'] ;
$precio=  $_POST['precio'] ;
$estado=  $_POST['estado'] ;
$adicional=  $_POST['adicional'] ;
  $consulta =$conexion->consulta("UPDATE  tbl_precio_habitaciones SET fecha_desde ='".$fechadesde  ."' ,fecha_hasta ='".$fechahasta."' ,precio ='".$precio ."',estado ='".$estado."',fk_habitacion ='".$habitacion."',adicional ='".$adicional."' WHERE id_precio='".$id."' ");

    

    if($consulta){
      
       header ("Location: precio_habitaciones.php?mensaje=OK"); 

    }else {
       header ("Location: precio_habitaciones.php?mensaje=error"); 
      # code...
    }
    
 }

 if (isset($_POST['guardarprecio'])) {
  $habitacion=  $_POST['habitacion'] ;
  $fechadesde=  $_POST['fechadesde'] ;
$fechahasta=  $_POST['fechahasta'] ;
$precio=  $_POST['precio'] ;
$estado=  $_POST['estado'] ;
$adicional=  $_POST['adicional'] ;
  $consulta =$conexion->consulta("INSERT INTO  tbl_precio_habitaciones (fecha_desde,fecha_hasta,precio,estado,fk_habitacion,adicional) values('".$fechadesde."','".$fechahasta."','".$precio ."','".$estado ."','".$habitacion."','".$adicional."')");

    

    if($consulta){
      
       header ("Location: precio_habitaciones.php?mensaje=OK"); 

    }else {
       header ("Location: precio_habitaciones.php?mensaje=error"); 
      # code...
    }
    
 } 



  if (isset($_POST['key'])) {
if($_POST['key']=='buscar'){
  $consultas=  $_POST['consultas'] ;
$consulta =$conexion->consulta($consultas);
$sqlarray= array();
$i = 0;
while($row = $conexion->extraer_registro()){
      $sqlarray[$i] = $row;
    
$i++; 
}
echo json_encode($sqlarray);
}

 }

  if (isset($_POST['eliminarpedido'])) {
    $id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_pedidos WHERE id_pedido='".$id."' ");

    

    if($consulta){
      
     header ("Location: pedir.php?mensaje=OK"); 

    }else {
       header ("Location: pedir.php?mensaje=error"); 
      # code...
    }
}

if (isset($_POST['editarpedido'])) {
    $id=$_POST['id'] ;
    $producto=  $_POST['producto'] ;
  $cantidad=  $_POST['cantidad'] ;
$hora=  $_POST['hora'] ;
$fecha=  $_POST['fecha'] ;
$cliente=  $_POST['cliente'] ;
$observacion=  $_POST['observacion'] ;
$estado=  $_POST['estado'] ;
  $consulta =$conexion->consulta("UPDATE  tbl_pedidos SET cantidad ='".$cantidad  ."' ,hora ='".$hora."' ,fecha ='".$fecha ."',observacion ='".$observacion."',fk_producir ='".$producto."',fk_cliente ='".$cliente."', estado='".$estado."' WHERE id_pedido='".$id."' ");

    

    if($consulta){
      
    header ("Location: pedir.php?mensaje=OK"); 

    }else {
       header ("Location: pedir.php?mensaje=error"); 
    }
    
 }
 if (isset($_POST['guardarpedidos'])) {
  $producto=  $_POST['producto'] ;
  $cantidad=  $_POST['cantidad'] ;
$hora=  $_POST['hora'] ;
$fecha=  $_POST['fecha'] ;
$observacion=  $_POST['observacion'] ;
$cliente=  $_POST['cliente'] ;
  $consulta =$conexion->consulta("INSERT INTO  tbl_pedidos (cantidad,hora,fecha,observacion,estado,fk_producir,fk_cliente) values('".$cantidad."','".$hora."','".$fecha."','".$observacion ."','PROCESANDO','".$producto ."','".$cliente."')");

    

    if($consulta){
      
       header ("Location: pedir.php?mensaje=OK"); 

    }else {
       header ("Location: pedir.php?mensaje=error"); 
      # code...
    }
    
 } 

  if (isset($_POST['key'])) {
if($_POST['key']=='guardarpedido'){
$elemento=json_decode($_POST['elemento']) ;


for ($i=0; $i <count($elemento)  ; $i++) { 
$consulta =$conexion->consulta("SELECT (cantidad-'".$elemento[$i][2]."') as resta ,id_entrada from tbl_entradas where fk_producto='".$elemento[$i][0]."' ");
 if ($consulta) {
 $row = $conexion->extraer_registro();
 
 if ($row[0]>0) {
  $consulta =$conexion->consulta("UPDATE tbl_entradas set cantidad='".$row[0]."' WHERE id_entrada='".$row[1]."' ");
  $consulta =$conexion->consulta("INSERT INTO tbl_pedido_aprovados (precio,cantidad,fecha,fk_pedido,fk_producto) values('".$elemento[$i][3]."','".$elemento[$i][2]."','".$elemento[$i][4]."','".$elemento[$i][1]."','".$elemento[$i][0]."') ");
 }else{

$consulta =$conexion->consulta("UPDATE tbl_entradas set cantidad='0'  where id_entrada='".$row[1]."' ");
$consulta =$conexion->consulta("INSERT INTO tbl_pedido_aprovados (precio,cantidad,fecha,fk_pedido,fk_producto) values('".$elemento[$i][3]."','".$elemento[$i][2]."','CURDATE()','".$elemento[$i][1]."','".$elemento[$i][0]."') ");
 }

  // echo ' producto: '.$elemento[$i][0];
  // echo ' cantidad: '.$elemento[$i][2];
}

}
$consulta =$conexion->consulta("UPDATE tbl_pedidos set estado='APROVADO'  where id_pedido='".$elemento[0][1]."' ");


echo "se ha efectuado correctamente los cambios";
}

  }

 if (isset($_POST['editarproduccion'])) {
    $id=$_POST['id'] ;
    $producto=  $_POST['producto'] ;
$comida=  $_POST['comida'] ;
$cantidad =  $_POST['cantidad'] ;
$precio=  $_POST['precio'] ;

  $consulta =$conexion->consulta("UPDATE  tbl_produccion SET fk_producto='".$producto."' ,cantidad='".$cantidad."',precio='".$precio."' WHERE id_produccion='".$id."' ");

     $consulta =$conexion->consulta("SELECT sum(precio) from tbl_produccion where fk_producir='".$comida."' ");
       if ($consulta) {
         $row = $conexion->extraer_registro();
        $consulta =$conexion->consulta("UPDATE tbl_producir set total='".$row[0]."' where id_producir='".$comida."'");
       }

    if($consulta){
      
        header ("Location: producir.php?comida=".encrypt($comida)."&mensaje=OK"); 

    }else {
       header('Location: '.$_SERVER['HTTP_REFERER']);
      # code...
    }
    
 } 
 if (isset($_POST['eliminarproduccion'])) {
    $id=$_POST['id2'] ;
 $consulta =$conexion->consulta("SELECT tp.precio,tc.total,tc.id_producir from tbl_produccion tp inner join tbl_producir tc on tc.id_producir=tp.fk_producir where id_produccion='".$id."' ");
  $row = $conexion->extraer_registro();
  $resultado = $row[1]-$row[0];
  $id_comida=$row[2];

    $consulta =$conexion->consulta("UPDATE tbl_producir set total='".$resultado."' where id_producir='".$id_comida."'");
   $consulta =$conexion->consulta("DELETE FROM  tbl_produccion WHERE id_produccion='".$id."' ");

    

    if($consulta){
      
       header ("Location: producir.php?comida=".encrypt($id_comida)."&mensaje=OK"); 

    }else {
      header('Location: '.$_SERVER['HTTP_REFERER']);
      # code...
    }
}
if (isset($_POST['guardarproduccion'])) {
  $producto=  $_POST['producto'] ;
$comida=  $_POST['comida'] ;
$cantidad	=  $_POST['cantidad'] ;
$precio=  $_POST['precio'] ;
$fecha  =  $_POST['fecha'] ;
 
  $consulta =$conexion->consulta("INSERT INTO  tbl_produccion (cantidad ,precio,fecha,fk_producto,fk_producir) values('".$cantidad."','".$precio."','".$fecha."','".$producto."','".$comida."')");

    

    if($consulta){
       $consulta =$conexion->consulta("SELECT sum(precio) from tbl_produccion where fk_producir='".$comida."' ");
       if ($consulta) {
         $row = $conexion->extraer_registro();
        $consulta =$conexion->consulta("UPDATE tbl_producir set total='".$row[0]."' where id_producir='".$comida."'");
       }
      
        header ("Location: producir.php?comida=".encrypt($comida)."&mensaje=OK"); 

    }else {

      header ("Location: producir.php?comida=".encrypt($comida)."&mensaje=OK"); 
      # code...
    }
    
 } 

 
 if (isset($_POST['key'])) {
if($_POST['key']=='costo'){
	$producto=  $_POST['producto'] ;
$consulta =$conexion->consulta("SELECT precio,cantidad_predeterminada  FROM  tbl_entradas T WHERE fk_producto='".$producto."' AND cantidad > 0 ");

$row = $conexion->extraer_registro();
echo json_encode($row);
}

 }

 if (isset($_POST['eliminarcomida'])) {
  	$id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_producir WHERE id_producir='".$id."' ");

    

    if($consulta){
      
       header ("Location: comidas.php?mensaje=OK"); 

    }else {
       header ("Location: comidas.php?mensaje=error"); 
      # code...
    }
}

if (isset($_POST['editarcomida'])) {
  	$id=$_POST['id'] ;
  $producto=  $_POST['producto'] ;
$estado=  $_POST['estado'] ;
$total=  $_POST['total'] ;
  $consulta =$conexion->consulta("UPDATE  tbl_producir SET fk_producto='".decrypt($producto)."' ,estado='".$estado."',total='".$total."' WHERE id_producir='".$id."' ");

    

    if($consulta){
      
       header ("Location: comidas.php?mensaje=OK"); 

    }else {
       header ("Location: comidas.php?mensaje=error"); 
      # code...
    }
    
 } 
 if (isset($_POST['guardarcomida'])) {
  $producto=  $_POST['producto'] ;
$estado=  $_POST['estado'] ;
$fecha	=  $_POST['fecha'] ;
$total=  $_POST['total'] ;
 
  $consulta =$conexion->consulta("INSERT INTO  tbl_producir (estado,fecha,total,fk_producto) values('".$estado."','".$fecha."','".$total."','".decrypt($producto)."')");

    

    if($consulta){
      
        header ("Location: comidas.php?mensaje=OK"); 

    }else {

        header ("Location: comidas.php?mensaje=error"); 
     
      # code...
    }
    
 } 
 if (isset($_POST['eliminarentrada'])) {
  	$id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_entradas WHERE id_entrada='".decrypt($id)."' ");

    

    if($consulta){
      
       header ("Location: entradas.php?mensaje=OK"); 

    }else {
       header ("Location: entradas.php?mensaje=error"); 
      # code...
    }
}

 if (isset($_POST['editarentrada'])) {
  	$id=$_POST['id'] ;
$producto=  $_POST['producto'] ;
$cantidad=  $_POST['cantidad'] ;
$factura=  $_POST['factura'] ;
$precio=  $_POST['precio'] ;
$descripcion=  $_POST['descripcion'] ;
$estado=  $_POST['estado'] ;
$tipo=  $_POST['tipo'] ;
$precioventa=  $_POST['precioventa'] ;
$utilidad=  $_POST['utilidad'] ;
$impuesto=  $_POST['impuesto'] ;
  $consulta =$conexion->consulta("UPDATE  tbl_entradas SET fk_producto='".decrypt($producto)."' ,cantidad='".$cantidad."',descripcion='".$descripcion."',precio='".$precio."',numero_factura='".$factura."',estado='".$estado."',tipo='".$tipo."',precio_venta='".$precioventa."' ,utilidad='".$utilidad."' ,impuesto='".$impuesto."'  WHERE id_entrada='".$id."' ");

    $consulta =$conexion->consulta("SELECT tp.cantidad,sum(te.cantidad) from tbl_entradas te inner join tbl_productos tp on id_producto=fk_producto   where id_producto='".decrypt($producto)."'");
$row = $conexion->extraer_registro();
$puntoreorden= $row[0] /100 *50  ;
$minimo= $row[0] /100 *25  ;
$cantidades=$row[1];

$consulta =$conexion->consulta("SELECT id_entrada from tbl_entradas    where fk_producto='".decrypt($producto)."'");

while($row = $conexion->extraer_registro()){


if ($cantidades > $puntoreorden) {

   $consulta2 =$conexion->consultas("UPDATE tbl_entradas SET estado='IDEAL' WHERE id_entrada='".$row[0]."'");
}
if ($cantidades < $puntoreorden and $cantidades > $minimo) {

   $consulta2 =$conexion->consultas("UPDATE tbl_entradas SET estado='PUNTO DE REORDEN' WHERE id_entrada='".$row[0]."'");
}
if ($cantidades < $puntoreorden and $cantidades < $minimo) {

    $consulta2 =$conexion->consultas("UPDATE tbl_entradas SET estado='MINIMO' WHERE id_entrada='".$row[0]."'");
}
}

    if($consulta){
      
       header ("Location: entradas.php?mensaje=OK"); 

    }else {
       header ("Location: entradas.php?mensaje=error"); 
      # code...
    }
    
 } 

  if (isset($_POST['guardarentrada'])) {
  $producto=  $_POST['producto'] ;
$cantidad=  $_POST['cantidad'] ;
$precio	=  $_POST['precio'] ;
$factura=  $_POST['factura'] ;
  $fecha=  $_POST['fecha'] ;
$descripcion=  $_POST['descripcion'] ;
$tipo=  $_POST['tipo'] ;
$precioventa=  $_POST['precioventa'] ;
$utilidad=  $_POST['utilidad'] ;
$impuesto=  $_POST['impuesto'] ;
$puntoreorden=0;
$minimo=0;
$consulta =$conexion->consulta("INSERT INTO  tbl_entradas (precio,cantidad,numero_factura,fecha,descripcion,fk_producto,cantidad_predeterminada,tipo,precio_venta,utilidad,impuesto) values('".$precio."','".$cantidad."','".$factura."','".$fecha."','".$descripcion."','".decrypt($producto) ."','".$cantidad."','".$tipo."','".$precioventa."','".$utilidad."','".$impuesto."')");

$consulta =$conexion->consulta("SELECT tp.cantidad,sum(te.cantidad) from tbl_entradas te inner join tbl_productos tp on id_producto=fk_producto   where id_producto='".decrypt($producto)."'");
$row = $conexion->extraer_registro();
$puntoreorden= $row[0] /100 *50  ;
$minimo= $row[0] /100 *25  ;
$cantidades=$row[1];

$consulta =$conexion->consulta("SELECT id_entrada from tbl_entradas    where fk_producto='".decrypt($producto)."'");

while($row = $conexion->extraer_registro()){


if ($cantidades > $puntoreorden) {

   $consulta2 =$conexion->consultas("UPDATE tbl_entradas SET estado='IDEAL' WHERE id_entrada='".$row[0]."'");
}
if ($cantidades < $puntoreorden and $cantidades > $minimo) {

   $consulta2 =$conexion->consultas("UPDATE tbl_entradas SET estado='PUNTO DE REORDEN' WHERE id_entrada='".$row[0]."'");
}
if ($cantidades < $puntoreorden and $cantidades < $minimo) {

    $consulta2 =$conexion->consultas("UPDATE tbl_entradas SET estado='MINIMO' WHERE id_entrada='".$row[0]."'");
}
}

 

     if($consulta){
      
        header ("Location: entradas.php?mensaje=OK"); 

    }else {
        header ("Location: entradas.php?mensaje=error"); 
      # code...
    }

    
    
 } 



 if (isset($_POST['eliminarsalida'])) {
  	$id=$_POST['id2'] ;
$cantidad=$_POST['cantidad'] ;

$consulta =$conexion->consulta("SELECT id_entrada,te.cantidad from tbl_inventario ti  INNER JOIN tbl_productos on ti.fk_producto=id_producto inner join  tbl_entradas te on te.fk_producto=id_producto   where id_inventario='".decrypt($id)."'");
 $row = $conexion->extraer_registro();
 $canti=$row[1];
 $entrada=$row[0];
 echo $canti;
 $resultado=$canti+$cantidad;
  $consulta =$conexion->consulta("DELETE FROM  tbl_inventario WHERE id_inventario='".decrypt($id)."' ");

    $consulta =$conexion->consulta("UPDATE  tbl_entradas SET cantidad='".$resultado."' where id_entrada='".$entrada."'");

    if($consulta){
      
        header ("Location: salidas.php?mensaje=OK"); 

    }else {
        header ("Location: salidas.php?mensaje=error"); 
      # code...
    }
}
 if (isset($_POST['editarsalida'])) {
  	$id=$_POST['id'] ;
$producto=  $_POST['producto'] ;
$cantidad=  $_POST['cantidad'] ;
$observacion=  $_POST['observacion'] ;

 $consulta =$conexion->consulta("SELECT id_entrada,cantidad from tbl_entradas where fk_producto='".decrypt($producto)."'");
 if($consulta){
  $row = $conexion->extraer_registro();
  $canti=$row[1];
   if ($canti >=$cantidad  and $canti>0) {
    $consulta =$conexion->consulta("SELECT cantidad from tbl_inventario where id_inventario='".decrypt($id)."'");
      $row = $conexion->extraer_registro();
  $canti2=$row[0];
  $resultado=$canti+$canti2;
 $consulta =$conexion->consulta("UPDATE  tbl_entradas SET cantidad='".$resultado."' where fk_producto='".decrypt($producto)."'");

    $resultado2=$resultado-$cantidad;
  $consulta =$conexion->consulta("UPDATE  tbl_inventario SET fk_producto='".decrypt($producto)."' ,cantidad='".$cantidad."',observacion='".$observacion."',fk_usuario='".$_SESSION['id']."' WHERE id_inventario='".decrypt($id)."' ");

   $consulta =$conexion->consulta("UPDATE  tbl_entradas SET cantidad='".$resultado2."' where fk_producto='".decrypt($producto)."'");
   if($consulta){
      
       header ("Location: salidas.php?mensaje=OK"); 

    }else {
       header ("Location: salidas.php?mensaje=error"); 
      # code...
    }
  }else{

    header ("Location: salidas.php?mensaje=mayor"); 
  }
 


    }else{

      header ("Location: salidas.php?mensaje=entrada"); 
    }
    
 } 


 if (isset($_POST['guardarsalida'])) {
  $producto=  $_POST['producto'] ;
$cantidad=  $_POST['cantidad'] ;
  $fecha=  $_POST['fecha'] ;
$observacion=  $_POST['observacion'] ;
 $consulta =$conexion->consulta("SELECT id_entrada,cantidad,fk_producto from tbl_entradas where id_entrada='".decrypt($producto)."'");
 if($consulta){
  $row = $conexion->extraer_registro();
  $canti=$row[1];
  $id_producto=$row[2];
  if ($canti >=$cantidad  and $canti>0) {
    $resultado=$canti-$cantidad;
     $consulta =$conexion->consulta("INSERT INTO  tbl_inventario (cantidad,fecha,observacion,fk_producto,fk_usuario) values('".$cantidad."','".$fecha."','".$observacion."','".$row[2]."','".$_SESSION['id']."')");
   $consulta =$conexion->consulta("UPDATE  tbl_entradas SET cantidad='".$resultado."' where id_entrada='".decrypt($producto)."'");

 $consulta =$conexion->consulta("SELECT tp.cantidad,sum(te.cantidad) from tbl_entradas te inner join tbl_productos tp on id_producto=fk_producto   where id_producto='".$id_producto."'");
$row = $conexion->extraer_registro();
$puntoreorden= $row[0] /100 *50  ;
$minimo= $row[0] /100 *25  ;
$cantidades=$row[1];

$consulta =$conexion->consulta("SELECT id_entrada from tbl_entradas    where fk_producto='".$id_producto."'");

while($row = $conexion->extraer_registro()){


if ($cantidades > $puntoreorden) {

   $consulta2 =$conexion->consultas("UPDATE tbl_entradas SET estado='IDEAL' WHERE id_entrada='".$row[0]."'");
}
if ($cantidades < $puntoreorden and $cantidades > $minimo) {

   $consulta2 =$conexion->consultas("UPDATE tbl_entradas SET estado='PUNTO DE REORDEN' WHERE id_entrada='".$row[0]."'");
}
if ($cantidades < $puntoreorden and $cantidades < $minimo) {

    $consulta2 =$conexion->consultas("UPDATE tbl_entradas SET estado='MINIMO' WHERE id_entrada='".$row[0]."'");
}
}


   if($consulta){
      
       header ("Location: salidas.php?mensaje=OK"); 

    }else {
       header ("Location: salidas.php?mensaje=error"); 
      # code...
    }
  }else{

    header ("Location: salidas.php?mensaje=mayor"); 
  }
 


    }else{

      header ("Location: salidas.php?mensaje=entrada"); 
    }

    
    
 } 


 if (isset($_POST['guardarcatalogo'])) {
  $producto=  $_POST['producto'] ;
  $estado=  $_POST['estado'] ;
$unidad=  $_POST['unidad'] ;
$cantidad=  $_POST['cantidad'] ;
$codigo=  $_POST['codigo'] ;
  $consulta =$conexion->consulta("INSERT INTO  tbl_productos (nombre,estado,unidad,cantidad,codigo) values('".$producto."','".$estado."','".$unidad."','".$cantidad."','".$codigo."')");

    

    if($consulta){
      
       header ("Location: catalogo.php?mensaje=OK"); 

    }else {
       header ("Location: catalogo.php?mensaje=error"); 
      # code...
    }
    
 } 

  if (isset($_POST['editarcatalogo'])) {
  	$id=$_POST['id'] ;
  $producto=  $_POST['producto'] ;
  $estado=  $_POST['estado'] ;
$unidad=  $_POST['unidad'] ;
$cantidad=  $_POST['cantidad'] ;
$codigo=  $_POST['codigo'] ;
  $consulta =$conexion->consulta("UPDATE  tbl_productos SET nombre='".$producto."' ,estado='".$estado."',unidad='".$unidad."',cantidad='".$cantidad."',codigo='".$codigo."' WHERE id_producto='".decrypt($id)."' ");

    

    if($consulta){
      
       header ("Location: catalogo.php?mensaje=OK"); 

    }else {
       header ("Location: catalogo.php?mensaje=error"); 
      # code...
    }
    
 } 

 if (isset($_POST['eliminarcatalogo'])) {
  	$id=$_POST['id2'] ;

  $consulta =$conexion->consulta("DELETE FROM  tbl_productos WHERE id_producto='".decrypt($id)."' ");

    

    if($consulta){
      
       header ("Location: catalogo.php?mensaje=OK"); 

    }else {
       header ("Location: catalogo.php?mensaje=error"); 
      # code...
    }
}

function sendmail($correo,$destinatario,$asunto,$mensaje)
{
 
 error_reporting(E_ERROR | E_PARSE);
    $headers = "From:" . $correo;
   $success= mail($destinatario,$asunto,$mensaje, $headers);
   

}
 ?>