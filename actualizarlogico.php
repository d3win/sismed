<?php 




if (isset($_POST['txtnombre']) && isset($_POST['txtap']) )

{
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


//ahora hacemos la consulta para actualizar el dato


$consulta2=$conexion->prepare("UPDATE paciente SET `nombre`=:nombre, `ap`=:ap, `am`=:am, `domicilio`=:domicilio, `ciudad`=:ciudad, `estado`=:estado, `codigo_postal`=:cp, `telefono_casa`=:telcasa, `telefono_oficina`=:teloficina, `correo`=:correo, `sexo`=:sexo, `seguridad_social`=:social, `lugar_nacimiento`=:nacimiento, `fecha_nacimiento`=:fechana, `medico`=:medico, `estado_civil`=:edocivil, `nombre_madre`=:madre, `nombre_pareja`=:pareja, `procedencia`=:procedencia, `ocupacion`=:ocupacion, `escolaridad`=:escolaridad, `observaciones`=:observaciones WHERE `folio`=:folio;");



$consulta2->bindParam(":nombre",$nombre);
$consulta2->bindParam(":ap",$ap);
$consulta2->bindParam(":am",$am);
$consulta2->bindParam(":domicilio",$domicilio);
$consulta2->bindParam(":ciudad",$ciudad);
$consulta2->bindParam(":estado",$estado);
$consulta2->bindParam(":cp",$cp);
$consulta2->bindParam(":telcasa",$telcasa);
$consulta2->bindParam(":teloficina",$teloficina);
$consulta2->bindParam(":correo",$correo);
$consulta2->bindParam(":sexo",$sexo);
$consulta2->bindParam(":social",$ss);
$consulta2->bindParam(":nacimiento",$nacimiento);
$consulta2->bindParam(":fechana",$fechanacimiento);
$consulta2->bindParam(":medico",$medico);
$consulta2->bindParam(":edocivil",$estadocivil);
$consulta2->bindParam(":madre",$madre);
$consulta2->bindParam(":pareja",$pareja);
$consulta2->bindParam(":procedencia",$procedencia);
$consulta2->bindParam(":ocupacion",$ocupacion);
$consulta2->bindParam(":escolaridad",$escolaridad);
$consulta2->bindParam(":observaciones",$observaciones);
$consulta2->bindParam(":folio",$folio);



/*
$consulta2=$conexion->prepare("UPDATE `sistemamedico`.`paciente` SET `nombre`='Darwin', `ap`='Benitez', `am`='Lopez', `domicilio`='Xochiquetzal', `ciudad`='Tlapa', `estado`='Guerrero', `codigo_postal`='41900', `telefono_casa`='11', `telefono_oficina`='11', `correo`='d3win@gmail.com', `sexo`='Mujer', `seguridad_social`='1', `lugar_nacimiento`='Tlapa', `fecha_nacimiento`='1986-09-26', `medico`='medico', `nombre_madre`='maria', `nombre_pareja`='ada', `procedencia`='tlapa', `ocupacion`='maestro', `escolaridad`='licenciatura', `observaciones`='ninguna' WHERE `folio`='1';");

*/
if($consulta2->execute())
{
echo "Actualizacion correcta";
}
else
{
echo "Error al actualizar";
}



}





if(isset($_POST['bfolio']))
{
	$id=$_POST['bfolio'];
	$consulta=$conexion->prepare("SELECT * FROM paciente WHERE folio=:id");
	$consulta->bindParam(":id",$id);
	$consulta->execute();
	if ($consulta->rowCount()>=1)
	{

		$fila=$consulta->fetch();

		echo '

<FORM action="" method="POST">


		<div class="container">


<div class="col-sm-4">

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Folio</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtfolio" value="'. $fila['folio'] .'" id="example-text-input" >
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtnombre"  value="'. $fila['nombre'] .'" id="example-search-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Apellido Paterno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtap" value="'. $fila['ap'] .'" id="example-email-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Apellido Materno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtam" value="'. $fila['am'] .'" id="example-url-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Domicilio</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtdomicilio" value="'. $fila['domicilio'] .'" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Ciudad</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtciudad" value="'. $fila['ciudad'] .'" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Estado</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtestado" value="'. $fila['estado'] .'" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Codigo Postal</label>
  <div class="col-10">
    <input class="form-control" type="number" value="41300" name="txtcp" value="'. $fila['codigo_postal'] .'" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Telefono Casa</label>
  <div class="col-10">
    <input class="form-control" type="tel"  name="txttelcasa" value="'. $fila['telefono_casa'] .'" id="example-password-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Telefono Oficina</label>
  <div class="col-10">
    <input class="form-control" type="tel"  name="txtteloficina" value="'. $fila['telefono_oficina'] .'" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Correo</label>
  <div class="col-10">
    <input class="form-control" type="email"  name="txtcorreo" value="'. $fila['correo'] .'" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Sexo</label>
<div class="col-10">
<select class="form-control"  name="txtsexo" value="'. $fila['sexo'] .'" required="">

  <option  value="Hombre">Hombre</option>
  <option  value="Mujer">Mujer</option>
  </select>
</div>
</div>

</div>
<div class="col-sm-2">
</div>

<div class="col-sm-4">


<div class="form-group row">
  <label for="example-month-input" class="col-2 col-form-label">No. Seguro Social</label>
  <div class="col-10">
    <input class="form-control" type="number" name="txtss" value="'. $fila['seguridad_social'] .'" id="example-month-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-week-input" class="col-2 col-form-label">Lugar de Nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtnacimiento" value="'. $fila['lugar_nacimiento'] .'" id="example-week-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="date" name="txtfechanacimiento" value="'. $fila['fecha_nacimiento'] .'" id="example-time-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-color-input" class="col-2 col-form-label">Medico</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtmedico" value="'. $fila['medico'] .'" id="example-color-input" required="">
  </div>
</div>

<div class="form-group row">

  <label for="example-tel-input" class="col-2 col-form-label">Estado Civil</label>
<div class="col-10">
<select class="form-control" name="txtestadocivil" selected="'.$fila['estado_civil'] .'" required="">

  <option selected="'. $fila['estado_civil'] .'">Soltero</option>
  <option value="'. $fila['estado_civil'] .'">Casado</option>
  </select>
</div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Nombre de la Madre</label>
  <div class="col-10">
    <input class="form-control" type="text" name="txtmadre"  value="'. $fila['nombre_madre'] .'" id="example-tel-input" required=""> 
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Nombre de la pareja</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtpareja" value="'. $fila['nombre_pareja'] .'" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Procedencia</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtprocedencia" value="'. $fila['procedencia'] .'" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Ocupación</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtocupacion" value="'. $fila['ocupacion'] .'" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Escolaridad</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtescolaridad" value="'. $fila['escolaridad'] .'" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Observaciones</label>
  <div class="col-10">

<input class="form-control" type="text"  name="txtobservaciones" value="'. $fila['observaciones'] .'" id="example-tel-input">


</div>
</div>
</div>




</div>

<div class="container">
	<div>

		<!--el boton que registra al usuario --> 
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</div>

</div>

</FORM>

';

		echo "si encontro el registro";
	}
	else
	{
		echo "ocurrio un error";
	}


//<textarea class="form-control" name="txtobservaciones"  value="'. $fila['observaciones'] .'" rows="5"></textarea>

}






 ?>