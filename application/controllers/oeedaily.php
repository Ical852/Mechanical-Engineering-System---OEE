<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Oeedaily extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('oeedaily_model');
    }

    public function index()
    {
        $data['datamesin'] = $this->oeedaily_model->getData();
    	$data['title'] = 'Masukkan Data Per Hari';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu');
		$this->load->view('oeedaily_view', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->oeedaily_model->add();
    }

}