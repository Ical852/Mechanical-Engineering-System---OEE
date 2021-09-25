<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Spbaru extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('spbaru_model');
    }

    public function index()
    {
    	$data['title'] = 'Masukkan Data Sparepart Baru';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header1', $data);
		$this->load->view('admin/menu1');
		$this->load->view('spbaru_view', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->spbaru_model->add();
    }

}