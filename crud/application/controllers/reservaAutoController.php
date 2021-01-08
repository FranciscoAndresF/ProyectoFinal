<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservaAutoController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url','form');
		$this->load->library('session');
		$this->load->model('m_reservaAuto');
		$this->load->model('m_autos');
		
	}
	
	public function index()
	{
		if(isset($_SESSION['is_logged'])){
			$data['listado']=$this->m_autos->getAll();
			$this->load->view('view_reserva_autos',$data);
		}else{
			redirect('/inicioController/index');
		}
		
	}

	public function reservar($id=null){
		$idUsuario = $this->session->userdata('id');
		date_default_timezone_set('Asia/Kolkata');
		if($id==null or !is_numeric($id)){
			echo 'Error con el id';
			return;
		}else{
			if($this->input->post())
			{	
				$data=$this->m_autos->get_by_id($id);

				$date1 = new DateTime($this->input->post("fechaRetiro"));
				$date2 = new DateTime($this->input->post("fechaEntrega"));
				$diff = $date1->diff($date2);

				$precioD=intval($data[0]->diaP);
				$dias=intval($diff->days);
				$totalPagar=$dias*$precioD;
			

				$reserva= array(
					"autoID" => $id,
					"usuarioID" => $idUsuario,
					"fechaR" => $this->input->post("fechaRetiro"),
					"fechaE" => $this->input->post("fechaEntrega"),
					"diasRenta" => $diff->days,
					"totalAuto" => $totalPagar,
				);

				if($diff->days == "0"){
					$this->load->view('view_error');	
				}else{
					$this->m_reservaAuto->add($reserva);
					redirect('/reservaAutoController/index');
				}
				
				
				//$this->load->view('view_reserva_hotel_confirmacion',$reserva);		
				
							
			}else{
				$data['datos_auto']=$this->m_autos->get_by_id($id);
				if(empty($data['datos_auto'])){
					echo 'La aerolinea no existe';
				}else{
					//print_r($data['datos_usuarios']);
					
					$this->load->view('view_reserva_auto_usuario',$data);
				}
				
			}
		}		
		
	}

	public function confirmar(){

		print_r($this->session->userdata('id'));
		
	}

	
}