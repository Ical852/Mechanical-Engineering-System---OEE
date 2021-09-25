<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sparepart extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('sparepart_model');
	}

	public function index()
	{
		$data['datasparepart'] = $this->sparepart_model->getData();
		$data['datamasuk'] = $this->sparepart_model->getData1();
		$data['datakeluar'] = $this->sparepart_model->getData2();
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('admin/header1',$data);
      	$this->load->view('admin/menu1');
      	$this->load->view('admin/home1',$data);
     	$this->load->view('admin/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header1',$data);
      	$this->load->view('admin/menu1');
      	$this->load->view('admin/edit_view1',$data);
     	$this->load->view('admin/footer');
	}

	public function profile()
    {
    	$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header1', $data);
		$this->load->view('admin/menu1');
		$this->load->view('admin/profile_view1',$data);
		$this->load->view('admin/footer');
    }

    public function password()
	{
		$data['title'] = 'Change Password';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header1',$data);
      	$this->load->view('admin/menu1');
      	$this->load->view('admin/changepw1',$data);
     	$this->load->view('admin/footer');
	}
}