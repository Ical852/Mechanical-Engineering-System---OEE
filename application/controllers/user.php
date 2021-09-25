<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('oee_model');
	}

	public function index()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('user/header',$data);
      	$this->load->view('user/menu');
      	$this->load->view('user/home',$data);
     	$this->load->view('user/footer');
	}

	public function profile()
    {
    	$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/profile_view',$data);
		$this->load->view('user/footer');
    }

    public function edit()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header',$data);
      	$this->load->view('user/menu');
      	$this->load->view('user/edit_view',$data);
     	$this->load->view('user/footer');
	}

	public function password()
	{
		$data['title'] = 'Change Password';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header',$data);
      	$this->load->view('user/menu');
      	$this->load->view('user/changepw',$data);
     	$this->load->view('user/footer');
	}

	public function oee()
    {
        $data['datamesin'] = $this->oee_model->getData();
    	$data['title'] = 'Masukkan Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/oee_view', $data);
		$this->load->view('user/footer');
    }

    public function oeed()
    {
        $data['datamesin'] = $this->oee_model->getData();
    	$data['title'] = 'Masukkan Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/oeedaily_view', $data);
		$this->load->view('user/footer');
    }

    public function oeem()
    {
        $data['datamesin'] = $this->oee_model->getData();
    	$data['title'] = 'Masukkan Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/oeemonthly_view', $data);
		$this->load->view('user/footer');
    }

    public function oeey()
    {
        $data['datamesin'] = $this->oee_model->getData();
    	$data['title'] = 'Masukkan Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/oeeyearly_view', $data);
		$this->load->view('user/footer');
    }

    public function spm()
    {
        $data['datamesin'] = $this->oee_model->getData();
    	$data['title'] = 'Masukkan Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/spmasukform_view', $data);
		$this->load->view('user/footer');
    }

    public function spk()
    {
        $data['datamesin'] = $this->oee_model->getData();
    	$data['title'] = 'Masukkan Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/spkeluarform_view', $data);
		$this->load->view('user/footer');
    }

    public function avl()
    {
        $data['datamesin'] = $this->oee_model->getData();
    	$data['title'] = 'Masukkan Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/evaluasi_view', $data);
		$this->load->view('user/footer');
    }

}