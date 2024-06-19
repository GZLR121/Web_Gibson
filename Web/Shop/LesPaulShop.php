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
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Gibson Les Paul</title>
	<link rel="stylesheet" href="styles.css" />
</head>

<body>
<nav>

<div class="full-content">
	<div id="nav" class="navbar">
		<div class="logo"><a href="../index.php#Home"><img src="images/logo2.png"
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
			<li><a href="index.php">Shop</a></li>
			<li><a href="../php/logout_user.php">Log Out</a></li>
		</ul>
</nav>
	<div class="container-title">Gibson Les Paul</div>

	<main>

		<div class="container-carousel">
			<div class="carruseles" id="slider">
				<section class="slider-section">
					<img src="images/shop/paul1.jpg">
				</section>
				<section class="slider-section">
					<img src="images/shop/paul2.jpg">
				</section>
				<section class="slider-section">
					<img src="images/shop/paul3.jpg">
				</section>
				<section class="slider-section">
					<img src="images/shop/paul4.jpg">
				</section>
				<section class="slider-section">
					<img src="images/shop/paul5.jpg">
				</section>

			</div>
			<div class="btn-left"><i class="fa-solid fa-square-caret-left fa-xl"></i></i></div>
			<div class="btn-right"><i class="fa-solid fa-square-caret-right fa-xl"></i></div>
		</div>
		<div class="container-info-product">
			<div class="container-price">
				<span>$45,000.00</span>
			</div>

			<form class="m-5" id="Compra" action="../php/compraLesPaul.php" method="POST">
				<div class="container-details-product">
					<div class="form-group">
						<label for="colour">Color</label>
						<select name="colour" id="colour">
							<option disabled selected value="">
								Escoge una opción
							</option>
							<option value="Sunburst">Sunburst</option>
							<option value="Ebony">Ebony</option>
							<option value="Classic_White">Classic White</option>
						</select>
					</div>
					<div class="form-group">
						<label for="size">Orientación</label>
						<select name="size" id="size">
							<option disabled selected value="">
								Escoge una opción
							</option>
							<option value="Diestra">Diestra</option>
							<option value="Zurda">Zurda</option>
						</select>
					</div>
				</div>

				<div class="container-add-cart">

					<button class="btn-add-to-cart">
						<i class="fa-solid fa-shop"></i>
						Comprar
					</button>
				</div>
			</form>

			<div class="container-description">
				<div class="title-description">
					<h4>Descripción</h4>
				</div>
				<div class="text-description">
					<p>
						Esta belleza atemporal cuenta con un cuerpo de caoba maciza con tapa de arce tallado, que ofrece
						una resonancia cálida y rica con agudos nítidos y un sustain excepcional. Su mástil de caoba con
						diapasón de palisandro proporciona una sensación de comodidad y una respuesta rápida, mientras
						que sus dos pastillas humbucker Gibson Burstbucker brindan una amplia gama de tonos, desde
						dulces y limpios hasta gruesos y distorsionados.
					</p>
				</div>
			</div>

			<div class="container-description">
				<div class="title-description">
					<h4>Sonido</h4>
				</div>
				<div class="text-description">
					<audio controls>
						<source src="Audios/les paul.m4a"
							type="audio/mpeg">
						Tu navegador no soporta la etiqueta de audio.
					</audio>

				</div>
			</div>


		</div>
	</main>

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

	<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>

</html>