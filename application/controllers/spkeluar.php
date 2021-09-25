<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Spkeluar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('spkeluar_model');
    }

    public function index()
    {
        $data['kode_barang'] = $this->spkeluar_model->getDataKodeBarang();
        $data['nama_barang'] = $this->spkeluar_model->getDataNamaBarang();
        $data['merek'] = $this->spkeluar_model->getDataMerekBarang();
        $data['tipe'] = $this->spkeluar_model->getDataTipeBarang();
    	$data['title'] = 'Data Pengeluaran Spare Part';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header1', $data);
		$this->load->view('admin/menu1', $data);
		$this->load->view('spkeluar_view', $data);
		$this->load->view('admin/footer');
    }

    public function daftar_data()
    {
      echo $this->spkeluar_model->getData();
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->spkeluar_model->add();
    }

    public function hapus()
    {
        if (!isset($_POST))
        show_404();
        $this->spkeluar_model->hapus();  
    }

}