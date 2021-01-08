<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservaVueloController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url','form');
		$this->load->library('session');
		$this->load->model('m_reservaVuelo');
		$this->load->model('m_aerolineas');
		
	}
	
	public function index()
	{
		if(isset($_SESSION['is_logged'])){
			$data['listado']=$this->m_aerolineas->getAll();
			$this->load->view('view_reserva_vuelos',$data);
		}else{
			redirect('/inicioController/index');
		}
		
	}

	public function reservar($id=null){
		$idUsuario = $this->session->userdata('id');
		date_default_timezone_set('America/Bogota');
		if($id==null or !is_numeric($id)){
			echo 'Error con el id';
			return;
		}else{
			if($this->input->post())
			{	
				$date1 = new DateTime($this->input->post("fechaI"));
				$date2 = new DateTime($this->input->post("fechaR"));
				$diff = $date1->diff($date2);

				$reserva= array(
					"usuarioID" => $idUsuario,
					"aerolineaID" => $id,
					"origen" => $this->input->post("origen"),
					"destino" => $this->input->post("destino"),
					"fechaI" => $this->input->post("fechaI"),
					"fechaR" => $this->input->post("fechaR"),
					"totalVuelo" => '600',
				);

				if($this->input->post("origen")!=$this->input->post("destino")){
					if($diff->days != "0"){
						$this->m_reservaVuelo->add($reserva);
						redirect('/reservaVueloController/index');	
					}else{
						$this->load->view('view_error');
					}	
				}else{
					$this->load->view('view_error');
				}
				
				
				//$this->load->view('view_reserva_hotel_confirmacion',$reserva);		
				
							
			}else{
				$data['datos_aerolinea']=$this->m_aerolineas->get_by_id($id);
				if(empty($data['datos_aerolinea'])){
					echo 'La aerolinea no existe';
				}else{
					//print_r($data['datos_usuarios']);
					
					$this->load->view('view_reserva_vuelo_usuario',$data);
				}
				
			}
		}		
		
	}

	public function confirmar(){

		print_r($this->session->userdata('id'));
		
	}

	
}