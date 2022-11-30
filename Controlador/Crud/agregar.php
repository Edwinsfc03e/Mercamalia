<?php include_once("conexion.php"); 
    
	$nombre 	= $_POST['txtnombre'];
    $correo 	= $_POST['txtcorreo'];
    $telefono 	= $_POST['txttelefono'];
    $direccion  =$_POST['txtdire'];
    
	mysqli_query($conn, "INSERT INTO usuarios(nom,correo,tel,direccion) VALUES('$nombre','$correo','$telefono','$direccion')");
    
header("Location:index.php");
	

?>
