
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Developer Abel</title>
 <link rel="stylesheet" href="estilo.css">	
</head>
<body>

  <div class="caja1" id="caja1">
    <div class="botondeintercambiar">
      <div id="btnvai"></div>
      <button type="button" class="botoncambiarcaja" onclick="loginvai()" id="vaibtnlogin">Login</button>
      <button type="button" class="botoncambiarcaja" onclick="registrarvai()" id="vaibtnregistrar">Registrar</button>
    </div>

    <form action="loguear.php" method="POST" id="frmlogin" class="grupo-entradas">
      <div class="ub1">&#128273; Ingresar nombre de usuario</div>
      <input type="text" name="nombre" placeholder="Ingresar usuario">
      <div class="ub1">&#128274; Ingresar contraseña</div>
      <input type="password" name="password" placeholder="Ingresar contraseña" id="txtpassword">

      <div class="ub1">
        <input type="checkbox" onclick="verpassword()" >Mostrar contraseña</div>
        <div align="center">
          <input type="submit" value="Ingresar">
          <input type="reset" value="Cancelar">
        </div>
      </form>

      <form method="POST" action="registrar.php" id="frmregistrar" class="grupo-entradas">
        <div class="ub1">&#128273; Nombre </div>
        <input type="text" name="nombre" placeholder="Nombre completo">
        <div class="ub1">&#128274; Matricula</div>
        <input type="text" name="matricula" placeholder="Matricula">
        <div class="ub1">&#128274; Correo</div>
        <input type="email" name="correo" placeholder="Correo">
        <div class="ub1">&#128275; Contraseña</div>
        <input type="password" name="password" id="txtpassword2" placeholder="Ingresar contraseña">

        <div class="ub1">
          <input type="checkbox" onclick="verpassword2()" >Mostrar contraseña
        </div>
        <div class="ub1">Elija una opcion: </div>
        <select name="tusuario">
          <option value="0" style="display:none;"><label>Tipo de usuario</label></option>
          <option value="investigador">Investigador</option>
          <option value="tesista">Tesista</option>
          <option value="profesor">Profesor</option>
          <option value="estudiante">Estudiante</option>
          <option value="visitante">Visitante</option>
        </select>

        <div align="center">
          <input type="submit" value="registrar" name="registrar">
          <input type="reset" value="cancelar" name="cancelar">
        </div>
      </form>

    </div>

  </body>

  <script>
   
    var x = document.getElementById("frmlogin");
    var y = document.getElementById("frmregistrar");
    var z = document.getElementById("btnvai");

    function registrarvai(){
      x.style.left = "-400px";
      y.style.left = "50px";
      z.style.left = "110px";
    }

    function loginvai(){
      x.style.left = "50px";
      y.style.left = "450px";
      z.style.left = "0";
    }

  </script>
  </html>
