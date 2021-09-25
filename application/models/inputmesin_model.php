<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Inputmesin_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function add()
    {
        $kodeMesin = $this->input->post('txtKodeMesin');
        $namaMesin = $this->input->post('txtNamaMesin');
        $keterangan = $this->input->post('txtKeterangan');
        $status = $this->input->post('txtStatus');
        $idMesin = $this->input->post('txtIdMesin');
        
            if($this->db->simple_query("INSERT INTO data_mesin(kode_mesin, nama_mesin, keterangan, status)
                    VALUES ('$kodeMesin', '$namaMesin', '$keterangan', '$status')")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil ditambahkan.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }

}