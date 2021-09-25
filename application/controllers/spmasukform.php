<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Spmasukform extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('spmasukform_model');
    }

    public function index()
    {
        $data['kode_barang'] = $this->spmasukform_model->getDataKodeBarang();
        $data['nama_barang'] = $this->spmasukform_model->getDataNamaBarang();
        $data['merek'] = $this->spmasukform_model->getDataMerekBarang();
        $data['tipe'] = $this->spmasukform_model->getDataTipeBarang();
    	$data['title'] = 'Masukkan Data Pemasukkan Sparepart';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header1', $data);
		$this->load->view('admin/menu1');
		$this->load->view('spmasukform_view', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->spmasukform_model->add();
    }

}