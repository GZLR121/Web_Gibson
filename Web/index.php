<?php

session_start();

if (!isset($_SESSION['email'])) {
  echo '<script>
  alert("Debes iniciar sesion, Por favor.");
  window.location = "LogIn&SingUp/index.php";
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
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a3012a57e9.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <nav>

    <div class="full-content">
      <div id="nav" class="navbar">
        <div class="logo"><a href="#Home"><img src="images/logo2.png" alt='logo' /></a></div>
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
                  <li><a href="Paginas/Electricas/LesPaul.php">Les Paul</a></li>
                  <li><a href="Paginas/Electricas/Explorer.php">Explorer</a></li>
                  <li><a href="Paginas/Electricas/FlyingV.php">Flying V</a></li>
                </ul>
              </li>
              <li>
                <label for="btn-3" class="show">Bajos</label>
                <a href="#Bajos">Bajos <i class="fa-solid fa-caret-right" style="color: #ffffff;"></i></span></a>
                <input type="checkbox" id="btn-3">
                <ul>
                  <li><a href="Paginas/Bajos/Thunderbird.php">Thunderbird</a></li>
                  <li><a href="Paginas/Bajos/EB-3.php">EB-3</a></li>
                  <li><a href="Paginas/Bajos/Ripper.php">Ripper</a></li>
                </ul>
              </li>
              <li>
                <label for="btn-3" class="show">Acustica</label>
                <a href="#Acusticas">Acustica <i class="fa-solid fa-caret-right" style="color: #ffffff;"></i></span></a>
                <input type="checkbox" id="btn-3">
                <ul>
                  <li><a href="Paginas/Acusticas/J-45.php">J-45</a></li>
                  <li><a href="Paginas/Acusticas/Hummingbird.php">Hummingbird</a></li>
                  <li><a href="Paginas/Acusticas/LG-2.php">LG-2</a></li>
                </ul>
              </li>
              <li>
                <label for="btn-3" class="show">Amplificadores</label>
                <a href="#Amplificadores">Amplis <i class="fa-solid fa-caret-right"
                    style="color: #ffffff;"></i></span></a>
                <input type="checkbox" id="btn-3">
                <ul>
                  <li><a href="Paginas/Amplificadores/GA-40.php">GA-40</a></li>
                  <li><a href="Paginas/Amplificadores/GA-8T.php">GA-8T</a></li>
                  <li><a href="Paginas/Amplificadores/GA-20T.php">GA-20T</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="Shop/index.php">Shop</a></li>
          <li><a href="php/logout_user.php">Log Out</a></li>
        </ul>
  </nav>
  <div class="content">
    <div class="banner_gibson" id="Home"><img src="images/Gibson_Big_Banner_Collection.jpg" alt="" />
    </div>
    <br>
    <div id="AcercaDe" class="Acercade">
      <h1>ACERCA DE</h1>
      <br>
      <h2>¡Soy Gibson! Una leyenda en la música</h2><br>
      <h3>Más de 130 años de pasión por la música</h3><br>
      <p>Desde mi nacimiento en 1894, he sido la voz de artistas icónicos y he impulsado la evolución de la
        música a través de mis instrumentos excepcionales. Soy Gibson, la marca de guitarras más legendaria del mundo.
      </p><br>
      <p>Mis guitarras han sido tocadas por leyendas como B.B. King, Eric Clapton, Jimmy Page, y Slash, y han sido
        utilizadas para crear algunos de los momentos más memorables de la historia de la música.</p><br>
      <img src="images/jimmy-page-eric-clapton.jpg" alt="Jimmy Page & Eric Clapton" />
      <br>
      <p>Pero no solo soy una marca de guitarras. Soy una comunidad de músicos, artistas y amantes de la música
        que comparten la pasión por el sonido y la creatividad.</p><br>
      <img src="images/gibson-custom-shop.png" alt="Gibson Guitars" />
      <p>Ofrezco una amplia gama de guitarras para todos los niveles de experiencia, desde principiantes hasta
        profesionales.</p>
      <p>También tengo una amplia gama de accesorios, como amplificadores, pedales y estuches.</p>
      <p>Si estás buscando una guitarra que te inspire a crear música increíble, Gibson es la marca para ti.</p>

    </div>

    <div id="Categorias" class="Categorias">
      <h1>CATEGORIAS</h1><br>

      <div class="title-cards" id="Guitarras">
        <h2>GUITARRAS</h2>
      </div>
      <p>Gibson: Sinónimo de innovación, calidad y sonido legendario, desde 1932 hemos estado a
        la vanguardia de las guitarras eléctricas, inspirando a generaciones de músicos a lo largo de
        todos los géneros.</p><br>
      <p>Nuestras guitarras eléctricas no solo son instrumentos, son obras de arte, elaboradas
        con maderas nobles y componentes de primera clase, ensambladas a mano por expertos luthiers
        que capturan la esencia del sonido americano.</p><br>
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
            <a href="Paginas/Electricas/LesPaul.php">Leer Más</a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="https://th.bing.com/th/id/R.3464ecc57e961f87661f3cb53d642ce0?rik=HvZCvp%2bOXm6aIQ&pid=ImgRaw&r=0"
              alt="Explorer">
          </figure>
          <div class="contenido-card">
            <h3>Explorer</h3>
            <p>Una guitarra con un aspecto futurista y un sonido único, perfecta
              para músicos que buscan destacarse. Su puente Tune-O-Matic y sus pastillas
              humbucker brindan una potencia y sustain excepcionales.</p>
            <a href="Paginas/Electricas/Explorer.php">Leer Más</a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img
              src="https://th.bing.com/th/id/R.622073f4d236a4ad95c838d1ed2ae521?rik=ChoeDDm4KCjHVw&riu=http%3a%2f%2fwww.ginoguitars.com%2fimages%2fproducts%2fGibson-Custom-1959-Flying-V-Mahogany-VOS-410-NA_01.jpg&ehk=bHn4nfmca1f6nMKrbYX4uhVMeSL6bCsegy7j%2fM9%2fpe8%3d&risl=&pid=ImgRaw&r=0"
              alt="Flying V">
          </figure>
          <div class="contenido-card">
            <h3>Flying V</h3>
            <p>Un ícono del rock and roll, la Flying V es conocida por su
              diseño audaz y su sonido agresivo. Perfecta para músicos de heavy metal
              y hard rock que buscan cortar la mezcla con un tono potente y definido.</p>
            <a href="Paginas/Electricas/FlyingV.php">Leer Más</a>
          </div>
        </div>
      </div>

      <div class="title-cards" id="Bajos">
        <h2>BAJOS</h2>
      </div>
      <p>Gibson: Desde 1935, hemos estado electrficando el escenario con bajos que
        definen el sonido del rock, el funk, el soul y el jazz. Nuestros bajos no
        solo son instrumentos, son leyendas, utilizados por algunos de los bajistas
        más influyentes de la historia.</p><br>
      <div class="container-card">

        <div class="card">
          <figure>
            <img
              src="https://cdn.shopify.com/s/files/1/0002/7882/2974/products/IMG_6520_4a841e86-e97a-4c72-9436-5d1decbc16ab.jpg?v=1614875625"
              alt="Thunderbird">
          </figure>
          <div class=" contenido-card">
            <h3>Thunderbird</h3>
            <p>Un bajo icónico con un sonido potente y resonante, perfecto
              para cortar la mezcla y hacer temblar el escenario. Su cuerpo robusto y su
              mástil cómodo lo convierten en un instrumento ideal para largas sesiones de
              interpretación.</p>
            <a href="Paginas/Bajos/Thunderbird.php">Leer Más</a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="https://www.vintageandrare.com/uploads/products/54195/2102827/original.jpg" alt="EB-3">
          </figure>
          <div class="contenido-card">
            <h3>EB-3</h3>
            <p>Con su diseño elegante y moderno, el bajo SG ofrece un sonido brillante
              y articulado, perfecto para géneros como el blues, el rock y el metal.
              Su cuerpo liviano y cómodo lo convierte en una guitarra ideal para largas
              sesiones de interpretación.</p>
            <a href="Paginas/Bajos/EB-3.php">Leer Más</a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="https://www.vintageandrare.com/uploads/products/49419/1898222/original.jpg?1568817547"
              alt="Ripper">
          </figure>
          <div class="contenido-card">
            <h3>Ripper</h3>
            <p>Un bajo versátil con un sonido único, perfecto para músicos
              que buscan experimentar. Su puente Tune-O-Matic y sus pastillas humbucker
              brindan una potencia y sustain excepcionales.</p>
            <a href="Paginas/Bajos/Ripper.php">Leer Más</a>
          </div>
        </div>
      </div>

      <div class="title-cards" id="Acusticas">
        <h2>ACUSTICAS</h2>

      </div>
      <p>En Gibson, nos enorgullecemos de ser pioneros en la creación de guitarras acústicas
        que han cautivado a generaciones de músicos. Desde nuestras icónicas J-45 hasta las
        versátiles Songwriter, cada instrumento está elaborado con pasión y dedicación,
        utilizando maderas de la más alta calidad y técnicas de construcción artesanal
        perfeccionadas durante más de un siglo.</p><br>
      <div class="container-card">

        <div class="card">
          <figure>
            <img src="https://www.ginoguitars.com/images/products/Gibson-60s-J-45-Original-3132-WR_01.jpg" alt="J-45">
          </figure>
          <div class=" contenido-card">
            <h3>J-45</h3>
            <p>Una guitarra acústica de alta calidad que ofrece un sonido rico y resonante.
              Está hecha con materiales de primera calidad, incluyendo una tapa de abeto Sitka
              macizo, un fondo y aros de palisandro indio macizo, y un mástil de caoba de una
              pieza con diapasón de palisandro indio.</p>
            <a href="Paginas/Acusticas/J-45.php">Leer Más</a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img
              src="https://www.ginoguitars.com/libimg2/products/2160x1440/0/90/Gibson-Hummingbird-Standard-2015-VS_01.jpg"
              alt="Hummingbird Standard Vintage">
          </figure>
          <div class="contenido-card">
            <h3>Hummingbird</h3>
            <p>Una guitarra acústica icónica que ha sido utilizada
              por algunos de los guitarristas más famosos del mundo. Está hecha con materiales
              de primera calidad, incluyendo una tapa de abeto Sitka macizo, un fondo y aros de
              palisandro indio macizo, y un mástil de caoba de una pieza con diapasón de palisandro
              indio.</p>
            <a href="Paginas/Acusticas/Hummingbird.php">Leer Más</a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="https://th.bing.com/th/id/OIP.ln8WGFrAI27OC43mGyapYwHaE8?rs=1&pid=ImgDetMain"
              alt="LG-2 Antique Natural">
          </figure>
          <div class="contenido-card">
            <h3>LG-2</h3>
            <p>Una guitarra acústica de estilo vintage que ofrece un sonido
              cálido y clásico. Está hecha con materiales de primera calidad, incluyendo una tapa
              de abeto Sitka macizo, un fondo y aros de arce macizo, y un mástil de caoba de una
              pieza con diapasón de arce.</p>
            <a href="Paginas/Acusticas/LG-2.php">Leer Más</a>
          </div>
        </div>
      </div>


      <div class="title-cards" id="Amplificadores">
        <h2>AMPLIFICADORES</h2>

      </div>
      <h3>Desde las cuerdas hasta los altavoces, nuestra pasión por la música lo impregna todo.</h3><br>

      <p>En Gibson, somos más que guitarras icónicas. Somos pioneros del sonido, artesanos de la amplificación y
        guardianes de un legado musical que resuena a través de las generaciones.</p><br>
      <div class="container-card">

        <div class="card">
          <figure>
            <img
              src="https://th.bing.com/th/id/R.a092c654a5d99a53d8ef0fa5b9e9ea85?rik=ZegFbb%2fZxie0Eg&riu=http%3a%2f%2fwww.vintageandrare.com%2fuploads%2fproducts%2f35337%2f1028860%2foriginal.jpg&ehk=iQo5HZB89ThgZeJA4EOrfDDhm5P5NwIl9lwUXokzJiY%3d&risl=&pid=ImgRaw&r=0"
              alt="GA-40 Falcon">
          </figure>
          <div class=" contenido-card">
            <h3>GA-40</h3>
            <p>Un renacimiento del clásico GA-19RVT, con 2x12", reverb, trémolo y ese tono Gibson cálido y detallado.
            </p>
            <a href="Paginas/Amplificadores/GA-40.php">Leer Más</a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img
              src="https://th.bing.com/th/id/R.28137a771a8203a7e926255803d9c844?rik=504IDazNhk%2bwKQ&riu=http%3a%2f%2fwww.vintageandrare.com%2fuploads%2fproducts%2f50933%2f1954798%2foriginal.jpg&ehk=weLzQg6OXF3YYPvOxyd8kRoaaR%2fBMo5ZvPGDHewf%2bjo%3d&risl=&pid=ImgRaw&r=0"
              alt="GA-8T Discoverer">
          </figure>
          <div class="contenido-card">
            <h3>GA-8T</h3>
            <p>Un tesoro vintage de 1x8" de los años 60, perfecto para blues, country y rockabilly, con un circuito 5F1
              simple y efectivo y un altavoz Alnico original de 8".</p>
            <a href="Paginas/Amplificadores/GA-8T.php">Leer Más</a>
          </div>
        </div>
        <div class="card">
          <figure>
            <img
              src="https://th.bing.com/th/id/R.c5a3553480331751e299545be88a0cce?rik=L77%2bSvNoJrrUXg&riu=http%3a%2f%2fwww.vintageandrare.com%2fuploads%2fproducts%2f35387%2f1508226%2foriginal.jpg&ehk=sK0jFNQUgCECTsjZb4jltKxBo4fqhoASOktRBvzQFH4%3d&risl=&pid=ImgRaw&r=0"
              alt="GA-20T Maestro">
          </figure>
          <div class="contenido-card">
            <h3>GA-20T</h3>
            <p>Un combo compacto de 1x10" con overdrive incorporado, ideal para practicar y tocar en lugares pequeños,
              con un altavoz Jensen C-10N y un sonido versátil.</p>
            <a href="Paginas/Amplificadores/GA-20T.php">Leer Más</a>
          </div>
        </div>
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