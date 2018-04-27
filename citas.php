
<?php  require 'header.php'; 




//if(isset($_POST['submit']))
//{



 ?>

<?php 

include "seguridad.php";

 ?>



<div class="jumbotron">
 <h1 class="display-4">Buscar Citas!</h1>

<!--<p>Usuario:  <?php echo $_SESSION['usuario'];?></p>
-->
    </div>
    


<div class="container">
	
<FORM action="" method="POST">
	<div class="container">


	<div class="col-sm-4">

	<div class="form-group row">
	  <label for="example-text-input" class="col-2 col-form-label">Folio</label>
	  <div class="col-5">
	    <input class="form-control" type="number"  name="folio"  required="" placeholder="Ingresa el folio del paciente">

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

  <FORM action="imprimircitas.php" method="POST">

<div class="container">

    <div class="form-group row">
      <div class="col-5">
                <button type="submit" name="btncitashoy" class="btn btn-primary">Imprimir citas de hoy</button>
      </div>
    </div>
  </div>

</FORM>

<FORM action="" method="POST">

<div class="container">

	<div class="form-group row">
	  <div class="col-5">
	    		<button type="submit" name="citashoy" class="btn btn-primary">Citas para hoy</button>
	  </div>
	</div>
  </div>

<table class="table">
  <thead>
    <tr>
      <th>Folio</th>
            <th>Paciente</th>
       <th>Fecha</th>
      <th>Hora</th>
      <th>Talla</th>
      <th>Peso</th>
      <th>Edad</th>
      <th>Alergias</th>
      <th>Temperatura</th>
      <th>Sintomas</th>
      <th>Observaciones</th>
      <th>Doctor</th>
      
    </tr>
  </thead>
  <tbody>

<?php 


if (isset($_POST['folio'])) {
	# code...

require_once	"conexion.php";
require_once "buscarcitas.php";
//require_once "buscarpaciente.php";

}


if (isset($_POST['citashoy'])) {
	# code...

require_once	"conexion.php";
require_once "buscarcitashoy.php";
//require_once "buscarpaciente.php";

}

/*
if (isset($_POST['btncitashoy'])) {
	# code...

require_once "imprimircitas.php";
//require_once "buscarpaciente.php";

}

*/



 ?>

   
  </tbody>
</table>

</div>







<?php  require 'footer.php'; 



//}

?>