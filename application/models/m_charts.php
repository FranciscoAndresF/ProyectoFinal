<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_charts extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //GUIAS

    public function getGuiaP($dato)
    
    { 
        $this->db->select_avg('total','Promedio');
        $this->db->like('fechaI',$dato,'after');
        $this->db->from('reservaguias');
        $query=$this->db->get();
        //$query = $this->db->get('reservaguias');
        return $query->result();                        
    }

    public function getGuiaMax($dato){
        $this->db->select('guiaID');
        $this->db->count_all();
        $this->db->from('reservaguias');
        $this->db->like('fechaI',$dato,'after');
        $this->db->group_by('guiaID');
        $this->db->limit(1); 
        $query=$this->db->get();

        return $query->result(); 

    }

    public function getGuiaCount($dato){
        $this->db->select_sum('total');
        $this->db->from('reservaguias');
        $this->db->like('fechaI',$dato,'after');
        $query=$this->db->get();

        return $query->result(); 

    }

    //HOTELES

    public function getHotelP($dato)
    
    { 
        $this->db->select_avg('totalHotel','Promedio');
        $this->db->like('fechaIngreso',$dato,'after');
        $this->db->from('reservahotels');
        $query=$this->db->get();
        //$query = $this->db->get('reservaguias');
        return $query->result();                        
    }

    public function getHotelMax($dato){
        $this->db->select('hotelID');
        $this->db->count_all();
        $this->db->from('reservahotels');
        $this->db->like('fechaIngreso',$dato,'after');
        $this->db->group_by('hotelID');
        $this->db->limit(1); 
        $query=$this->db->get();

        return $query->result(); 

    }

    public function getHotelCount($dato){
        $this->db->select_sum('totalHotel');
        $this->db->from('reservahotels');
        $this->db->like('fechaIngreso',$dato,'after');
        $query=$this->db->get();

        return $query->result(); 

    }

    //VUELOS

    public function getVueloP($dato)
    
    { 
        $this->db->select_avg('totalVuelo','Promedio');
        $this->db->like('fechaI',$dato,'after');
        $this->db->from('reservavuelos');
        $query=$this->db->get();
        //$query = $this->db->get('reservaguias');
        return $query->result();                        
    }

    public function getVueloMax($dato){
        $this->db->select('aerolineaID');
        $this->db->count_all();
        $this->db->from('reservavuelos');
        $this->db->like('fechaI',$dato,'after');
        $this->db->group_by('aerolineaID');
        $this->db->limit(1); 
        $query=$this->db->get();

        return $query->result(); 

    }

    public function getVueloCount($dato){
        $this->db->select_sum('totalVuelo');
        $this->db->from('reservavuelos');
        $this->db->like('fechaI',$dato,'after');
        $query=$this->db->get();

        return $query->result(); 

    }

    //AUTOS

    public function getAutoP($dato)
    
    { 
        $this->db->select_avg('totalAuto','Promedio');
        $this->db->like('fechaR',$dato,'after');
        $this->db->from('rentaautos');
        $query=$this->db->get();
        //$query = $this->db->get('reservaguias');
        return $query->result();                        
    }

    public function getAutoMax($dato){
        $this->db->select('autoID');
        $this->db->count_all();
        $this->db->from('rentaautos');
        $this->db->like('fechaR',$dato,'after');
        $this->db->group_by('autoID');
        $this->db->limit(1); 
        $query=$this->db->get();

        return $query->result(); 

    }

    public function getAutoCount($dato){
        $this->db->select_sum('totalAuto');
        $this->db->from('rentaautos');
        $this->db->like('fechaR',$dato,'after');
        $query=$this->db->get();

        return $query->result(); 

    }



    
    
}