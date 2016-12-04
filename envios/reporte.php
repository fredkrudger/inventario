<?php //reporte.php
require("../db/config.php");
require('../fpdf/fpdf.php');
 
class PDF extends FPDF
{
 

//Page footer
function Footer()
{
	$t=utf8_decode("Teléfono: 0246-8713226"); 	
    //Position at 1.5 cm from bottom
    $this->SetY(-20);    
    $this->SetFont('Arial','I',8);    
    $this->Cell(0,5,'Sumipan Los Llanos C.A.',0,1,'C');
    $this->Cell(0,5,'Av. Centro Administrativo Local Edif. Naxos E Inmespa S/N Sector Centro Administrativo',0,1,'C');
    $this->Cell(0,5,$t,0,1,'C');
 }
}

$wsqli2="SELECT * from envio 
   inner join cliente on cliente.codigo_cliente=envio.codigo_cliente
   inner join producto on producto.codigo_producto=envio.codigo_producto
    ORDER BY envio.id_envio  ASC ";
	$result = $linki->query($wsqli2);
	if($linki->errno) die($linki->error);
	$i = $result->num_rows;
 
if ($i>0){
	$pdf=new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('P','Letter');

	$pdf->SetFont('Times', '', 10);
	$pdf->Image('../img/sumipan.png' ,70,10,75,55, 'PNG');
	$pdf->Ln(60);

	$pdf->SetFont('Times','B',16);
	$pdf->Cell(0,8,'Listado de Envios Realizados',0,1,'C');

	$pdf->Ln();
	$pdf->SetFont('Times','',12);
 
	$pdf->SetFillColor(29, 131, 72);
	$pdf->SetTextColor(240, 255, 240);

	$pdf->Cell(10,10,'#',1,0,'C',true);
	$pdf->Cell(60,10,'Producto',1,0,'C',true);
	$pdf->Cell(50,10,'Cantidad',1,0,'C',true);
	$pdf->Cell(45,10,'Cliente',1,0,'C',true);
	$pdf->Cell(30,10,'Fecha de Envio',1,1,'C',true);

	$pdf->SetFillColor(0,0,0);
	$pdf->SetDrawColor(0,0,0);
	$pdf->SetTextColor(0,0,0);

	$bandera = false; //Para alternar el relleno
	 while($registro=$result->fetch_array()){
		$pdf->SetFillColor(229, 229, 229);
		$pdf->Cell(10,12,utf8_decode($registro["id_envio"]),1,0,'C',$bandera );
		$pdf->Cell(60,12,utf8_decode($registro["nombre_producto"]),1,0,'C',$bandera );
		$pdf->Cell(50,12,utf8_decode($registro["cantidad_enviada"]),1,0,'C',$bandera );
		$pdf->Cell(45,12,utf8_decode($registro["nombre_cliente"]),1,0,'C',$bandera );
		$pdf->Cell(30,12,utf8_decode($registro["fecha_envio"]),1,1,'C',$bandera );
        $bandera = !$bandera;//Alterna el valor de la bandera
	}

	$pdf->Output('reporte.pdf','i'); 
 

}
$mysqli->close();

?>