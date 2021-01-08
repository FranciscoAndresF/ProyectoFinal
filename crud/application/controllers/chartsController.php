<?php
defined('BASEPATH') or exit('No direct script access allowed');

class chartsController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url', 'form');
		$this->load->model('m_charts');
		$this->load->model('m_guias');
		$this->load->model('m_hoteles');
		$this->load->model('m_autos');
		$this->load->model('m_aerolineas');
	}

	public function index()
	{
		if ($this->session->userdata('id') != '7') {
			redirect('/usuariosController/login');
		} else {
			if ($this->input->post()) {
				$año = $this->input->post("año");
				$x = 1;
				$lin0 = "-0";
				$lin = "-";
				$resultado['listado'] = array();
				while ($x < 13) {
					if ($x < 10) {
						$mes = $lin0 . $x;
						$like = $año . $mes;
						$guiaP = $this->m_charts->getGuiaP("$like");
						if (empty($guiaP[0]->Promedio)) {
							$guia1 = array(
								"dato1" => "No existen datos para este mes",
								"dato2" => "No existen datos para este mes",
							);
							$Tguia1 = "0";
						} else {
							$guiaC = $this->m_charts->getGuiaCount("$like");
							$Tguia1 = $guiaC[0]->total;
							$guiaM = $this->m_charts->getGuiaMax("$like");
							$dataGuia = $this->m_guias->get_by_id($guiaM[0]->guiaID);

							$guia1 = array(
								"dato1" => $guiaP[0]->Promedio,
								"dato2" => $dataGuia[0]->guiaNombre,
							);
						}

						//ENERO HOTELES

						$mes = $lin0 . $x;
						$like = $año . $mes;
						$hotelP = $this->m_charts->getHotelP("$like");
						if (empty($hotelP[0]->Promedio)) {
							$hotel1 = array(
								"dato1" => "No existen datos para este mes",
								"dato2" => "No existen datos para este mes",
							);
							$Thotel1 = "0";
						} else {
							$hotelC = $this->m_charts->getHotelCount("$like");
							$Thotel1 = $hotelC[0]->totalHotel;
							$hotelM = $this->m_charts->getHotelMax("$like");
							$dataHotel = $this->m_hoteles->get_by_id($hotelM[0]->hotelID);

							$hotel1 = array(
								"dato1" => $hotelP[0]->Promedio,
								"dato2" => $dataHotel[0]->hotelNombre,
							);
						}

						//ENERO VUELOS

						$mes = $lin0 . $x;
						$like = $año . $mes;
						$vueloP = $this->m_charts->getVueloP("$like");
						if (empty($vueloP[0]->Promedio)) {
							$vuelo1 = array(
								"dato1" => "No existen datos para este mes",
								"dato2" => "No existen datos para este mes",
							);
							$Tvuelo1 = "0";
						} else {
							$vueloC = $this->m_charts->getVueloCount("$like");
							$Tvuelo1 = $vueloC[0]->totalVuelo;
							$vueloM = $this->m_charts->getVueloMax("$like");
							$dataVuelo = $this->m_aerolineas->get_by_id($vueloM[0]->aerolineaID);

							$vuelo1 = array(
								"dato1" => $vueloP[0]->Promedio,
								"dato2" => $dataVuelo[0]->aeroNombre,
							);
						}

						//ENERO AUTOS

						$mes = $lin0 . $x;
						$like = $año . $mes;
						$autoP = $this->m_charts->getAutoP("$like");
						if (empty($autoP[0]->Promedio)) {
							$auto1 = array(
								"dato1" => "No existen datos para este mes",
								"dato2" => "No existen datos para este mes",
							);
							$Tauto1 = "0";
						} else {
							$autoC = $this->m_charts->getAutoCount("$like");
							$Tauto1 = $autoC[0]->totalAuto;
							$autoM = $this->m_charts->getAutoMax("$like");
							$dataAuto = $this->m_autos->get_by_id($autoM[0]->autoID);

							$auto1 = array(
								"dato1" => $autoP[0]->Promedio,
								"dato2" => $dataAuto[0]->autoModelo,
							);
						}




						$comp1 = array(
							"Reserva de Guias" => $Tguia1,
							"Reserva de Hoteles" => $Thotel1,
							"Reserva de Vuelos" => $Tvuelo1,
							"Reserva de Auto" => $Tauto1,
							"No hay datos para este mes" => "1", #CAMBIOOOOOOOOOOOOOOOOOO
						);

						$mesdata = array(
							"guias" => $guia1,
							"hoteles" => $hotel1,
							"vuelos" => $vuelo1,
							"autos" => $auto1,
							"top" => array_keys($comp1, max($comp1))[0],
						);



						$resultado['listado'] += [$x => $mesdata]; ///////////////////////////////////////////////////////////////////////////

						$x++;
					} else {
						$mes = $lin . $x;
						$like = $año . $mes;
						$guiaP = $this->m_charts->getGuiaP("$like");
						if (empty($guiaP[0]->Promedio)) {
							$guia1 = array(
								"dato1" => "No existen datos para este mes",
								"dato2" => "No existen datos para este mes",
							);
							$Tguia1 = "0";
						} else {
							$guiaC = $this->m_charts->getGuiaCount("$like");
							$Tguia1 = $guiaC[0]->total;
							$guiaM = $this->m_charts->getGuiaMax("$like");
							$dataGuia = $this->m_guias->get_by_id($guiaM[0]->guiaID);

							$guia1 = array(
								"dato1" => $guiaP[0]->Promedio,
								"dato2" => $dataGuia[0]->guiaNombre,
							);
						}

						//ENERO HOTELES

						$mes = $lin . $x;
						$like = $año . $mes;
						$hotelP = $this->m_charts->getHotelP("$like");
						if (empty($hotelP[0]->Promedio)) {
							$hotel1 = array(
								"dato1" => "No existen datos para este mes",
								"dato2" => "No existen datos para este mes",
							);
							$Thotel1 = "0";
						} else {
							$hotelC = $this->m_charts->getHotelCount("$like");
							$Thotel1 = $hotelC[0]->totalHotel;
							$hotelM = $this->m_charts->getHotelMax("$like");
							$dataHotel = $this->m_hoteles->get_by_id($hotelM[0]->hotelID);

							$hotel1 = array(
								"dato1" => $hotelP[0]->Promedio,
								"dato2" => $dataHotel[0]->hotelNombre,
							);
						}

						//ENERO VUELOS

						$mes = $lin . $x;
						$like = $año . $mes;
						$vueloP = $this->m_charts->getVueloP("$like");
						if (empty($vueloP[0]->Promedio)) {
							$vuelo1 = array(
								"dato1" => "No existen datos para este mes",
								"dato2" => "No existen datos para este mes",
							);
							$Tvuelo1 = "0";
						} else {
							$vueloC = $this->m_charts->getVueloCount("$like");
							$Tvuelo1 = $vueloC[0]->totalVuelo;
							$vueloM = $this->m_charts->getVueloMax("$like");
							$dataVuelo = $this->m_aerolineas->get_by_id($vueloM[0]->aerolineaID);

							$vuelo1 = array(
								"dato1" => $vueloP[0]->Promedio,
								"dato2" => $dataVuelo[0]->aeroNombre,
							);
						}

						//ENERO AUTOS

						$mes = $lin . $x;
						$like = $año . $mes;
						$autoP = $this->m_charts->getAutoP("$like");
						if (empty($autoP[0]->Promedio)) {
							$auto1 = array(
								"dato1" => "No existen datos para este mes",
								"dato2" => "No existen datos para este mes",
							);
							$Tauto1 = "0";
						} else {
							$autoC = $this->m_charts->getAutoCount("$like");
							$Tauto1 = $autoC[0]->totalAuto;
							$autoM = $this->m_charts->getAutoMax("$like");
							$dataAuto = $this->m_autos->get_by_id($autoM[0]->autoID);

							$auto1 = array(
								"dato1" => $autoP[0]->Promedio,
								"dato2" => $dataAuto[0]->autoModelo,
							);
						}




						$comp1 = array(
							"Reserva de Guias" => $Tguia1,
							"Reserva de Hoteles" => $Thotel1,
							"Reserva de Vuelos" => $Tvuelo1,
							"Reserva de Auto" => $Tauto1,
							"No hay datos para este mes" => "1", #CAMBIOOOOOOOOOOOOOOOOOO
						);

						$mesdata = array(
							"guias" => $guia1,
							"hoteles" => $hotel1,
							"vuelos" => $vuelo1,
							"autos" => $auto1,
							"top" => array_keys($comp1, max($comp1))[0],
						);



						$resultado['listado'] += [$x => $mesdata]; //////////////////////////////////////////////////

						$x++;
					}
				}
				// ENERO GUIAS

				//print_r(var_dump($resultado['listado']['11']['guias']['dato1']));

				//print_r($resultado['Enero']['guias']['dato1']);

				$this->load->view('view_charts', $resultado);
			} else {
				$this->load->view('view_charts_año');
			}
		}
	}
}
