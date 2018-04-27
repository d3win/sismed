<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
	<title>SITIO</title>
</head>
<body>

<?php 

include "seguridad.php";

 ?>




<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #A9D0F5;">
  <div class="container">
  

<button type="button" class="btn btn-default navbar-btn"><a href="citas.php">Citas Médicas</a></button>
<button type="button" class="btn btn-default navbar-btn"><a href="registro.php">Expedientes</a></button>
<button type="button" class="btn btn-default navbar-btn"><a href="agenda.php">Agenda</a></button>
<button type="button" class="btn btn-default navbar-btn">Reportes</button>
<button type="button" class="btn btn-default navbar-btn">Configuración</button>
<button type="button" class="btn btn-default navbar-btn"><a href="cierre.php">Cerrar sesión</a></button>

  </div>
</nav>