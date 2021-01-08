<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuariosController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('m_usuarios');
		$this->load->library('form_validation');
		$this->load->helper('url','form');
		$this->load->library('session');
	}
	
	public function index()
	{
		$data['listado']=$this->m_usuarios->getAll();
		$this->load->view('view_list_usuarios',$data);
	}

	function mis_reglas(){
		$this->form_validation->set_rules('usuNombre', 'nombre', 'required');
		$this->form_validation->set_rules('usuApellido', 'apellido', 'required');
		$this->form_validation->set_rules('usuFijo', 'fijo', 'required');
		$this->form_validation->set_rules('usuMovil', 'movil', 'required');
		$this->form_validation->set_rules('usuEdad', 'apellido', 'required');
		$this->form_validation->set_rules('usuEmail', 'correo', 'required');
		$this->form_validation->set_rules('usuPassword', 'contrasena', 'required');
	}
	function reglas_login(){
		$this->form_validation->set_rules('usuEmail', 'correo', 'required');
		$this->form_validation->set_rules('usuPassword', 'contrasena', 'required');
	}

	public function registrar(){
		if($this->input->post()){
			
			$this->mis_reglas();
			if($this->form_validation->run()==true){
				$this->m_usuarios->add();
				$this->load->view('view_inicio');
			}else{
				$this->load->view('view_add_usuarios');
			}
		}else{
			$this->load->view('view_add_usuarios');
		}
		
	}

	public function agregar()
	{
		
		if($this->input->post()){
			
			$this->mis_reglas();
			if($this->form_validation->run()==true){
				$this->m_usuarios->add();
				redirect('');
			}else{
				$this->load->view('view_add_usuarios');
			}
		}else{
			$this->load->view('view_add_usuarios');
		}
		
	}

	public function editar($id=null){

		if($id==null or !is_numeric($id)){
			echo 'Error con el id';
			return;
		}else{
			if($this->input->post())
			{			
				$this->reglas_login();
				if($this->form_validation->run()==true){
					$this->m_usuarios->update($id);
					redirect('');
				}else{
					$this->load->view('view_add_usuarios');
				}
			}else{
				$data['datos_usuarios']=$this->m_usuarios->get_by_id($id);

				if(empty($data['datos_usuarios'])){
					echo 'La persona no existe';
				}else{
					//print_r($data['datos_usuarios']);
					$this->load->view('view_add_usuarios',$data);
				}
				
			}
		}
		
	}

	public function eliminar($id=null){

		if($id==null or !is_numeric($id)){
			echo 'Error con el id';
			return;
		}
			
		if($this->input->post()){
			$id_eliminar = $this->input->post('id');
			$this->m_usuarios->delete($id_eliminar);
			redirect('refresh');
		}else{
			
			$data['datos_usuarios']=$this->m_usuarios->get_by_id($id);

			if(empty($data['datos_usuarios'])){
				echo 'La persona no existe';
			}else{
				//print_r($data['datos_usuarios']);
				$this->m_usuarios->delete($id);
				redirect('');
			}
		}
		
	}

	public function login(){
		if($this->input->post()){
			
			
			$email = $this->input->post('usuEmail');
			$passw = $this->input->post('usuPassword');
			$id = $this->m_usuarios->login($email,$passw);
			if($id != '0'){
				$usuarioData = array(
					'user'=>$email,
					'pass'=>$passw,
					'id' =>$id,
					'is_logged'=> TRUE
				);
				
				
				$this->session->set_userdata($usuarioData);

				if($id=='7'){ 
					redirect('/main/usuarios');
	
				}else{
					redirect('/reservaHotelController/index');
				}
				
				
			}else{
				$this->load->view('view_login_usuarios');
				echo "Datos incorrectos";
			}
			
		}else{
			$this->load->view('view_login_usuarios');
		}
	}
	
	public function logout(){
		session_destroy();
		redirect('/inicioController/index');
	}
}
