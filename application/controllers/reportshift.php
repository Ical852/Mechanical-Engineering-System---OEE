<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Reportshift extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('reportshift_model');
    }

    public function index()
    {
        $data['datamesin'] = $this->reportshift_model->getData1();
    	$data['title'] = 'Persentase Data Per Hari | Shift';
        $data['title1'] = 'Input Persentase Data Per Hari | Shift';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu');
		$this->load->view('reportshift_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
        if (!isset($_POST))
        show_404();
        $this->reportshift_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->reportshift_model->add();
    }

}