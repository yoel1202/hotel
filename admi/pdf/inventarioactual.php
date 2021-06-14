<?php

	require '../conexion.php';
		require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('images/logo.jpg', 5, 5, 35 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'REPORTE DE FALTANTES DE PRODUCTOS',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}

 }
	$conexion = new Conexion();
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(52,171,0);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(60,6,'PRODUCTO',1,0,'C',1);
	$pdf->Cell(30,6,'CANTIDAD',1,0,'C',1);


	$pdf->Cell(30,6,'PRECIO',1,0,'C',1);
    $pdf->Cell(60,6,'DESCRIPCION',1,1,'C',1);
$pdf->SetTextColor(0,0,0);

	
	$pdf->SetFont('Arial','',10);
	
		$consulta =$conexion->consulta("SELECT DISTINCT  te.id_entrada,tp.nombre,sum(te.cantidad),te.precio,te.numero_factura,te.fecha,te.descripcion,tp.unidad FROM  tbl_entradas as te  INNER JOIN tbl_productos as tp on tp.id_producto =fk_producto  WHERE te.estado='PUNTO DE REORDEN' or te.estado='MINIMO' group by tp.nombre order by tp.nombre ");
					 
				
		
	   while( $row = $conexion->extraer_registro()){


$pdf->Cell(60,6,utf8_decode($row[1]),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row[2]),1,0,'C');
	
		$pdf->Cell(30,6,utf8_decode($row[3]),1,0,'C');
	$pdf->Cell(60,6,utf8_decode($row[6]),1,1,'C');
		
	}
	
	$pdf->Output();
?>