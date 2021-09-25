<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Reporttahunan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('reporttahunan_model');
    }

    public function index()
    {
        $data['title'] = 'Persentase Data Per Tahun';
        $data['title1'] = 'Input Persentase Data Per Tahun';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/menu');
        $this->load->view('reporttahunan_view', $data);
        $this->load->view('admin/footer');
    }

    public function daftar_data()
    {
        if (!isset($_POST))
        show_404();
        $this->reporttahunan_model->getData();
    }

}