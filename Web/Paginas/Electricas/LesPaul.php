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
            <h1>Gibson Les Paul</h1>
            <img src="https://www.gitarrentotal.ch/wp-content/uploads/2020/10/GibsonLesPaulStandard50sHeritageCherrySunburst-1-scaled.jpg"
                alt="Les Paul">

            <div class="txtArticulo">
                <h3>Descripción</h3><br>
                <p>Las guitarras Les Paul de Gibson son instrumentos legendarios que han sido utilizados por algunos de
                    los músicos más famosos del mundo, incluyendo a Jimmy Page, Slash, Eric Clapton y muchos más. Son
                    conocidas por su sonido cálido y grueso, su sustain increíble y su versatilidad.</p><br>

                <h3>Historia</h3><br>
                <ul>
                    <li>La Les Paul fue creada a principios de la década de 1950 por Les Paul, un guitarrista e
                        inventor, y Gibson, un fabricante de guitarras.</li><br>
                    <li>El diseño original de Les Paul era diferente al de la Les Paul que conocemos hoy en día. Gibson
                        modificó el diseño y lanzó la Les Paul Standard en 1952.</li><br>
                    <li>La Les Paul Standard fue un éxito inmediato entre los guitarristas, y se convirtió en una de las
                        guitarras eléctricas más populares de todos los tiempos.</li>
                </ul>
            </div>

        </section>

        <section class="ArticuloExtras">
            <h2>Estructura</h2>
            <img src="https://www.blackdogmusic.co.uk/wp-content/uploads/2019/12/P038-scaled.jpg" alt="Les Paul">
            <div class="txtArticuloExtras">
                <h3>Características</h3><br>
                <ul>
                    <li>Cuerpo: Las Les Paul tienen un cuerpo sólido hecho de caoba y arce. Esto les da un sonido cálido
                        y grueso con mucho sustain.</li><br>
                    <li>Pastillas: Las Les Paul generalmente vienen con dos pastillas humbucker. Las pastillas humbucker
                        son conocidas por su sonido potente y con mucho cuerpo.</li><br>
                    <li>Puente: Las Les Paul tienen un puente Tune-o-matic con un cordal fijo. Esto les da una excelente
                        estabilidad de afinación.</li><br>
                    <li>Mástil: Las Les Paul tienen un mástil de caoba con un diapasón de palo de rosa. El diapasón de
                        palo de rosa es conocido por su tacto suave y su tono cálido.</li><br>
                </ul>

                <h3>Sonido</h3><br>
                <p>Las guitarras Les Paul son conocidas por su sonido cálido y grueso, su sustain increíble y su
                    versatilidad. Son perfectas para una amplia gama de géneros musicales, incluyendo rock, blues, jazz
                    y country.</p><br>

                <video controls>
                    <source src="../videos/Les Paul - How does it sound.mp4" type="video/mp4">
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