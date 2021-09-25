<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Spkeluarform_model extends CI_Model {
     
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
        $dateKeluar = $this->input->post('txtDateKeluar');
        $kodeBarangKeluar = $this->input->post('txtKodeBarangKeluar');
        $namaBarangKeluar = $this->input->post('txtNamaBarangKeluar');
        $merekBarangKeluar = $this->input->post('txtMerekBarangKeluar');
        $tipeBarangKeluar = $this->input->post('txtTipeBarangKeluar');
        $jumlahBarangKeluar = $this->input->post('txtJumlahBarangKeluar');
        $keteranganKeluar = $this->input->post('txtKeteranganKeluar');
        $kodeSpKeluar = $this->input->post('txtKodeSpKeluar');
        
            if($this->db->simple_query("INSERT INTO spkeluar(date, kode_barang, nama_barang, merek, tipe, jumlah_keluar, keterangan)
                    VALUES ('$dateKeluar', '$kodeBarangKeluar', '$namaBarangKeluar', '$merekBarangKeluar', '$tipeBarangKeluar', '$jumlahBarangKeluar', '$keteranganKeluar')")){       
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