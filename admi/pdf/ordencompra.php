<?php
require_once("../encriptado.php"); 
require '../conexion.php';
	require 'fpdf/fpdf.php';
$conexion = new Conexion();
class PDF extends FPDF
{
	function Header()
	{
		$conexion = new Conexion();
		$consulta =$conexion->consulta("SELECT id_orden,numero_orden,fecha_pedido,fecha_entrega,condicion,tl.nombre,tp.nombre,tp.codigo  FROM  tbl_orden_compra INNER JOIN tbl_login as tl on id_login=fk_usuario INNER JOIN tbl_provedores as tp   on id_provedor=fk_provedor where id_orden='".$_GET['listaorden']."'     ");
		$row = $conexion->extraer_registro();
		$this->SetFont('Arial','B',15);
		$this->Cell(30);
		$this->Cell(130,10, 'Orden de compra',0,0,'C');
		$this->SetFont('Arial','B',12);
		$this->Cell(40,10, 'No. '.$row[1],0,0,'C');
			$this->Ln(20);
$this->SetFont('Arial','B',12);
$this->SetXY(5,30);
		$this->Cell(90,20, 'Provedor:'.$row[6],1,0,'C');
		$this->SetFont('Arial','B',8);
$this->SetXY(95,38);
			$this->Cell(30,12, 'Condicion:'.$row[4],1,0,'C');
			$this->SetFont('Arial','B',8);
$this->SetXY(125,38);
			$this->Cell(40,12, 'Fecha de pedido:'.$row[2],1,0,'C');
			$this->SetXY(165,38);
			$this->Cell(30,12, 'COD. Provedor:'.$row[7],1,0,'C');
		$this->Ln(20);
		$this->SetFont('Arial','B',10);
		$this->SetXY(5,50);
		$this->Cell(140,15, 'Despachado:'.$row[5],1,1,'C');
		$this->SetFont('Arial','B',8);
		$this->SetXY(145,50);
			$this->Cell(50,15, 'Fecha de entrega:'.$row[3],1,1,'C');
		$this->Image('images/logo.png', 5, 5, 35 );
		$this->Ln(10);
	}
	
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I', 8);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
	}

}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(36,45,200);
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(90,6,'PRODUCTO',1,0,'C',1);
$pdf->Cell(30,6,'CANTIDAD',1,0,'C',1);


$pdf->Cell(40,6,'PRECIO',1,0,'C',1);
$pdf->Cell(30,6,'VALOR',1,1,'C',1);
$pdf->SetTextColor(0,0,0);


$pdf->SetFont('Arial','',10);

	$consulta =$conexion->consulta("SELECT id_lista,tp.nombre,numero_orden,lo.cantidad,lo.precio FROM  tbl_lista_orden lo INNER JOIN tbl_productos tp on tp.id_producto=lo.fk_producto INNER JOIN tbl_orden_compra  on id_orden=fk_orden  where fk_orden='".decrypt($_GET['listaorden'])."' ");
				 
			
	
   while( $row = $conexion->extraer_registro()){


$pdf->Cell(90,6,utf8_decode($row[1]),1,0,'C');
	$pdf->Cell(30,6,utf8_decode($row[3]),1,0,'C');

	$pdf->Cell(40,6,utf8_decode($row[4]),1,0,'C');
$pdf->Cell(30,6,utf8_decode($row[4]),1,1,'C');
	
}
$consulta =$conexion->consulta("SELECT sum(precio)  FROM tbl_lista_orden where fk_orden='".decrypt($_GET['listaorden'])."' ");
$row = $conexion->extraer_registro();
$precio=$row[0];
$iva=$precio / 100 *13;
$subtotal=$precio-$iva;
$pdf->Setx(145);
$pdf->Cell(30,6,"Subtotal",0,0,'C');
$pdf->Setx(170);
$pdf->Cell(30,6,$subtotal,1,1,'C');
$pdf->Setx(145);
$pdf->Cell(30,6,"IVA",0,0,'C');
$pdf->Setx(170);
$pdf->Cell(30,6,$iva,1,1,'C');
$pdf->Setx(145);
$pdf->Cell(30,6,"Total",0,0,'C');
$pdf->Setx(170);
$pdf->Cell(30,6,$precio,1,1,'C');
$pdf->Output();
?>