<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Chartdaily extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('chartdaily_model');
    }

    public function index()
    {
        $data['title'] = 'Grafik Persentase Oee Tiap Mesin Per Hari';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/menu');
        $this->load->view('chartdaily_view', $data);
        $this->load->view('admin/footer');
    }

    function fetch_data()
    {
        if($this->input->post('date'))
            {
                $chart_data = $this->chartdaily_model->fetch_chart_data($this->input->post('date'));
   
                foreach($chart_data->result_array() as $row)
                {
                    $output[] = array(
                        'nama_mesin'  => $row["nama_mesin"],
                        'AvailRatio' => $row["AvailRatio"],
                        'Performance' => $row["Performance"],
                        'Quality' => $row["Quality"],
                        'OEE' => $row["OEE"]
                    );
                }
                    echo json_encode($output);

            }

    }

}