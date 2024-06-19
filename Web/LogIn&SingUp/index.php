<?php

session_start();

if (isset($_SESSION['email'])) {
  header("location:../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Gibson</title>
</head>

<body>
  <nav>

    <div class="full-content">
      <div id="nav" class="navbar">
        <div class="logo"><a href="#Home"><img src="../images/logo2.png" alt='logo' /></a></div>
        <ul>
          <li><a href="../index.php#Home">Home</a></li>
          <li>
            <label for="btn-1" class="show">Features +</label>
            <a href="../index.php#AcercaDe">Acerca De</a>

          </li>
          <li>
            <label for="btn-2" class="show">Categorias</label>
            <a href="../index.php#Categorias">Categorias</a>
            <input type="checkbox" id="btn-2">
            <ul>
              <li>
                <label for="btn-3" class="show">Guitarras</label>
                <a href="../index.php#Guitarras">Guitarras <i class="fa-solid fa-caret-right"
                    style="color: #ffffff;"></i></span></a>
                <ul>
                  <li><a href="../Paginas/Electricas/LesPaul.php">Les Paul</a></li>
                  <li><a href="../Paginas/Electricas/Explorer.php">Explorer</a></li>
                  <li><a href="../Paginas/Electricas/FlyingV.php">Flying V</a></li>
                </ul>
              </li>
              <li>
                <label for="btn-3" class="show">Bajos</label>
                <a href="../index.php#Bajos">Bajos <i class="fa-solid fa-caret-right"
                    style="color: #ffffff;"></i></span></a>
                <input type="checkbox" id="btn-3">
                <ul>
                  <li><a href="../Paginas/Bajos/Thunderbird.php">Thunderbird</a></li>
                  <li><a href="../Paginas/Bajos/EB-3.php">EB-3</a></li>
                  <li><a href="../Paginas/Bajos/Ripper.php">Ripper</a></li>
                </ul>
              </li>
              <li>
                <label for="btn-3" class="show">Acustica</label>
                <a href="../index.php#Acusticas">Acustica <i class="fa-solid fa-caret-right"
                    style="color: #ffffff;"></i></span></a>
                <input type="checkbox" id="btn-3">
                <ul>
                  <li><a href="../Paginas/Acusticas/J-45.php">J-45</a></li>
                  <li><a href="../Paginas/Acusticas/Hummingbird.php">Hummingbird</a></li>
                  <li><a href="../Paginas/Acusticas/LG-2.php">LG-2</a></li>
                </ul>
              </li>
              <li>
                <label for="btn-3" class="show">Amplificadores</label>
                <a href="../index.php#Amplificadores">Amplis <i class="fa-solid fa-caret-right"
                    style="color: #ffffff;"></i></span></a>
                <input type="checkbox" id="btn-3">
                <ul>
                  <li><a href="php/Amplificadores/GA-40.php">GA-40</a></li>
                  <li><a href="../Paginas/Amplificadores/GA-8T.php">GA-8T</a></li>
                  <li><a href="../Paginas/Amplificadores/GA-20T.php">GA-20T</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="../Paginas/Shop/index.php">Shop</a></li>
        </ul>
  </nav>
  <div class="container" id="container">
    <div class="form-container sign-up">

      <form class="m-5" id="formularioRegistro" action="../php/registro_user.php" method="POST">
        <h1>Crear Cuenta</h1>

        <input type="text" id="nombreRegistro" name="nombreRegistro" aria-describedby="nombreRegistro"
          placeholder="Nombre">
        <input type="text" id="userRegistro" name="userRegistro" aria-describedby="userRegistro" placeholder="Username">
        <input type="email" id="emailRegistro" name="emailRegistro" aria-describedby="emailRegistro"
          placeholder="Email">
        <input type="password" id="contraRegistro" name="contraRegistro" aria-describedby="contraRegistro"
          placeholder="Contraseña">
        <button type="submit" name="submitRegister">Crear Cuenta</button>
      </form>

    </div>
    <div class="form-container sign-in">
      <form class="m-5" id="formularioInicio" action="../php/login_user.php" method="POST">
        <h1>Iniciar Sesion</h1>

        <input type="email" id="emailInicio" name="emailInicio" aria-describedby="emailInicio" placeholder="Email">
        <input type="password" id="contraInicio" name="contraInicio" aria-describedby="contraInicio"
          placeholder="Contraseña">
        <button type="submit" name="submitLogin">Iniciar Sesion</button>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>¡Bienvenido De Vuelta!</h1>
          <p>Nos alegra verte por aquí. Ingresa si ya cuentas con una cuenta</p>
          <button class="hidden" id="login">Iniciar Sesion</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>¡Bienvenido!</h1>
          <p>¿Todavia no tienes una cuenta? Registrate:</p>
          <button class="hidden" id="register">Crear Cuenta</button>
        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>