<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Testing1 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('testing1_model');
    }

    public function index()
    {
        $data['mesin_list'] = $this->testing1_model->fetch_mesin();
        $data['title'] = 'Test Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/menu');
        $this->load->view('testing1_view', $data);
        $this->load->view('admin/footer');
    }

    function fetch_data()
    {
        if($this->input->post('date'))
            {
                $chart_data = $this->testing1_model->fetch_chart_data($this->input->post('date'));
                
                foreach($chart_data->result_array() as $row)
                {
                    $output[] = array(
                        'nama_mesin'  => $row["nama_mesin"],
                        'OEE' => floatval($row["OEE"])
                    );
                }
                    echo json_encode($output);

            }

    }

    function fetch_data1()
    {
        if($this->input->post('nama_mesin'))
            {
                $chart_data = $this->testing1_model->fetch_chart_data1($this->input->post('nama_mesin'));
   
                foreach($chart_data->result_array() as $row)
                {
                    $output[] = array(
                        'nama_mesin'  => $row["nama_mesin"],
                        'OEE' => floatval($row["OEE"])
                    );
                }
                    echo json_encode($output);

            }

    }

    function fetch_data2()
    {
        if($this->input->post('date, nama_mesin'))
            {
                $chart_data = $this->testing1_model->fetch_chart_data2($this->input->post('date, nama_mesin'));
   
                foreach($chart_data->result_array() as $row)
                {
                    $output[] = array(
                        'nama_mesin'  => $row["nama_mesin"],
                        'OEE' => floatval($row["OEE"])
                    );
                }
                    echo json_encode($output);

            }

    }

}