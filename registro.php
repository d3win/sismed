


<?php  require 'header.php'; ?>
<?php 

include "seguridad.php";

 ?>

 


  <div class="jumbotron">
 <h1 class="display-4">Registro de Expedientes!</h1>

<!--    <p>Realiza el registro de los pacientes nuevos para generar un nuevo expediente donde contendrá toda la información sobre sus visitas y sus proximas citas</p>--> 
  </div>

<FORM action="actuaizarpaciente.php" method="POST">
	<div class="container">


	<div class="col-sm-4">

	<div class="form-group row">
	  <label for="example-text-input" class="col-2 col-form-label">Folio</label>
	  <div class="col-5">
	    <input class="form-control" type="number"  name="bfolio"  required="" placeholder="Ingresa el folio del paciente">

	  </div>
	</div>
	<div class="form-group row">
	  <div class="col-5">
	    		<button type="submit" class="btn btn-primary">Buscar paciente</button>
	  </div>
	</div>

	</div>
	</div>
</FORM>

<?php 


if (isset($_POST['bfolio'])) {
	# code...

require_once	"conexion.php";
require_once "busccarpaciente.php";
//require_once "buscarpaciente.php";

}


?>




<FORM action="insertar.php" method="POST">
<div class="container">


<div class="col-sm-4">

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Folio</label>
  <div class="col-10">
    <input class="form-control" type="number"  name="txtfolio" id="example-text-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtnombre" id="example-search-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Apellido Paterno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtap" id="example-email-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Apellido Materno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtam" id="example-url-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Domicilio</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtdomicilio" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Ciudad</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtciudad" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Estado</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtestado" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Codigo Postal</label>
  <div class="col-10">
    <input class="form-control" type="number" value="41300" name="txtcp" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Telefono Casa</label>
  <div class="col-10">
    <input class="form-control" type="tel"  name="txttelcasa" id="example-password-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Telefono Oficina</label>
  <div class="col-10">
    <input class="form-control" type="tel"  name="txtteloficina" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Correo</label>
  <div class="col-10">
    <input class="form-control" type="email"  name="txtcorreo" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Sexo</label>
<div class="col-10">
<select class="form-control"  name="txtsexo" required="">

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
    <input class="form-control" type="number" name="txtss" id="example-month-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-week-input" class="col-2 col-form-label">Lugar de Nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtnacimiento" id="example-week-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="date" name="txtfechanacimiento" id="example-time-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-color-input" class="col-2 col-form-label">Medico</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtmedico" id="example-color-input" required="">
  </div>
</div>

<div class="form-group row">

  <label for="example-tel-input" class="col-2 col-form-label">Estado Civil</label>
<div class="col-10">
<select class="form-control" name="txtestadocivil" required="">

  <option value="Soltero">Soltero</option>
  <option value="Casado">Casado</option>
  </select>
</div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Nombre de la Madre</label>
  <div class="col-10">
    <input class="form-control" type="text" name="txtmadre"  id="example-tel-input" required=""> 
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Nombre de la pareja</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtpareja" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Procedencia</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtprocedencia" id="example-tel-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Ocupación</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtocupacion" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Escolaridad</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtescolaridad" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Observaciones</label>
  <div class="col-10">

<input class="form-control" type="text" name="txtobservaciones">
  </div>
</div>
</div>




</div>

<div class="container">
	<div>

		<!--el boton que registra al usuario --> 
		<button type="submit" class="btn btn-primary">Registrarr</button>
	</div>

</div>


</FORM>

<?php  require 'footer.php'; ?>