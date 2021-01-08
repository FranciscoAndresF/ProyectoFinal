<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_reservaHotel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAll()
    {
        $query=$this->db->get('reservahotels');
        return $query->result();
    }
    public function add($datos_insertar)
    {
        $this->db->insert('reservahotels',$datos_insertar);
    }
    
}