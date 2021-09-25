<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Evaluasi_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function add()
    {
        $namaSupplier = $this->input->post('txtNamaSupplier');
        $tanggal = $this->input->post('txtTanggal');
        $namaBarang = $this->input->post('txtNamaBarangJasa');
        $pengiriman = $this->input->post('txtPengiriman');
        $kualitas = $this->input->post('txtKualitas');
        $pelayananPJ = $this->input->post('txtPelayananPumaJual');
        $pelayananK = $this->input->post('txtPelayananKeluhan');
        $keterangan = $this->input->post('txtKeterangan');
        $kodeEvaluasi = $this->input->post('txtKodeEvaluasi');
        
            if($this->db->simple_query("INSERT INTO evaluasisup (supplier, date, nama_barang, pengiriman, kualitas, pelayanan_pumajual, pelayanan_keluhan, total_nilai, rata2, keterangan )
                    VALUES ('$namaSupplier', '$tanggal', '$namaBarang', '$pengiriman', '$kualitas', '$pelayananPJ', '$pelayananK', (pengiriman+kualitas+pelayanan_pumajual+pelayanan_keluhan), (total_nilai/4), '$keterangan' )")){       
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

    public function getData()
    {
        $query = $this->db->query("SELECT * FROM supplieravl ORDER BY nama_supplier ASC");

        return $query->result();
    }

}