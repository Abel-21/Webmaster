<?php
include("conexion.php");

if(isset($_POST['registrar'])){
	if (strlen($_POST['nombre']) >=1 && strlen($_POST['matricula']) >=1 && strlen($_POST['correo']) >=1 &&strlen($_POST['password']) >=1 && strlen($_POST['tusuario']) >=1){

		$nombre = trim($_POST['nombre']);
		$matricula = trim($_POST['matricula']);
		$correo = trim($_POST['correo']);
		$password = trim($_POST['password']);
		$tusuario =trim($_POST['tusuario']);

		$consulta = "INSERT INTO usuarios(nombre,matricula,correo,password,tusuario) VALUES ('$nombre','$matricula','$correo','$password','$tusuario')";
		$resultado = mysqli_query($conexion,$consulta);

		if ($resultado) {
			?>
			<h3 class="ok">Te has inscrito correctamente!! :D</h3>
			<?php
		}else{
			?>
			<h3 class="bad">ups ha ocurrido un error</h3>
			<?php
		}
	} else{
		?>
			<h3 class="bad">por favor completa los campos!!</h3>
			<?php
	}

}
?>