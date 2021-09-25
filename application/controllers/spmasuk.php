<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Spmasuk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('spmasuk_model');
    }

    public function index()
    {
        $data['kode_barang'] = $this->spmasuk_model->getDataKodeBarang();
        $data['nama_barang'] = $this->spmasuk_model->getDataNamaBarang();
        $data['merek'] = $this->spmasuk_model->getDataMerekBarang();
        $data['tipe'] = $this->spmasuk_model->getDataTipeBarang();
    	$data['title'] = 'Data Pemasukkan Spare Part';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header1', $data);
		$this->load->view('admin/menu1', $data);
		$this->load->view('spmasuk_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->spmasuk_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->spmasuk_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->spmasuk_model->hapus();  
    }

}