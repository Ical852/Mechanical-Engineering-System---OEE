<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Inputmesin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('inputmesin_model');
    }

    public function index()
    {
    	$data['title'] = 'Masukkan Data Mesin Baru';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu');
		$this->load->view('inputmesin_view', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->inputmesin_model->add();
    }

}