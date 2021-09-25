<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class service extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('service_model');
	}

	public function index()
	{
		$data['dataevaluasi'] = $this->service_model->getData();
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('admin/header2',$data);
      	$this->load->view('admin/menu2');
      	$this->load->view('admin/home2',$data);
     	$this->load->view('admin/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header2',$data);
      	$this->load->view('admin/menu2');
      	$this->load->view('admin/edit_view2',$data);
     	$this->load->view('admin/footer');
	}

	public function profile()
    {
    	$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header2', $data);
		$this->load->view('admin/menu2');
		$this->load->view('admin/profile_view2',$data);
		$this->load->view('admin/footer');
    }

    public function password()
	{
		$data['title'] = 'Change Password';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header2',$data);
      	$this->load->view('admin/menu2');
      	$this->load->view('admin/changepw2',$data);
     	$this->load->view('admin/footer');
	}
}