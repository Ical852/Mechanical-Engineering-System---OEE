<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Oeemonthly extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('oeemonthly_model');
    }

    public function index()
    {
        $data['datamesin'] = $this->oeemonthly_model->getData();
    	$data['title'] = 'Masukkan Data Per Bulan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu');
		$this->load->view('oeemonthly_view', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->oeemonthly_model->add();
    }

}