<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Menu';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/auth_header1', $data);
		$this->load->view('menuapp',$data);
		$this->load->view('templates/auth_footer',$data);
	}
}