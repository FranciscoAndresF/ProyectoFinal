<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservaGuiaController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url','form');
		$this->load->library('session');
		$this->load->model('m_reservaGuia');
		$this->load->model('m_guias');
		
	}
	
	public function index()
	{
		if(isset($_SESSION['is_logged'])){
			$data['listado']=$this->m_guias->getAll();
			$this->load->view('view_reserva_guias',$data);
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
				$data=$this->m_guias->get_by_id($id);

				$date1 = new DateTime($this->input->post("fechaInicio"));
				$date2 = new DateTime($this->input->post("fechaFin"));
				$diff = $date1->diff($date2);
				$dias=intval($diff->days);

				$totalPagar=$dias*80;
			

				$reserva= array(
					"usuarioID" => $idUsuario,
					"guiaID" => $id,
					"fechaI" => $this->input->post("fechaInicio"),
					"fechaF" => $this->input->post("fechaFin"),
					"total" => $totalPagar
				);


				if($diff->days == "0"){
					$this->load->view('view_error');	
				}else{
					$this->m_reservaGuia->add($reserva);
					redirect('/reservaGuiaController/index');
				}
				
				//$this->load->view('view_reserva_hotel_confirmacion',$reserva);		
				
							
			}else{
				$data['datos_guia']=$this->m_guias->get_by_id($id);
				if(empty($data['datos_guia'])){
					echo 'El hotel no existe';
				}else{
					//print_r($data['datos_usuarios']);
					
					$this->load->view('view_reserva_guia_usuario',$data);
				}
				
			}
		}		
		
	}

	public function confirmar(){

		print_r($this->session->userdata('id'));
		
	}

	
}