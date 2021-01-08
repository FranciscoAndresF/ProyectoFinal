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

	<div id="contenido" style="background-image: url('https://media.staticontent.com/media/pictures/ac250e36-5700-4b60-8dac-934a961ff431'); background-repeat: no-repeat;background-attachment: fixed;  background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="<?php echo base_url() ?>index.php/reservaHotelController/reservar/<?php echo $listado[0]->hotelID ?>">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="imghotel" src="https://static11.com-hotel.com/uploads/hotel/15891/photo/hotel-sheraton-quito_15404557453.jpeg" alt="background">
								<div class="ms-article-picture-overlay"></div>
								<div class="ms-article-picture-title">
									<a href="<?php echo base_url() ?>index.php/reservaHotelController/reservar/<?php echo $listado[0]->hotelID ?>"><?php print_r($listado[0]->hotelNombre) ?></a>
									<a href=""> $<?php print_r($listado[0]->hotelPrecioN) ?></a>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="<?php echo base_url() ?>index.php/reservaHotelController/reservar/<?php echo $listado[1]->hotelID ?>">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="imghotel" src="https://thumbnails.trvl-media.com/03f6gFbEuuypaEjYE7IJjoePbv4=/773x530/smart/filters:quality(60)/images.trvl-media.com/hotels/35000000/34770000/34768100/34768040/beb5be9c_z.jpg" alt="background">
								<div class="ms-article-picture-overlay"></div>
								<div class="ms-article-picture-title">
									<a href="<?php echo base_url() ?>index.php/reservaHotelController/reservar/<?php echo $listado[1]->hotelID ?>"><?php print_r($listado[1]->hotelNombre) ?></a>
									<a href=""> $<?php print_r($listado[1]->hotelPrecioN) ?></a>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="<?php echo base_url() ?>index.php/reservaHotelController/reservar/<?php echo $listado[2]->hotelID ?>">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="imghotel" src="https://cf.bstatic.com/images/hotel/max1024x768/175/175262620.jpg" alt="background" />
								<div class="ms-article-picture-overlay"></div>
								<div class="ms-article-picture-title">
									<a href="<?php echo base_url() ?>index.php/reservaHotelController/reservar/<?php echo $listado[2]->hotelID ?>"><?php print_r($listado[2]->hotelNombre) ?></a>
									<a href=""> $<?php print_r($listado[2]->hotelPrecioN) ?></a>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-4 ">
					<a href="<?php echo base_url() ?>index.php/reservaHotelController/reservar/<?php echo $listado[3]->hotelID ?>">
						<div class="ms-article">
							<div class="ms-article-picture ">
								<img id="imghotel" src="https://cf.bstatic.com/images/hotel/max1280x900/186/186862659.jpg" alt="background">
								<div class="ms-article-picture-overlay"></div>
								<div class="ms-article-picture-title">
									<a href="<?php echo base_url() ?>index.php/reservaHotelController/reservar/<?php echo $listado[3]->hotelID ?>"><?php print_r($listado[3]->hotelNombre) ?></a>
									<a href=""> $<?php print_r($listado[3]->hotelPrecioN) ?></a>
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