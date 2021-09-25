<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Dataoeedaily extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('dataoeedaily_model');
    }

    public function index()
    {
        $data['dataoee'] = $this->dataoeedaily_model->getDataMesin();
    	$data['title'] = 'Data Oee Per Hari';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('dataoeedaily_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->dataoeedaily_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->dataoeedaily_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->dataoeedaily_model->hapus();  
    }

}