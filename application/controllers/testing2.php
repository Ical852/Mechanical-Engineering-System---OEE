<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

Class Testing2 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('testing2_model');
    }

    public function index()
    {
        $data['mesin_list'] = $this->testing2_model->fetch_mesin();
        $data['title'] = 'Test Data 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/menu');
        $this->load->view('testing2_view', $data);
        $this->load->view('admin/footer');
    }

    function fetch_data()
    {
        if($this->input->post('nama_mesin'))
            {
                $chart_data = $this->testing2_model->fetch_chart_data($this->input->post('nama_mesin'));
   
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