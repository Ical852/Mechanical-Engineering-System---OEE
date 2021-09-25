<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Spkeluarform extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('spkeluarform_model');
    }

    public function index()
    {
        $data['kode_barang'] = $this->spkeluarform_model->getDataKodeBarang();
        $data['nama_barang'] = $this->spkeluarform_model->getDataNamaBarang();
        $data['merek'] = $this->spkeluarform_model->getDataMerekBarang();
        $data['tipe'] = $this->spkeluarform_model->getDataTipeBarang();
    	$data['title'] = 'Masukkan Data Pengeluaran Sparepart';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/header1', $data);
		$this->load->view('admin/menu1');
		$this->load->view('spkeluarform_view', $data);
		$this->load->view('admin/footer');
    }

    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->spkeluarform_model->add();
    }

}