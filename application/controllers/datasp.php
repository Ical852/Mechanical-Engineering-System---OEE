<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Datasp extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('datasp_model');
    }

    public function index()
    {
        $data['kode_barang'] = $this->datasp_model->getDataKodeBarang();
        $data['nama_barang'] = $this->datasp_model->getDataNamaBarang();
        $data['merek'] = $this->datasp_model->getDataMerekBarang();
        $data['tipe'] = $this->datasp_model->getDataTipeBarang();
    	$data['title'] = 'Data Stock Spare Part';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header1', $data);
		$this->load->view('admin/menu1', $data);
		$this->load->view('datasp_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->datasp_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->datasp_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->datasp_model->hapus();  
    }

    public function masuk()
    {
      if (!isset($_POST))
        show_404();
        
        $this->datasp_model->masuk();
    }

    public function keluar()
    {
      if (!isset($_POST))
        show_404();
        
        $this->datasp_model->keluar();
    }

}