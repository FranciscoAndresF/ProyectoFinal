<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_guias extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAll()
    {
        $query=$this->db->get('guias');
        return $query->result();
    }
    public function add()
    {
        $datos_insertar=$this->input->post();
        unset($datos_insertar["btn_enviar"]);
        $this->db->insert('guias',$datos_insertar);
    }
    public function update($id=null){
        $datos_actualizar=$this->input->post();
        unset($datos_actualizar["btn_enviar"]);
        $query = $this->db->where('guiaID',$id);
        $this->db->update('guias',$datos_actualizar);
    }
    function get_by_id($id){
        $query = $this->db->where('guiaID',$id);
        $query = $this->db->get('guias');
        return $query->result();
    }

    public function delete($id=null){
        
        $query = $this->db->where('guiaID',$id);
        $this->db->delete('guias');
    }
    
}