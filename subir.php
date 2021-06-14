<?php

$temporal = $_FILES['archivo']['tmp_name'];
$nombre = $_FILES['archivo']['name'];
$segmento=$_REQUEST['segmento'];

$array_nombre = explode('.', $nombre);
$extension = array_pop($array_nombre);

$array = glob("images/".$array_nombre[0]."*.".$extension);
$cantidad = count($array);

$nombre_final = $array_nombre[0].$cantidad.".".$extension;

if($_FILES['archivo']['type']=='image/jpeg'){

	$original = imagecreatefromjpeg($temporal);
}elseif ($_FILES['archivo']['type']=='image/png') {
	$original = imagecreatefrompng($temporal);
}else
{
	die("no se puedo subir archivo extentension incompatible");
}

$ancho_original = imagesx($original);

$alto_original = imagesy($original);
$ancho_nuevo =500;
$alto_nuevo = round($ancho_nuevo * $alto_original / $ancho_original);
$copia = imagecreatetruecolor($ancho_nuevo,$alto_nuevo);
 
 imagecopyresampled($copia, $original, 0, 0, 0, 0,$ancho_nuevo, $alto_nuevo, $ancho_original, $alto_original);

 imagejpeg($copia,"images/".$nombre_final,100);
  require_once("admi/conexion.php");
 $conexion = new Conexion();
$consulta =$conexion->consulta("DELETE FROM  tbl_pagina WHERE segmento='".$segmento."' ");
 $consulta =$conexion->consulta("INSERT INTO tbl_pagina (ruta,segmento) values('".$nombre_final."','".$segmento."') ");
if ($consulta) {
	
	header('Location: '.$_SERVER['HTTP_REFERER']);
}else{

	header('Location: '.$_SERVER['HTTP_REFERER']);
}
?>