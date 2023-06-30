<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Estilos/styles.css">
  <title>Iniciar Sesion</title>
</head>

<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fa-solid fa-bars"></i>
    </label>
    <a href="#" class="enlace">
      <img src="" alt="" class="">
    </a>
    <ul>
      <li><a class="active" href="../Vistas/ventanainicio.php">Inicio</a></li>
      <li><a href="">Nosotros</a></li>
      <li><a href="./registro.php">Registro</a></li>
      <li><a href="./login.php">Iniciar sesion</a></li>
      <li><a href="">Servicios</a></li> 
      <li><a href="">Productos</a></li>    </ul>
  </nav>
  <div class="signupFrm">
    <form action="" class="form">
      <h1 class="title">Login</h1>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="usu">
        <label for="" class="label">Usuario</label>
      </div>

      <div class="inputContainer">
        <input type="password" class="input" placeholder="a" name="pass1">
        <label for="" class="label">Contraseña</label>
      </div>
      <label for="Mensaje" id="mens"></label>



      </label> <input type="submit" class="submitBtn" value="Iniciar Sesion">
    </form>