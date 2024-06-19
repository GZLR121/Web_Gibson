<?php

session_start();

if (!isset($_SESSION['email'])) {
  echo '<script>
  alert("Debes iniciar sesion, Por favor.");
  window.location = "/Web_Gibson/Web/LogIn&SingUp/index.php";
  </script>';
  session_destroy();
  die();
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Gibson</title>
  <link rel="stylesheet" href="/Web_Gibson/Web/style.css">
  <script src="https://kit.fontawesome.com/a3012a57e9.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <nav>

    <div class="full-content">
      <div id="nav" class="navbar">
        <div class="logo"><a href="/Web_Gibson/Web/index.php#Home"><img src="/Web_Gibson/Web/images/logo2.png" alt='logo' /></a></div>
        <ul>
          <li><a href="/Web_Gibson/Web/index.php#Home">Home</a></li>
          <li>
            <label for="btn-1" class="show">Features +</label>
            <a href="/Web_Gibson/Web/index.php#AcercaDe">Acerca De</a>

          </li>
          <li>
            <label for="btn-2" class="show">Categorias</label>
            <a href="/Web_Gibson/Web/index.php#Categorias">Categorias</a>
            <input type="checkbox" id="btn-2">
            <ul>
              <li>
                <label for="btn-3" class="show">Guitarras</label>
                <a href="/Web_Gibson/Web/index.php#Guitarras">Guitarras <i class="fa-solid fa-caret-right"
                    style="color: #ffffff;"></i></span></a>
                <ul>
                  <li><a href="/Web_Gibson/Web/Paginas/Electricas/LesPaul.php">Les Paul</a></li>
                  <li><a href="/Web_Gibson/Web/Paginas/Electricas/Explorer.php">Explorer</a></li>
                  <li><a href="/Web_Gibson/Web/Paginas/Electricas/FlyingV.php">Flying V</a></li>
                </ul>
              </li>
              <li>
                <label for="btn-3" class="show">Bajos</label>
                <a href="/Web_Gibson/Web/index.php#Bajos">Bajos <i class="fa-solid fa-caret-right"
                    style="color: #ffffff;"></i></span></a>
                <input type="checkbox" id="btn-3">
                <ul>
                  <li><a href="/Web_Gibson/Web/Paginas/Bajos/Thunderbird.php">Thunderbird</a></li>
                  <li><a href="/Web_Gibson/Web/Paginas/Bajos/EB-3.php">EB-3</a></li>
                  <li><a href="/Web_Gibson/Web/Paginas/Bajos/Ripper.php">Ripper</a></li>
                </ul>
              </li>
              <li>
                <label for="btn-3" class="show">Acustica</label>
                <a href="/Web_Gibson/Web/index.php#Acusticas">Acustica <i class="fa-solid fa-caret-right"
                    style="color: #ffffff;"></i></span></a>
                <input type="checkbox" id="btn-3">
                <ul>
                  <li><a href="/Web_Gibson/Web/Paginas/Acusticas/J-45.php">J-45</a></li>
                  <li><a href="/Web_Gibson/Web/Paginas/Acusticas/Hummingbird.php">Hummingbird</a></li>
                  <li><a href="/Web_Gibson/Web/Paginas/Acusticas/LG-2.php">LG-2</a></li>
                </ul>
              </li>
              <li>
                <label for="btn-3" class="show">Amplificadores</label>
                <a href="/Web_Gibson/Web/index.php#Amplificadores">Amplis <i class="fa-solid fa-caret-right"
                    style="color: #ffffff;"></i></span></a>
                <input type="checkbox" id="btn-3">
                <ul>
                  <li><a href="/Web_Gibson/Web/Paginas/Amplificadores/GA-40.php">GA-40</a></li>
                  <li><a href="/Web_Gibson/Web/Paginas/Amplificadores/GA-8T.php">GA-8T</a></li>
                  <li><a href="/Web_Gibson/Web/Paginas/Amplificadores/GA-20T.php">GA-20T</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="/Web_Gibson/Web/Paginas/Shop/index.php">Shop</a></li>
          <li><a href="/Web_Gibson/Web/php/logout_user.php">Log Out</a></li>
        </ul>
  </nav>
  </div>
  <div class="content">
    <section class="Articulo">
      <h1>Gibson GA-20T</h1>
      <img
        src="https://www.garysguitars.com/sites/default/files/styles/uc_product_full/public/GAM0036_front.jpg?itok=bgOPtv0r"
        alt="GA-20T">

      <div class="txtArticulo">
        <h3>Descripción</h3><br>
        <p>Los amplificadores de guitarra GA-20T Ranger de Gibson son instrumentos icónicos que han sido utilizados por
          algunos de los guitarristas más famosos del mundo, incluyendo a Keith Richards, Eric Clapton y Jimmy Page. Son
          conocidos por su diseño clásico, su sonido cálido y potente, y su construcción robusta.</p><br>

        <h3>Historia</h3><br>
        <ul>
          <li>El amplificador GA-20T Ranger fue creado a principios de la década de 1960.</li><br>
          <li>El diseño original del GA-20T se basó en el popular amplificador Gibson GA-20.</li><br>
          <li>El GA-20T Ranger fue lanzado en 1963 y rápidamente se convirtió en uno de los amplificadores de guitarra
            favoritos de los guitarristas de rock y blues.El GA-20T Ranger fue lanzado en 1963 y rápidamente se
            convirtió en uno de los amplificadores de guitarra favoritos de los guitarristas de rock y blues.</li>
        </ul>
      </div>

    </section>

    <section class="ArticuloExtras">
      <h2>Estructura</h2>
      <img src="https://music-electronics-forum.com/filedata/fetch?id=869480&d=1430264180" alt="GA-20T Layout">
      <div class="txtArticuloExtras">
        <h3>Características</h3><br>
        <ul>
          <li>Tipo de amplificador: El GA-20T Ranger es un amplificador de guitarra a válvulas.</li><br>
          <li>Potencia: El GA-20T Ranger tiene una potencia de salida de 20 vatios.</li><br>
          <li>Canales: El GA-20T Ranger tiene un solo canal con overdrive.</li><br>
          <li>Controles: El GA-20T Ranger tiene controles de volumen, tono y ganancia, así como un control de velocidad
            y profundidad para el efecto de trémolo.</li><br>
          <li>Altavoz: El GA-20T Ranger viene con un altavoz de 12 pulgadas.</li><br>
          <li>Carcasa: El GA-20T Ranger está hecho de tweed.</li><br>
        </ul>

        <h3>Sonido</h3><br>
        <p>Los amplificadores GA-20T Ranger son conocidos por su sonido cálido, brillante y con mucho sustain, con un
          overdrive natural y un efecto de trémolo suave. Son perfectos para una amplia gama de géneros musicales,
          incluyendo rock, blues, country y jazz..</p><br>

        <video controls>
          <source src="/Web_Gibson/Web/videos/GA-20T “Ranger” with a Fender Custom Shop Telecaster .mp4" type="video/mp4">
        </video>
      </div>
    </section>

  </div>

  </div>

  <div class="Pie">
    <p>© 2024 Gibson. Todos los derechos reservados.</p>

    <div class="redes-sociales">
      <p>Siguenos en:</p>

      <div class="redes-sociales-icons">
        <a href="https://www.instagram.com/gibsonguitar/"><i class="fa-brands fa-square-instagram fa-2xl"
            style="color: #94842a;"></i></a>
        <a href="https://x.com/gibsonguitar"><i class="fa-brands fa-square-x-twitter fa-2xl"
            style="color: #94842a;"></i></a>
        <a href="https://www.youtube.com/GibsonGuitarCorp"><i class="fa-brands fa-square-youtube fa-2xl"
            style="color: #94842a;"></i></a>
        <a href="https://www.facebook.com/GibsonES/?brand_redir=98534165717"><i
            class="fa-brands fa-square-facebook fa-2xl" style="color: #94842a;"></i></a>
      </div>
    </div>

  </div>
  </div>
  </div>

</body>

</html>