<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Dataoee extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('dataoee_model');
    }

    public function index()
    {
        $data['dataoee'] = $this->dataoee_model->getDataMesin();
    	$data['title'] = 'Data Oee Per Shift';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('dataoee_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->dataoee_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->dataoee_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->dataoee_model->hapus();  
    }

}