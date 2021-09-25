<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Dataevaluasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('dataevaluasi_model');
    }

    public function index()
    {
        $data['datasupplier'] = $this->dataevaluasi_model->getData2();
    	$data['title'] = 'Data Evaluasi Supplier';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header2', $data);
		$this->load->view('admin/menu2');
		$this->load->view('dataevaluasi_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->dataevaluasi_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->dataevaluasi_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->dataevaluasi_model->hapus();  
    }

}