<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Tambahsup_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function add()
    {
        $namaSupplier = $this->input->post('txtNamaSupplier');
        $contact = $this->input->post('txtContact');
        $alamat = $this->input->post('txtAlamat');
        $noTelpon = $this->input->post('txtNoTelpon');
        $fax = $this->input->post('txtFax');
        $keterangan = $this->input->post('txtKeterangan');
        $kodeSupplier = $this->input->post('txtKodeSupplier');
        
            if($this->db->simple_query("INSERT INTO supplieravl (nama_supplier, contact, alamat, no_telpon, fax, keterangan )
                    VALUES ('$namaSupplier', '$contact', '$alamat', '$noTelpon', '$fax', '$keterangan' )")){       
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