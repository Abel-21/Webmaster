<?php
include("conexion.php");

if(isset($_POST['registrar'])){
	if (strlen($_POST['nombre']) >=1 && strlen($_POST['correo']) >=1 && strlen($_POST['telefono']) >=1 &&strlen($_POST['password']) >=1 && strlen($_POST['tusuario']) >=1){

		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
		$telefono = trim($_POST['telefono']);
		$password = trim($_POST['password']);
		$tusuario =trim($_POST['tusuario']);

		$consulta = "INSERT INTO usuarios(nombre,correo,telefono,password,tusuario) VALUES ('$nombre','$correo','$telefono','$password','$tusuario')";
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