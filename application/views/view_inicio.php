<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/minstyle.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/hotel.css'); ?>">
	<script src="https://kit.fontawesome.com/e552736195.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/dark-mode-switcher@0.0.1/dist/dark.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/slider.css'); ?>">
	<title>RESERVA</title>
</head>

<body>


	<div class="ms-menu">
		<div class="ms-menu-logo">
			<p>AdvenTours <i class="fas fa-feather-alt"></i></p>

		</div>
		<nav class="ms-menu-link">
			<input type="checkbox" id="ms-menu-toggle">
			<label for="ms-menu-toggle" class="ms-menu-icon"><i class="fa fa-bars"></i></label>
			<ul>
				<a href="<?php echo base_url() ?>index.php/usuariosController/login"><i class="fas fa-sign-out-alt"></i> Iniciar Sesión</a>
			</ul>
		</nav>
	</div>

	<div class="socialLinks" style="background-color: black;">
		<div class="container">

			<div class="row">
				<div class="col-sm-9">
					<span>Contáctanos: 0985631457</span>
					<i class="fab fa-whatsapp"></i>
					<i class="fas fa-phone-volume"></i>
				</div>
				<div class="col-sm-3">
					<span>Síguenos:</span>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="navidad" style="background-image: url('https://i.pinimg.com/originals/c1/44/d0/c144d0908d6e6d64dc838d5d172907f1.jpg'); background-repeat: no-repeat;background-attachment: fixed;  background-size: cover;">
		<div class="navidadPromo">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-8">
						<a href="">
							<div class="ms-article">
								<div class="ms-article-picture ">
									<img id="bannerNavidad" src="<?php echo base_url('images/bannerNavidad.png'); ?>" />
									<div class="ms-article-picture-overlay"></div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="">
							<div class="ms-article">
								<div class="ms-article-picture ">
									<img id="bannerNavidad2" src="<?php echo base_url('images/bannerNavidad2.png'); ?>" />
									<div class="ms-article-picture-overlay"></div>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div id="contenido" style="background-image: url('https://previews.123rf.com/images/mopc95/mopc951605/mopc95160500018/56462073-viajar-sin-patr%C3%B3n-turismo-vacaciones-y-vacaciones-muestras-patr%C3%B3n-textura-fin-se-puede-utilizar-para-fondo.jpg'); background-repeat: no-repeat;background-attachment: fixed;  background-size: cover;">
		<div class="container">
			<div class="row ">
				<div class="col-xl-4">
					<br>
					
					<div class="slideshow-container">
						<div class="mySlides fade">
							<img src="https://img.vixdata.io/pd/jpg-large/es/sites/default/files/imj/L/Los-5-mejores-paisajes-del-mundo-1.jpg" style="width:100%">
						</div>

						<div class="mySlides fade">
							<img src="https://www.dzoom.org.es/wp-content/uploads/2017/07/seebensee-2384369-810x540.jpg" style="width:100%">
						</div>

						<div class="mySlides fade">
							<img src="https://www.japonalternativo.com/wp-content/uploads/2018/10/barrio-de-akihabara-en-tokio.jpg" style="width:100%">
						</div>

						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>

						<br>

						<div style="text-align:center">
							<span class="dot" onclick="currentSlide(1)"></span>
							<span class="dot" onclick="currentSlide(2)"></span>
							<span class="dot" onclick="currentSlide(3)"></span>
						</div>

						<script>
							var slideIndex = 1;
							showSlides(slideIndex);

							function plusSlides(n) {
								showSlides(slideIndex += n);
							}

							function currentSlide(n) {
								showSlides(slideIndex = n);
							}

							function showSlides(n) {
								var i;
								var slides = document.getElementsByClassName("mySlides");
								var dots = document.getElementsByClassName("dot");
								if (n > slides.length) {
									slideIndex = 1
								}
								if (n < 1) {
									slideIndex = slides.length
								}
								for (i = 0; i < slides.length; i++) {
									slides[i].style.display = "none";
								}
								for (i = 0; i < dots.length; i++) {
									dots[i].className = dots[i].className.replace(" active", "");
								}
								slides[slideIndex - 1].style.display = "block";
								dots[slideIndex - 1].className += " active";
							}
						</script>

					</div>
				</div>

				<div class="col-sm-8">
					<a href="">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="bannerNavidad" src="https://i.ytimg.com/vi/mubCNSXHm3o/maxresdefault.jpg" />
								<div class="ms-article-picture-overlay"></div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img src="<?php echo base_url('images/appImagen.png'); ?>" alt="background">
							</div>
						</div>
					</a>
					<div class="ms-card ms-border" style="color:black" ; >
						<div class="ms-card-title" style="color:black" ;>
							<h1 style="color:black" ;>Paga tu viaje y difiere</h1>
						</div>
						<div class="ms-card-content" >
							<p>
								<i class="fab fa-paypal"></i>
								<i class="fab fa-cc-visa"></i>
								<i class="fab fa-cc-mastercard"></i>
								<i class="fab fa-cc-discover"></i>
								<i class="fab fa-cc-diners-club"></i>
							</p>
						</div>
					</div>
				</div>
				<div class="col sm 4">
					<a href="">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img src="<?php echo base_url('images/buzonImagen.png'); ?>" alt="background">
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>








	<div class="footer" style="background-color: black;">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<ul>
						<li style="list-style-type: none;">Somos AdvenTours
							<ul style="list-style-type: none;">
								<li style="list-style-type: none;">Nuestro teléfono</li>
								<li style="list-style-type: none;">Trabaja con nosotros</li>
								<li style="list-style-type: none;">Relación con inversores</li>
								<li style="list-style-type: none;">Sobre AdvenTours</li>
							</ul>
						</li>

					</ul>
				</div>
				<div class="col-sm-3">
					<ul>

						<li style="list-style-type: none;">Confianza en tus compras
							<ul style="list-style-type: none;">
								<li style="list-style-type: none;">Términos y condiciones</li>
								<li style="list-style-type: none;">Política de privacidad</li>
								<li style="list-style-type: none;">Promociones vigentes</li>
								<li style="list-style-type: none;">Conoce las formas de pago</li>
							</ul>
						</li>

					</ul>
				</div>
				<div class="col-sm-3">
					<ul>

						<li style="list-style-type: none;">Potencia tu negocio
							<ul style="list-style-type: none;">
								<li style="list-style-type: none; ">Agrega tu flota</li>
								<li style="list-style-type: none;">Programa de Agencia Afiliadas</li>
								<li style="list-style-type: none;">Programa Red de Afiliados</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-sm-2">
					<br>
					<span>Contáctanos: 0985631457</span>
					<i class="fab fa-whatsapp"></i>
					<i class="fas fa-phone-volume"></i>
				</div>
				<div class="col-sm-1">
					<br>
					<span>Síguenos:</span>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-facebook"></i>
					<i class="fab fa-twitter"></i>
				</div>
			</div>
		</div>
	</div>
</body>

</html>