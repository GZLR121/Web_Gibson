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
            <h1>Gibson EB-3</h1>
            <img src="https://th.bing.com/th/id/R.6f59eddb6b82cb211ed1388a52c05cbc?rik=BrotpHDu%2b4zJlg&riu=http%3a%2f%2fwww.vintageandrare.com%2fuploads%2fproducts%2f54195%2f2102826%2foriginal.jpg&ehk=93XXP3L4Au36Mo00soBj8nKz3LFqiv3CS65siLn1TFw%3d&risl=&pid=ImgRaw&r=0"
                alt="EB-3">

            <div class="txtArticulo">
                <h3>Descripción</h3><br>
                <p>Los bajos EB-3 de Gibson son instrumentos icónicos que han sido utilizados por algunos de los
                    bajistas más famosos del mundo, incluyendo a Jack Bruce, Phil Collins, Cliff Burton y muchos más.
                    Son conocidos por su diseño clásico, su sonido versátil y su construcción robusta.</p><br>

                <h3>Historia</h3><br>
                <ul>
                    <li>El bajo EB-3 fue creado a principios de la década de 1960.</li><br>
                    <li>El diseño original del EB-3 se basó en el exitoso bajo ES-335 de Gibson.</li><br>
                    <li>El EB-3 fue lanzado en 1961 y rápidamente se convirtió en un favorito entre los bajistas.</li>
                </ul>
            </div>

        </section>

        <section class="ArticuloExtras">
            <h2>Estructura</h2>
            <img src="https://th.bing.com/th/id/R.ed96c5220d6b3925d3c1a277be33481c?rik=Ymh73mbmkVnthg&pid=ImgRaw&r=0&sres=1&sresct=1"
                alt="EB-3 Layout">
            <div class="txtArticuloExtras">
                <h3>Características</h3><br>
                <ul>
                    <li>Cuerpo: Los EB-3 tienen un cuerpo semi-hueco hecho de arce y caoba. El cuerpo semi-hueco les da
                        un sonido resonante y cálido, con mucho sustain.</li><br>
                    <li>Pastillas: Los EB-3 generalmente vienen con dos pastillas humbucker. Las pastillas humbucker son
                        conocidas por su sonido potente y con mucho cuerpo.</li><br>
                    <li>Puente: Los EB-3 tienen un puente Tune-o-matic con un cordal fijo. Esto les da una excelente
                        estabilidad de afinación.</li><br>
                    <li>Mástil: Los EB-3 tienen un mástil de caoba con un diapasón de palo de rosa. El diapasón de palo
                        de rosa es conocido por su tacto suave y su tono cálido.</li><br>
                </ul>

                <h3>Sonido</h3><br>
                <p>Los bajos EB-3 son conocidos por su sonido cálido, grueso y versátil, con mucho sustain y un ataque
                    definido. Son perfectos para una amplia gama de géneros musicales, incluyendo rock, blues, jazz,
                    funk y country.</p><br>

                <video controls>
                    <source src="/Web_Gibson/Web/videos/EB-3 SG Bass.mp4" type="video/mp4">
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