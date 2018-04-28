<?php 





try 
		{

				$conexion = new PDO('mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_45eeb4aea35a5d0','b42d0b318a4d79','efad9b73'); 

			//$conexion = new PDO('mysql:host=localhost;dbname=sistemamedico', 'root', 'conexion');


		} catch (PDOException $e) 	
		{
			echo "Error:" . $e->getMessage();
		}






 ?>