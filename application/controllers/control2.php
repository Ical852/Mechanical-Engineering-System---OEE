<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Control2 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('control_model');
    }

    public function index()
    {
    	$data['title'] = 'Control Data User/Admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header2', $data);
		$this->load->view('admin/menu2');
		$this->load->view('control_view2', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->control_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->control_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->control_model->hapus();
    }

}