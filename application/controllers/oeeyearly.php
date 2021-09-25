<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Oeeyearly extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('oeeyearly_model');
    }

    public function index()
    {
        $data['datamesin'] = $this->oeeyearly_model->getData();
    	$data['title'] = 'Masukkan Data Per Tahun';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu');
		$this->load->view('oeeyearly_view', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->oeeyearly_model->add();
    }

}