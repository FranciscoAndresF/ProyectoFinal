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
	<title>RESERVA</title>
	<style>
		.accordion {
			background-color: #eee;
			color: #444;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}

		.active,
		.accordion:hover {
			background-color: #ccc;
		}

		.accordion:after {
			content: '\002B';
			color: #777;
			font-weight: bold;
			float: right;
			margin-left: 5px;
		}

		.active:after {
			content: "\2212";
		}

		.panel {
			padding: 0 18px;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}

		.textoAcordion {
			position: relative;
			top: 15px;
			left: 15px;
			width: 465px;

		}
	</style>
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
				<a href="<?php echo base_url() ?>index.php/Main/usuarios"><i class="fas fa-sign-out-alt"></i> Regresar</a>
			</ul>
		</nav>
	</div>

	<div class="contenido" style="background-image: url('https://www.milideas.net/wp-content/uploads/color-hueso-titan.jpg'); background-repeat: no-repeat;background-attachment: fixed;  background-size: cover;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-5">
					<div class="textoAcordion">

						<button class="accordion">Enero</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio ingresos de Guias:</span>
								<span> <?php print_r($listado['1']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['1']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['1']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['1']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['1']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['1']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['1']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['1']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['1']['top']); ?></span>



							</p>
						</div>

						<button class="accordion">Febrero</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio ingresos de Guias:</span>
								<span> <?php print_r($listado['2']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['2']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['2']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['2']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['2']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['2']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['2']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['2']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['2']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Marzo</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['3']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['3']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['3']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['3']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['3']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['3']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['3']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['3']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['3']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Abril</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['4']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['4']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['4']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['4']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['4']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['4']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['4']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['4']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['4']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Mayo</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['5']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['5']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['5']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['5']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['5']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['5']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['5']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['5']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['5']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Junio</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['6']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['6']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['6']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['6']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['6']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['6']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['6']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['6']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['6']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Julio</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['7']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['7']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['7']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['7']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['7']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['7']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['7']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['7']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['7']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Agosto</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['8']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['8']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['8']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['8']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['8']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['8']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['8']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['8']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['8']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Septiembre</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['9']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['9']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['9']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['9']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['9']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['9']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['9']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['9']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['9']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Octubre</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['10']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['10']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['10']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['10']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['10']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['10']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['10']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['10']['autos']['dato2']); ?></span>




								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['10']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Noviembre</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['11']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['11']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['11']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['11']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['11']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['11']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['11']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['11']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['11']['top']); ?></span>
							</p>
						</div>

						<button class="accordion">Diciembre</button>
						<div class="panel">
							<p>
								<br>
								<span> Promedio de ingresos de Guias:</span>
								<span> <?php print_r($listado['12']['guias']['dato1']); ?></span>
								<br>
								<span> Guía con mas reservas:</span>
								<span> <?php print_r($listado['12']['guias']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Hoteles:</span>
								<span> <?php print_r($listado['12']['hoteles']['dato1']); ?></span>
								<br>
								<span> Hotel con mas reservas:</span>
								<span> <?php print_r($listado['12']['hoteles']['dato2']); ?></span>
								<br>
								<br>


								<span> Promedio ingresos de Vuelos:</span>
								<span> <?php print_r($listado['12']['vuelos']['dato1']); ?></span>
								<br>
								<span> Aerolinea con mas reservas:</span>
								<span> <?php print_r($listado['12']['vuelos']['dato2']); ?></span>
								<br>
								<br>

								<span> Promedio ingresos de Autos:</span>
								<span> <?php print_r($listado['12']['autos']['dato1']); ?></span>
								<br>
								<span> Modelo de auto más rentado:</span>
								<span> <?php print_r($listado['12']['autos']['dato2']); ?></span>
								<br>
								<br>
								<br>
								<span> Area de negocio con más ganancias del mes:</span>
								<span> <?php print_r($listado['12']['top']); ?></span>
							</p>
						</div>

					</div>




				</div>
			</div>

		</div>
	</div>



	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight) {
					panel.style.maxHeight = null;
				} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
				}
			});
		}
	</script>


</body>

</html>