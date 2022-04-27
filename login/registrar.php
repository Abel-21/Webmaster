<?php
$con=mysqli_connect('localhost','root','','formulario')or die('Error en la conexion con el servidor');

$sql="INSERT INTO registro VALUES('".$_POST["nombre"]."','".$_POST["matricula"]."', '".$_POST["contraseña"]."','".$_POST["usuario"]."')";

	$resultado=mysqli_query($con,$sql);

		if($resultado){
			echo "<script> alert ('Usted a quedado registrado'); window.location='login.html'</script>";
		}else{
		printf("Errormessage: %s\n", mysqli_error($con));


	mysqli_close($con);
?>