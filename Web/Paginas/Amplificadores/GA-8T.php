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
      <h1>Gibson GA-8T Discoverer</h1>
      <img src="https://guitarhunter.dk/wp-content/uploads/2022/03/img_4785.jpg" alt="GA-8T Discoverer">

      <div class="txtArticulo">
        <h3>Descripción</h3><br>
        <p>Los amplificadores de guitarra GA-8T Discoverer de Gibson son instrumentos icónicos y compactos que han sido
          utilizados por algunos guitarristas famosos, incluyendo a Jack Bruce, Phil Collins y Cliff Burton. Son
          conocidos por su diseño clásico, su sonido versátil y su construcción robusta.</p><br>

        <h3>Historia</h3><br>
        <ul>
          <li>El amplificador GA-8T Discoverer fue creado a principios de la década de 1960.</li><br>
          <li>El diseño original del GA-8T se basó en el popular amplificador Gibson GA-8.</li><br>
          <li>El GA-8T Discoverer fue lanzado en 1962 y rápidamente se convirtió en uno de los amplificadores de
            guitarra favoritos de los guitarristas de rock y blues.</li>
        </ul>
      </div>

    </section>

    <section class="ArticuloExtras">
      <h2>Estructura</h2>
      <img
        src="https://th.bing.com/th/id/R.298ae6ba06f2f94c4026929eb353649c?rik=MOW7cuQ0DFrqzA&riu=http%3a%2f%2felektrotanya.com%2fPREVIEWS%2f63463243%2f23432455%2fgibson%2fgibson_ga-8t.pdf_1.png&ehk=PgGMPl7EYXlFca9gr%2bjzNE3wyOIv1ZSahAEFS5dX0QY%3d&risl=&pid=ImgRaw&r=0"
        alt="GA-8T Layout">
      <div class="txtArticuloExtras">
        <h3>Características</h3><br>
        <ul>
          <li>Tipo de amplificador: El GA-8T Discoverer es un amplificador de guitarra a válvulas.</li>
          <br>
          <li>Potencia: El GA-8T Discoverer tiene una potencia de salida de 8 vatios.</li><br>
          <li>Canales: El GA-8T Discoverer tiene un solo canal con overdrive.</li><br>
          <li>Controles: El GA-8T Discoverer tiene controles de volumen, tono y ganancia, así como un control de
            velocidad y profundidad para el efecto de trémolo.</li><br>
          <li>Altavoz: El GA-8T Discoverer viene con un altavoz de 12 pulgadas.</li><br>
          <li>Carcasa: El GA-8T Discoverer está hecho de tweed.</li><br>
        </ul>

        <h3>Sonido</h3><br>
        <p>Los amplificadores GA-40 son conocidos por su sonido cálido, rico y con mucho sustain. Son perfectos para una
          amplia gama de géneros musicales, incluyendo blues, rock, country y jazz.</p><br>

        <video controls>
          <source src="/Web_Gibson/Web/videos/GA-8T .mp4" type="video/mp4">
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