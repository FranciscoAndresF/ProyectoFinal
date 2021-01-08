<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_usuarios extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAll()
    {
        $query=$this->db->get('usuarios');
        return $query->result();
    }
    public function add()
    {
        $datos_insertar=$this->input->post();
        unset($datos_insertar["btn_enviar"]);
        $this->db->insert('usuarios',$datos_insertar);
    }
    public function update($id=null){
        $datos_actualizar=$this->input->post();
        unset($datos_actualizar["btn_enviar"]);
        $query = $this->db->where('usuarioID',$id);
        $this->db->update('usuarios',$datos_actualizar);
    }
    function get_by_id($id){
        $query = $this->db->where('usuarioID',$id);
        $query = $this->db->get('usuarios');
        return $query->result();
    }

    public function delete($id=null){
        
        $query = $this->db->where('usuarioID',$id);
        $this->db->delete('usuarios');
    }
    public function login($username,$password){
        $this->db->where('usuEmail',$username);
        $this->db->where('usuPassword',$password);
        $query = $this->db->get('usuarios');
        foreach ($query->result() as $row)
        {
                $result = $row->usuarioID;
        }
        if($query->num_rows()>0){
            return $result;
            
        }else{
            return '0';
        }
    }
}