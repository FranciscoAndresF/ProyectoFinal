<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_aerolineas extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAll()
    {
        $query=$this->db->get('aerolineas');
        return $query->result();
    }
    public function add()
    {
        $datos_insertar=$this->input->post();
        unset($datos_insertar["btn_enviar"]);
        $this->db->insert('aerolineas',$datos_insertar);
    }
    public function update($id=null){
        $datos_actualizar=$this->input->post();
        unset($datos_actualizar["btn_enviar"]);
        $query = $this->db->where('aerolineaID',$id);
        $this->db->update('aerolineas',$datos_actualizar);
    }
    function get_by_id($id){
        $query = $this->db->where('aerolineaID',$id);
        $query = $this->db->get('aerolineas');
        return $query->result();
    }

    public function delete($id=null){
        
        $query = $this->db->where('aerolineaID',$id);
        $this->db->delete('aerolineas');
    }
    
}