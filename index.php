
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
	<title></title>
</head>
<body>
	
  
  
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <form action="" method="POST">
      <div class="form-group">
      <label for="email">Usuario:</label>
      <input type="text" class="form-control" name="usuario" required="" placeholder="Ingresa el usuario">
    </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass" required="" placeholder="Ingresa tu contraseña">
  </div>
  <button type="submit" class="btn btn-default">Ingresar</button>
</form> 
 </div>
    </div>
</div>
  
<?php 

if(isset($_POST['usuario']) && isset($_POST['pass']))
{
require_once "conexion.php";
require_once "login.php";

}

 ?>


</div>
</div>
</body>
</html>
