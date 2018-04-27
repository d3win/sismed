
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




<?php 


if (isset($_POST['folio'])) {
  # code...

require_once  "conexion.php";
require_once "agendarlogico.php";

}
 ?>


</div>
<?php  require 'footer.php'; 
//}

?>