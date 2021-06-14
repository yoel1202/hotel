<?php

require '../conexion.php';
	require 'fpdf/fpdf.php';
$conexion = new Conexion();
class PDF extends FPDF
{
	function Header()
	{
		$conexion = new Conexion();
		
		$this->SetFont('Arial','B',15);
		$this->Cell(30);
		$this->Cell(130,10, 'Pedidos',0,0,'C');
		$this->SetFont('Arial','B',12);
		
			$this->Ln(20);
$this->SetFont('Arial','B',12);
$this->SetXY(5,30);
	
		
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
$pdf->Cell(40,6,'PRODUCTO',1,0,'C',1);
$pdf->Cell(20,6,'CANTIDAD',1,0,'C',1);


$pdf->Cell(20,6,'HORA',1,0,'C',1);

$pdf->Cell(30,6,'FECHA',1,0,'C',1);
$pdf->Cell(30,6,'ESTADO',1,0,'C',1);
$pdf->Cell(50,6,'OBSERVACION',1,1,'C',1);
$pdf->SetTextColor(0,0,0);


$pdf->SetFont('Arial','',10);

	$consulta =$conexion->consulta("SELECT tps.nombre,tp.cantidad,hora,observacion,tp.fecha,tp.estado FROM  tbl_pedidos tp INNER JOIN tbl_producir tc  on id_producir=fk_producir INNER JOIN tbl_productos tps on tc.fk_producto= tps.id_producto  where tp.estado='PROCESANDO' and tp.fecha >= CURDATE() ");
				 
			$pdf->SetFillColor(255,255,255);
	
   while( $row = $conexion->extraer_registro()){


$pdf->Cell(40,6,utf8_decode($row[0]),1,0,'C');
	$pdf->Cell(20,6,utf8_decode($row[1]),1,0,'C');

	$pdf->Cell(20,6,utf8_decode($row[2]),1,0,'C');
	$pdf->Cell(30,6,utf8_decode($row[4]),1,0,'C');
$pdf->Cell(30,6,utf8_decode($row[5]),1,0,'C');
$pdf->MultiCell(50,6,utf8_decode($row[3]),1,1,'C');

	
}

$pdf->Output();
?>