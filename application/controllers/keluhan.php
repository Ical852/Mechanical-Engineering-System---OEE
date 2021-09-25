<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Keluhan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('keluhan_model');
    }

    public function index()
    {
    	$data['title'] = 'Kelola Keluhan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu');
		$this->load->view('keluhanuser_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->keluhan_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->keluhan_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->keluhan_model->hapus();  
    }

    public function simpan()
    {
        if (!isset($_POST))
        show_404();
        $this->keluhan_model->simpan();
    }
}
