<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Spbaru_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function add()
    {
        $date = $this->input->post('txtDateSp');
        $kodeBarang = $this->input->post('txtKodeBarang');
        $namaBarang = $this->input->post('txtNamaBarang');
        $merekBarang = $this->input->post('txtMerekBarang');
        $tipeModel = $this->input->post('txtTipeModel');
        $stok = $this->input->post('txtStok');
        $keterangan = $this->input->post('txtKeterangan');
        $kodeSp = $this->input->post('txtKodeSp');
        
            if($this->db->simple_query("INSERT INTO sparepart(kode_barang, nama_barang, merek, tipe, stok, date ,  keterangan)
                    VALUES ('$kodeBarang','$namaBarang' ,'$merekBarang', '$tipeModel', '$stok' , '$date' ,'$keterangan' )")){       
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