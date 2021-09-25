<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Dataoeemonthly extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('dataoeemonthly_model');
    }

    public function index()
    {
        $data['dataoee'] = $this->dataoeemonthly_model->getDataMesin();
    	$data['title'] = 'Data Oee Per Bulan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header', $data);
        $this->load->view('admin/menu', $data);
		$this->load->view('dataoeemonthly_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->dataoeemonthly_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->dataoeemonthly_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->dataoeemonthly_model->hapus();  
    }

}