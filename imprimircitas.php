<?php   

date_default_timezone_set("America/Mexico_City");


$fecha =date("Y")."/". date("m") ."/". date("d") ;
ob_end_clean();
require('fpdf.php');
class PDF extends FPDF{
	function Header(){
		$this->Image('salud.png',10,6,30);
		$this->SetFont('Arial','B',10);
		$this->Cell(90);
		$this->Cell(30,10,'SISTEMA MEDICO',0,0,'C');
		
		$this->Cell(30,10,'LISTA DE CITAS',0,0,'C');
		$this->Ln(30);
		
	}

	function Footer(){
		$this->SetY(-10);
		$this->SetFont('Arial','I',10);
		$this->Cell(0,10,'Pagina '.$this->PageNo());
	}
}
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->Cell(5);
$pdf->Cell(10,5,'Folio',1,0,'C',1);
$pdf->Cell(50,5,'Paciente',1,0,'C',1);
$pdf->Cell(20,5,'Fecha',1,0,'C',1);
$pdf->Cell(20,5,'Hora',1,0,'C',1);
$pdf->Cell(20,5,'Talla',1,0,'C',1);
$pdf->Cell(20,5,'Peso',1,0,'C',1);
$pdf->Cell(20,5,'Edad',1,1,'C',1);

$pdf->SetFont('Times','',8);

date_default_timezone_set("America/Mexico_City");


$fecha =date("Y")."/". date("m") ."/". date("d") ;
require_once	"conexion.php";


$consulta = $conexion->prepare("SELECT *,concat(paciente.nombre,' ',paciente.ap,' ',paciente.am)as nombrecom FROM agenda,paciente WHERE agenda.fecha=:xfecha and paciente.folio=agenda.folio order by agenda.fecha desc;");
$consulta->bindParam(':xfecha',$fecha);
$consulta->execute();
if($consulta->rowCount()>=1)
{
while($fila=$consulta->fetch())
{   
$pdf->Cell(5);

$pdf->Cell(10,5, $fila['folio'],1,0,'C');
$pdf->Cell(50,5, $fila['nombrecom'],1,0,'C');
$pdf->Cell(20,5, $fila['fecha'],1,0,'C');
$pdf->Cell(20,5,$fila['hora'],1,0,'C');
$pdf->Cell(20,5,$fila['talla'],1,0,'C');
$pdf->Cell(20,5,$fila['peso'],1,0,'C');
$pdf->Cell(20,5,$fila['edad'],1,0,'C');

}

$pdf->Output();

}
?>