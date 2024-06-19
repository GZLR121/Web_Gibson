<?php

session_start();

if (!isset($_SESSION['email'])) {
    echo '<script>
  alert("Debes iniciar sesion, Por favor.");
  window.location = "../LogIn&SingUp/index.php";
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
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a3012a57e9.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav>

        <div class="full-content">
            <div id="nav" class="navbar">
                <div class="logo"><a href="../index.php#Home"><img src="../images/logo2.png"
                            alt='logo' /></a></div>
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
                                <a href="../index.php#Guitarras">Guitarras <i
                                        class="fa-solid fa-caret-right" style="color: #ffffff;"></i></span></a>
                                <ul>
                                    <li><a href="../Paginas/Electricas/LesPaul.php">Les Paul</a></li>
                                    <li><a href="../Paginas/Electricas/Explorer.php">Explorer</a></li>
                                    <li><a href="../Paginas/Electricas/FlyingV.php">Flying V</a></li>
                                </ul>
                            </li>
                            <li>
                                <label for="btn-3" class="show">Bajos</label>
                                <a href="#Bajos">Bajos <i class="fa-solid fa-caret-right"
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
                                <a href="#Acusticas">Acustica <i class="fa-solid fa-caret-right"
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
                                <a href="#Amplificadores">Amplis <i class="fa-solid fa-caret-right"
                                        style="color: #ffffff;"></i></span></a>
                                <input type="checkbox" id="btn-3">
                                <ul>
                                    <li><a href="../Paginas/Amplificadores/GA-40.php">GA-40</a></li>
                                    <li><a href="../Paginas/Amplificadores/GA-8T.php">GA-8T</a></li>
                                    <li><a href="../Paginas/Amplificadores/GA-20T.php">GA-20T</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="../Shop/index.php">Shop</a></li>
                    <li><a href="../php/logout_user.php">Log Out</a></li>
                </ul>
    </nav>
    <div class="content">

        <div id="Categorias" class="Categorias">

            <div class="title-cards" id="Productos">
                <h1>SHOP</h1><br>

                <h2>Productos en Venta</h2>
            </div>
            <p>Gibson: Sinónimo de innovación, calidad y sonido legendario, desde 1932 hemos estado a
                la vanguardia de instrumentos, inspirando a generaciones de músicos a lo largo de
                todos los géneros.</p><br>
            <div class="container-card">

                <div class="card">
                    <figure>
                        <img src="https://th.bing.com/th/id/R.06959431511309bb945fe6877de8216a?rik=7tkAuo59IB%2fzMw&pid=ImgRaw&r=0"
                            alt="Les Paul">
                    </figure>
                    <div class=" contenido-card">
                        <h3>Les Paul</h3>
                        <p>La reina indiscutible del rock and roll, famosa por su sustain
                            incomparable, versatilidad y sonido grueso y potente. Desde Jimmy Page hasta
                            Slash, la Les Paul ha sido la guitarra predilecta de innumerables leyendas.</p>
                        <a href="LesPaulShop.php">Comprar</a>
                    </div>
                </div>

                <div class="card">
                    <figure>
                        <img src="https://www.ginoguitars.com/libimg2/products/2160x1440/0/90/Gibson-Hummingbird-Standard-2015-VS_01.jpg"
                            alt="Hummingbird Standard Vintage">
                    </figure>
                    <div class="contenido-card">
                        <h3>Hummingbird</h3>
                        <p>Una guitarra acústica icónica que ha sido utilizada
                            por algunos de los guitarristas más famosos del mundo. Está hecha con materiales
                            de primera calidad, incluyendo una tapa de abeto Sitka macizo, un fondo y aros de
                            palisandro indio macizo, y un mástil de caoba de una pieza con diapasón de palisandro
                            indio.</p>
                        <a href="HummingbirdShop.php">Comprar</a>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <div class="Pie_index">
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
</body>

</html>