<?php

include('conexion.php');

$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];

//Para iniciar sesión

$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE correo ='$correo' and pass = '$pass'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1)  
	{ 
	echo	"<script> alert('Usuario logueado.');window.location= '../Crud/index.php' </script>";
	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.html' </script>";
	}

/*VaidrollTeam*/
?>
