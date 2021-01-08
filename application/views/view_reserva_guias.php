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
	<div class="navidad" style="background-image: url('https://i.pinimg.com/originals/c1/44/d0/c144d0908d6e6d64dc838d5d172907f1.jpg'); background-repeat: no-repeat;background-attachment: fixed;  background-size: cover;">
		<div class="navidadPromo">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-8">
						<a href="">
							<div class="ms-article">
								<div class="ms-article-picture ">
									<img id="bannerNavidad" src="https://www.entornoturistico.com/wp-content/uploads/2020/02/Gui%CC%81a-turi%CC%81stico-joven-1280x720.jpg" alt="background">
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

	<div id="contenido" style="background-image: url('https://media.staticontent.com/media/pictures/ac250e36-5700-4b60-8dac-934a961ff431'); background-repeat: no-repeat;background-attachment: fixed;  background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="<?php echo base_url() ?>index.php/reservaGuiaController/reservar/<?php echo $listado[0]->guiaID ?>">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="imghotel" src="data:image/png;base64,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" alt="background">
								<div class="ms-article-picture-overlay"></div>
								<div class="ms-article-picture-title">
									<a href="<?php echo base_url() ?>index.php/reservaGuiaController/reservar/<?php echo $listado[0]->guiaID ?>"><?php print_r($listado[0]->ciudadG) ?></a>
									<br>
									<a href="<?php echo base_url() ?>index.php/reservaGuiaController/reservar/<?php echo $listado[0]->guiaID ?>"><?php print_r($listado[0]->idiomasG) ?></a>

								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="<?php echo base_url() ?>index.php/reservaGuiaController/reservar/<?php echo $listado[1]->guiaID ?>">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="imghotel" src="data:image/png;base64,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" alt="background">
								<div class="ms-article-picture-overlay"></div>
								<div class="ms-article-picture-title">
									<a href="<?php echo base_url() ?>index.php/reservaGuiaController/reservar/<?php echo $listado[1]->guiaID ?>"><?php print_r($listado[1]->ciudadG) ?></a>
									<br>
									<a href="<?php echo base_url() ?>index.php/reservaGuiaController/reservar/<?php echo $listado[1]->guiaID ?>"><?php print_r($listado[1]->idiomasG) ?></a>

								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="<?php echo base_url() ?>index.php/reservaGuiaController/reservar/<?php echo $listado[2]->guiaID ?>">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="imghotel" src="data:image/png;base64,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" alt="background" />
								<div class="ms-article-picture-overlay"></div>
								<div class="ms-article-picture-title">
									<a href="<?php echo base_url() ?>index.php/reservaGuiaController/reservar/<?php echo $listado[2]->guiaID ?>"><?php print_r($listado[2]->ciudadG) ?></a>
									<br>
									<a href="<?php echo base_url() ?>index.php/reservaGuiaController/reservar/<?php echo $listado[2]->guiaID ?>"><?php print_r($listado[2]->idiomasG) ?></a>

								</div>
							</div>
						</div>
					</a>
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