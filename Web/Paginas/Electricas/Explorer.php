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
  <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
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
            <h1>Gibson Explorer</h1>
            <img src="https://www.gitarrentotal.ch/wp-content/uploads/2021/02/GibsonExplorer1958MahoganyVOSWalnut-1.jpg"
                alt="Explorer">

            <div class="txtArticulo">
                <h3>Descripción</h3><br>
                <p>Las guitarras Explorer de Gibson son instrumentos únicos y llamativos que se han convertido en un
                    símbolo del rock and roll. Con su diseño futurista y su sonido potente, las Explorer han sido
                    utilizadas por algunos de los guitarristas más legendarios de la historia, como Jimi Hendrix, Pete
                    Townshend y U2.</p><br>

                <h3>Historia</h3><br>
                <ul>
                    <li>La Gibson Explorer fue diseñada a finales de la década de 1950 por Aldo Giardinelli, un
                        diseñador de automóviles italiano.La Gibson Explorer fue diseñada a finales de la década de 1950
                        por Aldo Giardinelli, un diseñador de automóviles italiano.</li><br>
                    <li>El diseño original de Giardinelli era aún más radical que la Explorer que conocemos hoy en día.
                        Gibson modificó el diseño y lanzó la Explorer en 1958.</li><br>
                    <li>La Explorer no fue un éxito inmediato en su lanzamiento, pero se ganó un culto después a lo
                        largo de la década de 1960 y 1970.</li>
                </ul>
            </div>

        </section>

        <section class="ArticuloExtras">
            <h2>Estructura</h2>
            <img src="https://images-na.ssl-images-amazon.com/images/I/91A5ZRgp5SL.jpg"
                alt="Explorer Layout">
            <div class="txtArticuloExtras">
                <h3>Características</h3><br>
                <ul>
                    <li>Cuerpo: Las Explorer tienen un cuerpo sólido hecho de caoba o álamo. El cuerpo de caoba les da
                        un sonido cálido y grueso, mientras que el cuerpo de álamo les da un sonido más brillante y con
                        más pegada.</li><br>
                    <li>Pastillas: Las Explorer generalmente vienen con dos pastillas humbucker. Las pastillas humbucker
                        son conocidas por su sonido potente y con mucho cuerpo.</li><br>
                    <li>Puente: Las Explorer tienen un puente Tune-o-matic con un cordal fijo. Esto les da una excelente
                        estabilidad de afinación.</li><br>
                    <li>Mástil: Las Explorer tienen un mástil de caoba con un diapasón de palo de rosa. El diapasón de
                        palo de rosa es conocido por su tacto suave y su tono cálido.</li><br>
                </ul>

                <h3>Sonido</h3><br>
                <p>Las guitarras Explorer son conocidas por su sonido potente y agresivo, con mucho sustain y un ataque
                    definido. Son perfectas para géneros musicales como el rock duro, el heavy metal y el punk.</p><br>

                <video controls>
                    <source src="/Web_Gibson/Web/videos/Explorer Demo - All Playing, No Talking.mp4" type="video/mp4">
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