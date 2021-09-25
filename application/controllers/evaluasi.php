<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Evaluasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('evaluasi_model');
    }

    public function index()
    {
        $data['datasupplier'] = $this->evaluasi_model->getData();
    	$data['title'] = 'Tambah Data Evaluasi Supplier';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header2', $data);
		$this->load->view('admin/menu2');
		$this->load->view('evaluasi_view', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->evaluasi_model->add();
    }

}