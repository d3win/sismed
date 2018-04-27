<?php 

include "seguridad.php";

 ?>







<?php  require 'header.php'; ?>


<?php 
//registro de insertar
$folio = $_POST['txtfolio'];
$nombre = $_POST['txtnombre'];
$ap = $_POST['txtap'];
$am = $_POST['txtam'];
$domicilio = $_POST['txtdomicilio'];
$ciudad = $_POST['txtciudad'];
$estado = $_POST['txtestado'];
$cp = $_POST['txtcp'];
$telcasa = $_POST['txttelcasa'];
$teloficina = $_POST['txtteloficina'];
$correo = $_POST['txtcorreo'];
$sexo = $_POST['txtsexo'];
$ss = $_POST['txtss'];
$nacimiento = $_POST['txtnacimiento'];
$fechanacimiento = $_POST['txtfechanacimiento'];
$medico = $_POST['txtmedico'];
$estadocivil = $_POST['txtestadocivil'];
$madre = $_POST['txtmadre'];
$pareja = $_POST['txtpareja'];
$procedencia = $_POST['txtprocedencia'];
$ocupacion = $_POST['txtocupacion'];
$escolaridad = $_POST['txtescolaridad'];
$observaciones = $_POST['txtobservaciones'];

		/*try 
		{
			$conexion = new PDO('mysql:host=localhost;dbname=sistemamedico', 'root', 'conexion');
		} catch (PDOException $e) 	
		{
			echo "Error: " . $e->getMessage();
		}
*/

require_once "conexion.php";

$statement = $conexion->prepare("INSERT into paciente VALUES(:folio,:nombre,:ap,:am,:domicilio,:ciudad,:estado,:cp,:telcasa,:teloficina,:correo,:sexo,:social,:nacimiento,:fechana,:medico,:edocivil,:madre,:pareja,:procedencia,:ocupacion,:escolaridad,:observaciones)");
$statement ->bindParam(':folio',$folio);
$statement ->bindParam(':nombre',$nombre);
$statement ->bindParam(':ap',$ap);
$statement ->bindParam(':am',$am);
$statement ->bindParam(':domicilio',$domicilio);
$statement ->bindParam(':ciudad',$ciudad);
$statement ->bindParam(':estado',$estado);
$statement ->bindParam(':cp',$cp);
$statement ->bindParam(':telcasa',$telcasa);
$statement ->bindParam(':teloficina',$teloficina);
$statement ->bindParam(':correo',$correo);
$statement ->bindParam(':sexo',$sexo);
$statement ->bindParam(':social',$ss);
$statement ->bindParam(':nacimiento',$nacimiento);
$statement ->bindParam(':fechana',$fechanacimiento);
$statement ->bindParam(':medico',$medico);
$statement ->bindParam(':edocivil',$estadocivil);
$statement ->bindParam(':madre',$madre);
$statement ->bindParam(':pareja',$pareja);
$statement ->bindParam(':procedencia',$procedencia);
$statement ->bindParam(':ocupacion',$ocupacion);
$statement ->bindParam(':escolaridad',$escolaridad);
$statement ->bindParam(':observaciones',$observaciones);


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





 ?>

<?php  require 'footer.php'; ?>
 