<?php 





try 
		{
			$conexion = new PDO('mysql:host=localhost;dbname=sistemamedico', 'root', 'conexion');


		} catch (PDOException $e) 	
		{
			echo "Error:" . $e->getMessage();
		}






 ?>