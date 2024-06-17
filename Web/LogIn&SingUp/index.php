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
            <div class="logo"><a href="#Home"><img src="/Web_Gibson/Web/images/logo2.png" alt='logo' /></a></div>
            <ul>
              <li><a href="#Home">Home</a></li>
              <li>
                <label for="btn-1" class="show">Features +</label>
                <a href="#AcercaDe">Acerca De</a>
    
              </li>
              <li>
                <label for="btn-2" class="show">Categorias</label>
                <a href="#Categorias">Categorias</a>
                <input type="checkbox" id="btn-2">
                <ul>
                  <li>
                    <label for="btn-3" class="show">Guitarras</label>
                    <a href="#Guitarras">Guitarras <i class="fa-solid fa-caret-right"
                        style="color: #ffffff;"></i></span></a>
                    <ul>
                      <li><a href="/Web_Gibson/Web/Paginas/Electricas/LesPaul.html">Les Paul</a></li>
                      <li><a href="/Web_Gibson/Web/Paginas/Electricas/Explorer.html">Explorer</a></li>
                      <li><a href="/Web_Gibson/Web/Paginas/Electricas/FlyingV.html">Flying V</a></li>
                    </ul>
                  </li>
                  <li>
                    <label for="btn-3" class="show">Bajos</label>
                    <a href="#Bajos">Bajos <i class="fa-solid fa-caret-right" style="color: #ffffff;"></i></span></a>
                    <input type="checkbox" id="btn-3">
                    <ul>
                      <li><a href="/Web_Gibson/Web/Paginas/Bajos/Thunderbird.html">Thunderbird</a></li>
                      <li><a href="/Web_Gibson/Web/Paginas/Bajos/EB-3.html">EB-3</a></li>
                      <li><a href="/Web_Gibson/Web/Paginas/Bajos/Ripper.html">Ripper</a></li>
                    </ul>
                  </li>
                  <li>
                    <label for="btn-3" class="show">Acustica</label>
                    <a href="#Acusticas">Acustica <i class="fa-solid fa-caret-right" style="color: #ffffff;"></i></span></a>
                    <input type="checkbox" id="btn-3">
                    <ul>
                      <li><a href="/Web_Gibson/Web/Paginas/Acusticas/J-45.html">J-45</a></li>
                      <li><a href="/Web_Gibson/Web/Paginas/Acusticas/Hummingbird.html">Hummingbird</a></li>
                      <li><a href="/Web_Gibson/Web/Paginas/Acusticas/LG-2.html">LG-2</a></li>
                    </ul>
                  </li>
                  <li>
                    <label for="btn-3" class="show">Amplificadores</label>
                    <a href="#Amplificadores">Amplis <i class="fa-solid fa-caret-right" style="color: #ffffff;"></i></span></a>
                    <input type="checkbox" id="btn-3">
                    <ul>
                      <li><a href="/Web_Gibson/Web/Paginas/Amplificadores/GA-40.html">GA-40</a></li>
                      <li><a href="/Web_Gibson/Web/Paginas/Amplificadores/GA-8T.html">GA-8T</a></li>
                      <li><a href="/Web_Gibson/Web/Paginas/Amplificadores/GA-20T.html">GA-20T</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Shop</a></li>
              <li><a href="#">Log in</a></li>
            </ul>
      </nav>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form class="m-5" id="formularioRegistro" action="/Web_Gibson/Web/php/registro_user.php" method="POST">
                <h1>Crear Cuenta</h1>
                
                <input type="text" id="nombreRegistro" name="nombreRegistro" aria-describedby="nombreRegistro" placeholder="Nombre">
                <input type="text" id="userRegistro" name="userRegistro" aria-describedby="userRegistro" placeholder="Username">
                <input type="email" id="emailRegistro" name="emailRegistro" aria-describedby="emailRegistro" placeholder="Email">
                <input type="password" id="contraRegistro" name="contraRegistro" aria-describedby="contraRegistro" placeholder="Contraseña">                
                <button type="submit" name="submitRegister">Crear Cuenta</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form class="m-5" id="formularioInicio" action="registro.php" method="post">
                <h1>Iniciar Sesion</h1>
                
                <input type="email" id="emailInicio" name="emailInicio" aria-describedby="emailInicio" placeholder="Email">
                <input type="password" id="contraInicio" name="contraInicio" aria-describedby="contraInicio" placeholder="Contraseña">
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