<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservaHotelController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url','form');
		$this->load->library('session');
		$this->load->model('m_reservaHotel');
		$this->load->model('m_hoteles');
		
	}
	
	public function index()
	{
		if(isset($_SESSION['is_logged'])){
			$data['listado']=$this->m_hoteles->getAll();
			$this->load->view('view_reserva_hoteles',$data);
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
				$data=$this->m_hoteles->get_by_id($id);

				$date1 = new DateTime($this->input->post("fechaIngreso"));
				$date2 = new DateTime($this->input->post("fechaSalida"));
				$diff = $date1->diff($date2);

				$precioN=intval($data[0]->hotelPrecioN);
				$personas= intval($this->input->post("nPersonas"));
				$dias=intval($diff->days);
				$totalPagar=$personas*$dias*$precioN;

				$reserva= array(
					"usuarioID" => $idUsuario,
					"hotelID" => $id,
					"fechaIngreso" => $this->input->post("fechaIngreso"),
					"fechaSalida" => $this->input->post("fechaSalida"),
					"numeroP" => $this->input->post("nPersonas"),
					"numeroDias" => $diff->days,
					"totalHotel" => $totalPagar,
				);

				if($diff->days == "0"){
					$this->load->view('view_error');	
				}else{
					$this->m_reservaHotel->add($reserva);
					redirect('/reservaHotelController/index');
				}
				
				
				//$this->load->view('view_reserva_hotel_confirmacion',$reserva);		
				
							
			}else{
				$data['datos_hotel']=$this->m_hoteles->get_by_id($id);
				if(empty($data['datos_hotel'])){
					echo 'El hotel no existe';
				}else{
					//print_r($data['datos_usuarios']);
					
					$this->load->view('view_reserva_hotel_usuario',$data);
				}
				
			}
		}		
		
	}

	public function confirmar(){

		print_r($this->session->userdata('id'));
		
	}

	
}