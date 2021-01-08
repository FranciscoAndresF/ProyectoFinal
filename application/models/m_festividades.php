<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_festividades extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_by_id($dato){
        $query = $this->db->where('nombreFestividad',$dato);
        $query = $this->db->get('festividades');
        return $query->result();
    }

    
}