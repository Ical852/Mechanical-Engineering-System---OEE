<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Datamesin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('datamesin_model');
    }

    public function index()
    {
    	$data['title'] = 'Data Mesin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu');
		$this->load->view('datamesin_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->datamesin_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->datamesin_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->datamesin_model->hapus();  
    }

}