<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro de Usuario</title>
  <link rel="stylesheet" href="../Estilos/styles.css">
</head>

<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fa-solid fa-bars"></i>
    </label>
    <ul>
      <li><a class="active" href="../Vistas/ventanainicio.php">Inicio</a></li>
      <li><a href="">Nosotros</a></li>
      <li><a href="./registro.php">Registro</a></li>
      <li><a href="./iniciarsesion.php">Iniciar sesion</a></li>
      <li><a href="">Servicios</a></li>
      <li><a href="./productos.php">Productos</a></li>
    </ul>
  </nav><br><br><br>
  <div class="signupFrm">
    <form class="form" action="" method="post">
      <h1 class="title">Registro de usuario</h1>
      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="nombre" required 
         title="Ingresa tu nombre completo">
        <label for="" class="label">Nombre Completo</label>
      </div>
      <div class="inputContainer">
        <input type="tel" class="input" placeholder="a" name="tel" required pattern="[0-9]]{10}" title="Ingresa tu numero de telefono, considerando solo 10 digitos">
        <label for="" class="label">Telefono</label>
      </div>
      <div class="inputContainer">
        <input type="email" class="input" placeholder="a" name="email" required title="Ingresa tu correo electronico">
        <label for="" class="label">Email</label>
      </div>
      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="usu" required 
        pattern="[A-Z|Á|É|Í|Ú|Ó|Ü|Ñ|a-z|á|é|í|ó|ú|ü|ñ]{3,<10}" title="Ingresa un nombre de usuario, considera que debe tener mas de 3 elementos y menos de 10">
        <label for="" class="label">Usuario</label>
      </div>
      <div class="inputContainer">
        <input type="password" required class="input" placeholder="a" name="pass1"
         pattern="[A-Z|a-z|0-9|@|#|%|&|-|_|ñ|Ñ]{8,90}">
        <label for="" class="label">Contraseña</label>
      </div>
      <div class="inputContainer">
        <input type="password" required class="input" placeholder="a" name="pass2">
        <label for="" class="label">Confirma Contraseña</label>
      </div>
      </label> <input type="submit" class="submitBtn" value="Registrar">

      </div>
      <div>