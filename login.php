<?php 


$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$consulta= $conexion->prepare("SELECT * FROM usuario where usuario=:usuariox and pass=:passx");
$consulta ->bindParam(':usuariox',$usuario);
$consulta ->bindParam(':passx',$pass); 

$consulta->execute();
if($consulta->rowCount()>=1)
{


session_start();
$fila = $consulta->fetch();


$_SESSION['usuario']=$fila['usuario'];

header("Location: citas.php");

}
else
{

echo "<div>
  <strong>Los datos no son correctos!</strong></div>";
}

 ?>