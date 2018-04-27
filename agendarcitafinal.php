
<?php  require 'header.php'; 
//if(isset($_POST['submit']))
//{

 ?>

<?php 

include "seguridad.php";

 ?>


<div class="jumbotron">
 <h1 class="display-4">Agendar Citas!</h1>

<!--<p>Usuario:  <?php echo $_SESSION['usuario'];?></p>
-->
    </div> 
<?php





if (isset($_POST['txtfolio']))
{

//registro de insertar
$fecha = $_POST['txtfechaagendar'];
$hora = $_POST['txthoraagendar'];
$folio = $_POST['txtfolio'];
$talla = $_POST['txttalla'];
$peso = $_POST['txtpeso'];
$edad = $_POST['txtedad'];
$alergias = $_POST['txtalergias'];
$temperatura = $_POST['txttemperatura'];
$sintomas = $_POST['txtsintomas'];
$observaciones = $_POST['txtobservaciones'];
$doctor = $_POST['txtdoctor'];





/*		try 
		{
			$conexion = new PDO('mysql:host=localhost;dbname=sistemamedico', 'root', 'conexion');
		} catch (PDOException $e) 	
		{
			echo "Error: " . $e->getMessage();
		}
*/

require_once "conexion.php";

$statement = $conexion->prepare("INSERT into agenda (fecha,hora,folio,fila,columna,talla,peso,edad,alergias,temperatura,sintomas,observaciones,doctor) VALUES(:fecha,:hora,:folio,0,0,:talla,:peso,:edad,:alergias,:temperatura,:sintomas,:observaciones,:doctor);");
$statement ->bindParam(':folio',$folio);
$statement ->bindParam(':fecha',$fecha);
$statement ->bindParam(':hora',$hora);
$statement ->bindParam(':talla',$talla);
$statement ->bindParam(':peso',$peso);
$statement ->bindParam(':edad',$edad);
$statement ->bindParam(':alergias',$alergias);
$statement ->bindParam(':temperatura',$temperatura);
$statement ->bindParam(':sintomas',$sintomas);
$statement ->bindParam(':observaciones',$observaciones);
$statement ->bindParam(':doctor',$doctor);

if ($statement->execute())
{

echo '
 <div class="jumbotron">
 <h1 class="display-4">Registro guardado correctamente!</h1>

    </div>
</div>';    

}
else
{
echo '
 <div class="jumbotron">
 <h1 class="display-4">Problemas al guardar el registro!</h1>

    </div>
</div>';    
}





}


//aqui guardamos el registro para que pueda guardarlo en la BD.










require 'footer.php'; 

?>