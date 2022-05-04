<?php
include("conexion.php");
session_start();

$nombre = $_POST['nombre'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) as contar from usuarios where nombre ='$nombre' and password ='$password'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
	$_SESSION['username'] = $nombre;
	header("location: home.php");
}else{
	echo "Datos incorrectos";
	//header("location: ../login.php");
}

?>