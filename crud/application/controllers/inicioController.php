<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicioController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->helper('url','form');
	}
	
	public function index()
	{
		$this->load->view('view_inicio');
	}

	
}