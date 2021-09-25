<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Tambahsup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('tambahsup_model');
    }

    public function index()
    {
    	$data['title'] = 'Masukkan Data Supplier Baru';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header2', $data);
		$this->load->view('admin/menu2');
		$this->load->view('tambahsup_view', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->tambahsup_model->add();
    }

}