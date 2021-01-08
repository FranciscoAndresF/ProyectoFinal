<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_hoteles extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAll()
    {
        $query=$this->db->get('hotels');
        return $query->result();
    }
    public function add()
    {
        $datos_insertar=$this->input->post();
        unset($datos_insertar["btn_enviar"]);
        $this->db->insert('hotels',$datos_insertar);
    }
    public function update($id=null){
        $datos_actualizar=$this->input->post();
        unset($datos_actualizar["btn_enviar"]);
        $query = $this->db->where('hotelID',$id);
        $this->db->update('hotels',$datos_actualizar);
    }
    function get_by_id($id){
        $query = $this->db->where('hotelID',$id);
        $query = $this->db->get('hotels');
        return $query->result();
    }

    public function delete($id=null){
        
        $query = $this->db->where('hotelID',$id);
        $this->db->delete('hotels');
    }
    
}