<?php 








if(isset($_POST['folio']))
{





  $id=$_POST['folio'];
  $consulta=$conexion->prepare("SELECT * FROM paciente WHERE folio=:id");
  $consulta->bindParam(":id",$id);
  $consulta->execute();
  if ($consulta->rowCount()>=1)
  {

    $fila=$consulta->fetch();

    ?>
    
    
    
    
    <FORM action="agendarcitafinal.php" method="POST">


    <div class="container">


<div class="col-sm-4">

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Folio</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtfolio" value="<?php echo $fila['folio']?>" id="example-text-input" >
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtnombre"  disabled value="<?php echo $fila['nombre']?>" id="example-search-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Apellido Paterno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtap" disabled value="<?php echo $fila['ap']?>" id="example-email-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Apellido Materno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtam" disabled value="<?php echo $fila['am']?>" id="example-url-input" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Domicilio</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtdomicilio" disabled value="<?php echo $fila['domicilio']?>" id="example-tel-input" required="">
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Sexo</label>
  <div class="col-10">
  <input class="form-control" type="text"  name="txtsexo" disabled value="<?php echo $fila['sexo']?>" required="">
  

  
  
  </div>
</div>
</div>
<div class="col-sm-2">
</div>
<div class="col-sm-4">
<div class="form-group row">
  <label for="example-month-input" class="col-2 col-form-label">Talla</label>
  <div class="col-10">
    <input class="form-control" type="number" name="txttalla" min="10" max="100" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-week-input" class="col-2 col-form-label">Peso</label>
  <div class="col-10">
    <input class="form-control" type="number"  name="txtpeso" min="10" max="300" required="">
  </div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Edad</label>
  <div class="col-10">
    <input class="form-control" type="number"  name="txtedad" min="1" max="80" step="1" require="">
  </div>
</div>
<div class="form-group row">
  <label for="example-color-input" class="col-2 col-form-label">Alergias</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtalergias" value="" id="example-color-input" required="">
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Temperatura</label>
  <div class="col-10">
    <input class="form-control" type="text" name="txttemperatura"  min="25" max="45" required=""> 
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Sintomas</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtsintomas" value="" id="example-tel-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Doctor</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="txtdoctor" value="" required="">
  </div>
</div>



<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Observaciones</label>
  <div class="col-10">
    <textarea class="form-control" name="txtobservaciones"  value="Ninguno" rows="5"></textarea>
  </div>
</div>

<?php
$fecha = date("d") ."/". date("m") ."/". date("Y");
?>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Fecha para agendar</label>
  <div class="col-10">
    <input class="form-control" type="date"  name="txtfechaagendar"  min="<?php $fecha ?>" value="12/12/2012" id="example-tel-input" >
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Hora de la cita</label>
  <div class="col-10">
    <input class="form-control" type="time"  max="20:00:00" min="08:00:00" step="1"  name="txthoraagendar" value="" id="example-tel-input">
  </div>
</div>

</div>
</div>

<div class="container">
  <div>
    <!--el boton que registra al usuario --> 
    <button type="submit" class="btn btn-primary">Guardar Cita</button>
  </div>

</div>

</FORM>

<?php

  }
  else
  {
    echo "ocurrio un error";
  }



 

}


 ?>