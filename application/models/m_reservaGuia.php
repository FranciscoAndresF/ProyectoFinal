<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_reservaGuia extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAll()
    {
        $query=$this->db->get('reservaguias');
        return $query->result();
    }
    public function add($datos_insertar)
    {
        $this->db->insert('reservaguias',$datos_insertar);
    }
    
}