<?php

session_start();

if (!isset($_SESSION['email'])) {
  echo '<script>
  alert("Debes iniciar sesion, Por favor.");
  window.location = "../../LogIn&SingUp/index.php";
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
  <link rel="stylesheet" href="../../style.css">
  <script src="https://kit.fontawesome.com/a3012a57e9.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<nav>

<div class="full-content">
    <div id="nav" class="navbar">
        <div class="logo"><a href="../../index.php#Home"><img src="../../images/logo2.png"
                    alt='logo' /></a></div>
        <ul>
            <li><a href="../../index.php#Home">Home</a></li>
            <li>
                <label for="btn-1" class="show">Features +</label>
                <a href="../../index.php#AcercaDe">Acerca De</a>

            </li>
            <li>
                <label for="btn-2" class="show">Categorias</label>
                <a href="../../index.php#Categorias">Categorias</a>
                <input type="checkbox" id="btn-2">
                <ul>
                    <li>
                        <label for="btn-3" class="show">Guitarras</label>
                        <a href="../../index.php#Guitarras">Guitarras <i
                                class="fa-solid fa-caret-right" style="color: #ffffff;"></i></span></a>
                        <ul>
                            <li><a href="../../Paginas/Electricas/LesPaul.php">Les Paul</a></li>
                            <li><a href="../../Paginas/Electricas/Explorer.php">Explorer</a></li>
                            <li><a href="../../Paginas/Electricas/FlyingV.php">Flying V</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="btn-3" class="show">Bajos</label>
                        <a href="#Bajos">Bajos <i class="fa-solid fa-caret-right"
                                style="color: #ffffff;"></i></span></a>
                        <input type="checkbox" id="btn-3">
                        <ul>
                            <li><a href="../../Paginas/Bajos/Thunderbird.php">Thunderbird</a></li>
                            <li><a href="../../Paginas/Bajos/EB-3.php">EB-3</a></li>
                            <li><a href="../../Paginas/Bajos/Ripper.php">Ripper</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="btn-3" class="show">Acustica</label>
                        <a href="#Acusticas">Acustica <i class="fa-solid fa-caret-right"
                                style="color: #ffffff;"></i></span></a>
                        <input type="checkbox" id="btn-3">
                        <ul>
                            <li><a href="../../Paginas/Acusticas/J-45.php">J-45</a></li>
                            <li><a href="../../Paginas/Acusticas/Hummingbird.php">Hummingbird</a></li>
                            <li><a href="../../Paginas/Acusticas/LG-2.php">LG-2</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="btn-3" class="show">Amplificadores</label>
                        <a href="#Amplificadores">Amplis <i class="fa-solid fa-caret-right"
                                style="color: #ffffff;"></i></span></a>
                        <input type="checkbox" id="btn-3">
                        <ul>
                            <li><a href="../../Paginas/Amplificadores/GA-40.php">GA-40</a></li>
                            <li><a href="../../Paginas/Amplificadores/GA-8T.php">GA-8T</a></li>
                            <li><a href="../../Paginas/Amplificadores/GA-20T.php">GA-20T</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="../../Shop/index.php">Shop</a></li>
            <li><a href="../../php/logout_user.php">Log Out</a></li>
        </ul>
</nav>
  </div>
  <div class="content">
    <section class="Articulo">
      <h1>Gibson Hummingbird</h1>
      <img
        src="https://www.musicstore.de/INTERSHOP/static/WFS/MusicStore-Site/MusicStoreShop/MusicStore-MusicStoreShop/de_DE/longtext/GIT0042623-000/Gibson-Hummingbird-Ebony-Limited-Editionjpg.jpg"
        alt="Hummingbird">

      <div class="txtArticulo">
        <h3>Descripción</h3><br>
        <p>Las guitarras acústicas Hummingbird de Gibson son instrumentos icónicos que han sido utilizados por algunos
          de los guitarristas más famosos del mundo, incluyendo a Keith Richards, Bob Dylan, y Elvis Presley. Son
          conocidas por su diseño clásico, su sonido cálido y brillante, y su excelente construcción.</p><br>

        <h3>Historia</h3><br>
        <ul>
          <li>La guitarra Hummingbird fue creada a principios de la década de 1930.</li><br>
          <li>El diseño original de la Hummingbird se inspiró en la mandolina Gibson F-5.</li><br>
          <li>La Hummingbird fue lanzada en 1939 y rápidamente se convirtió en una de las guitarras acústicas más
            populares de Gibson.</li>
        </ul>
      </div>

    </section>

    <section class="ArticuloExtras">
      <h2>Estructura</h2>
      <img
        src="https://img2.cgtrader.com/items/637410/599158eec3/gibson-hummingbird-guitar-3d-model-max-obj-fbx-ma-mb-mtl.jpg"
        alt="Hummingbird Layout">
      <div class="txtArticuloExtras">
        <h3>Características</h3><br>
        <ul>
          <li>Cuerpo: Las Hummingbird tienen un cuerpo grande y redondo hecho de caoba y arce. El cuerpo de caoba les da
            un sonido cálido y grueso, mientras que el cuerpo de arce les da un sonido brillante y con más pegada.</li>
          <br>
          <li>Pastillas: Las Hummingbird no vienen con pastillas de fábrica, pero se pueden equipar con pastillas
            opcionales para amplificación.</li><br>
          <li>Puente: Las Hummingbird tienen un puente Tune-o-matic con un cordal fijo. Esto les da una excelente
            estabilidad de afinación.</li><br>
          <li>Mástil: Las Hummingbird tienen un mástil de caoba con un diapasón de palo de rosa. El diapasón de palo de
            rosa es conocido por su tacto suave y su tono cálido.</li><br>
        </ul>

        <h3>Sonido</h3><br>
        <p>Las guitarras Hummingbird son conocidas por su sonido cálido, brillante y con mucho sustain. Son perfectas
          para una amplia gama de géneros musicales, incluyendo folk, blues, country, y rock.</p><br>

        <video controls>
          <source src="../videos/Hummingbird Standard - Demo.mp4" type="video/mp4">
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