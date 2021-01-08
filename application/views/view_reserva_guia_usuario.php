<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/minstyle.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('css/vuelo.css'); ?>">
	<script src="https://kit.fontawesome.com/e552736195.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/dark-mode-switcher@0.0.1/dist/dark.min.js"></script>
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
				<a href="<?php echo base_url() ?>index.php/reservaHotelController/index"><i class="fas fa-hotel"> Hotel</i></a>
				<a href="<?php echo base_url() ?>index.php/reservaVueloController/index"><i class="fas fa-plane-departure"></i> Vuelo</a>
				<a href="<?php echo base_url() ?>index.php/reservaAutoController/index"><i class="fas fa-car"></i> Auto</a>
				<a href="<?php echo base_url() ?>index.php/reservaGuiaController/index"> <i class="fas fa-hiking"></i> Guía</a>
				<a href="<?php echo base_url() ?>index.php/usuariosController/logout"><i class="fas fa-sign-out-alt"></i> Log out</a>
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



	<div id="contenido" style="background-image: url('https://www.empleadosvirtuales.com/wp-content/uploads/2018/12/turismo-virtual.jpg'); background-repeat: no-repeat;background-attachment: fixed;  background-size: cover;">

		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-5" style="background-image: url('https://www.milideas.net/wp-content/uploads/color-hueso-titan.jpg');">
					<div class="ms-form-group" style="color:black" ;>
						<br>
						<h1><?php print_r($datos_guia[0]->guiaNombre); ?></h1>
						<br>
						<h5>Ciudad: <?php print_r($datos_guia[0]->ciudadG); ?></h5>
						<br>
						<h6>Idiomas </h6>
						<?php print_r($datos_guia[0]->idiomasG); ?>

					</div>
				</div>
				<div class="col-md-5">
					<div class="ms-article">
						<div class="ms-article-picture ">
							<img id="promocion1" src="https://www.telemundo.com/sites/nbcutelemundo/files/styles/article_cover_image/public/images/promo/article/2017/08/11/mujer-joven-sosteniendo-una-flecha.jpg?itok=7iS7KDC4" />
							<div class="ms-article-picture-overlay"></div>
						</div>
					</div>
					<div class="ms-form-group">
						<form method="post">

							<h6> Fecha Inicio</h6>
							<input type="date" name="fechaInicio" step="1" min="<?php echo date("Y-m-d"); ?>" style="background-color: white; color: black;">
							<h6> Fecha Fin</h6>
							<input type="date" name="fechaFin" step="1" min="<?php echo date("Y-m-d"); ?>" style="background-color: white; color: black;">

							<?php echo form_submit('btn_enviar', 'Guardar') ?><br>
						</form>
					</div>
				</div>

			</div>

		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 ">
					<a href="">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="promocion1" src="<?php echo base_url('images/promocion1.png'); ?>" />
								<div class="ms-article-picture-overlay"></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="promocion2" src="<?php echo base_url('images/promocion2.png'); ?>" />
								<div class="ms-article-picture-overlay"></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="promocion3" src="<?php echo base_url('images/promocion3.png'); ?>" />
								<div class="ms-article-picture-overlay"></div>
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