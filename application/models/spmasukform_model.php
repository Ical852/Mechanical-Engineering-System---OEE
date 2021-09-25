<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Spmasukform_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getDataKodeBarang()
    {
        $query = $this->db->query("SELECT * FROM sparepart ORDER BY kode_barang ASC");

        return $query->result();
    }

    public function getDataNamaBarang()
    {
        $query = $this->db->query("SELECT * FROM sparepart ORDER BY nama_barang ASC");

        return $query->result();
    }

    public function getDataMerekBarang()
    {
        $query = $this->db->query("SELECT * FROM sparepart ORDER BY merek ASC");

        return $query->result();
    }

    public function getDataTipeBarang()
    {
        $query = $this->db->query("SELECT * FROM sparepart ORDER BY tipe ASC");

        return $query->result();
    }

    public function add()
    {
        $dateMasuk = $this->input->post('txtDateMasuk');
        $kodeBarangMasuk = $this->input->post('txtKodeBarangMasuk');
        $namaBarangMasuk = $this->input->post('txtNamaBarangMasuk');
        $merekBarangMasuk = $this->input->post('txtMerekBarangMasuk');
        $tipeBarangMasuk = $this->input->post('txtTipeBarangMasuk');
        $jumlahBarangMasuk = $this->input->post('txtJumlahBarangMasuk');
        $keteranganMasuk = $this->input->post('txtKeteranganMasuk');
        $kodeSpMasuk = $this->input->post('txtKodeSpMasuk');
        
            if($this->db->simple_query("INSERT INTO spmasuk(date, kode_barang, nama_barang, merek, tipe, jumlah_masuk, keterangan)
                    VALUES ('$dateMasuk', '$kodeBarangMasuk', '$namaBarangMasuk', '$merekBarangMasuk', '$tipeBarangMasuk', '$jumlahBarangMasuk', '$keteranganMasuk')")){       
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