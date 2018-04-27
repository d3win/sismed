<?php 


//$folio = $_POST['folio'];


date_default_timezone_set("America/Mexico_City");


$fecha =date("Y")."/". date("m") ."/". date("d") ;
//echo $fecha;

$consulta = $conexion->prepare("SELECT *,concat(paciente.nombre,' ',paciente.ap,' ',paciente.am)as nombrecom FROM agenda,paciente WHERE agenda.fecha=:xfecha and paciente.folio=agenda.folio order by agenda.fecha desc");


$consulta->bindParam(':xfecha',$fecha);
$consulta->execute();


if($consulta->rowCount()>=1)
{


while($fila=$consulta->fetch())
{



//session_start();

	//header("location: citas.php");
	//echo "Datos encontrados";
echo "

    <tr>
      <td>".$fila['folio']."</td>
      <td>".$fila['nombrecom']."</td>
      <td>".$fila['fecha']."</td>
       <td>".$fila['hora']."</td>
      <td>".$fila['talla']."</td>
      <td>".$fila['peso']."</td>
      <td>".$fila['edad']."</td>
      <td>".$fila['alergias']."</td>
      <td>".$fila['temperatura']."</td>
      <td>".$fila['sintomas']."</td>
      <td>".$fila['observaciones']."</td>
      <td>".$fila['doctor']."</td>
      
      
      
      
    </tr>



    ";


}        
}

else
{
	//header("location: citas.php");
	echo "Datos no encontrados";
}

 ?>