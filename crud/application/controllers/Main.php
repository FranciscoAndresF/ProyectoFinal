<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('grocery_CRUD');
        $this->load->library('session');
    }

    public function index()
    {

        echo "<h1>Welcome to the world of Codeigniter</h1>"; //Just an example to ensure that we get into the function
        die();
    }

    public function usuarios()
    {
        if ($this->session->userdata('id') != '7') {
            redirect('/usuariosController/login');
        } else {
            $this->load->library('grocery_CRUD');
            $crud = new grocery_CRUD();
            $crud->set_table('usuarios');
            $crud->required_fields('usuNombre', 'usuApellido', 'usuFijo', 'usuMovil', 'usuEdad', 'usuEmail', 'usuPassword');
            $crud->columns('usuarioID', 'usuNombre', 'usuApellido', 'usuFijo', 'usuMovil', 'usuEdad', 'usuEmail', 'usuPassword');
            $crud->fields('usuNombre', 'usuApellido', 'usuFijo', 'usuMovil', 'usuEdad', 'usuEmail', 'usuPassword');

            $crud->field_type('password', 'usuPassword');
            $crud->callback_before_insert(array($this, 'encrypt_password_callback'));
            $crud->callback_before_update(array($this, 'encrypt_password_callback'));
            $crud->callback_edit_field('password', array($this, 'decrypt_password_callback'));

            $output = $crud->render();
            $this->_example_output($output);
        }
    }

    public function hotels()
    {
        if ($this->session->userdata('id') != '7') {
            redirect('/usuariosController/login');
        } else {

            $this->load->library('grocery_CRUD');
            $crud = new grocery_CRUD();
            $crud->set_table('hotels');
            $crud->required_fields('hotelNombre', 'hotelPrecioN', 'hotelDireccion', 'hotelCiudad', 'hotelDescripcion', 'hotelTelefono');
            $output = $crud->render();
            $this->_example_output($output);
        }
    }

    public function aerolineas()
    {
        if ($this->session->userdata('id') != '7') {
            redirect('/usuariosController/login');
        } else {
            $this->load->library('grocery_CRUD');
            $crud = new grocery_CRUD();
            $crud->set_table('aerolineas');
            $crud->required_fields('aeroNombre', 'políticaE', 'documentosV', 'necesidadesE');
            $output = $crud->render();
            $this->_example_output($output);
        }
    }

    public function autos()
    {
        if ($this->session->userdata('id') != '7') {
            redirect('/usuariosController/login');
        } else {
            $this->load->library('grocery_CRUD');
            $crud = new grocery_CRUD();
            $crud->set_table('autos');
            $crud->required_fields('autoPLaca', 'autoModelo', 'autoDescripcion', 'diaP');
            $output = $crud->render();
            $this->_example_output($output);
        }
    }

    public function guias()
    {
        if ($this->session->userdata('id') != '7') {
            redirect('/usuariosController/login');
        } else {
            $this->load->library('grocery_CRUD');
            $crud = new grocery_CRUD();
            $crud->set_table('guias');
            $crud->required_fields('guiaNombre', 'guiaCedula', 'ciudadG', 'idiomasG');
            $output = $crud->render();
            $this->_example_output($output);
        }
    }

    public function _example_output($output = null)
    {
        if ($this->session->userdata('id') != '7') {
            redirect('/usuariosController/login');
        } else {
            $this->load->view('our_template.php', $output);
        }
    }
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
