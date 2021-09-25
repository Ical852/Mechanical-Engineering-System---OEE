<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data1 = $this->admin_model->get_data()->result();
		$data['data1'] = json_encode($data1);
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('admin/header',$data);
      	$this->load->view('admin/menu');
      	$this->load->view('admin/home',$data);
     	$this->load->view('admin/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header',$data);
      	$this->load->view('admin/menu');
      	$this->load->view('admin/edit_view',$data);
     	$this->load->view('admin/footer');
	}

	public function profile()
    {
    	$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu');
		$this->load->view('admin/profile_view',$data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->admin_model->add();
    }

    public function password()
	{
		$data['title'] = 'Change Password';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header',$data);
      	$this->load->view('admin/menu');
      	$this->load->view('admin/changepw',$data);
     	$this->load->view('admin/footer');
	}

    public function changepassword()
    {
      	if (!isset($_POST))
        show_404();
        
       	$this->admin_model->changepassword();
    }

    public function resetpassword()
    {
    	if (!isset($_POST))
        show_404();
        
       	$this->admin_model->resetpassword();
    }

    
}