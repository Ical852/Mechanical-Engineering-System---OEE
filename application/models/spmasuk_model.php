<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Spmasuk_model extends CI_Model {
     
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

    public function getData()
    {
        $i = 1;
        $data_spmasuk = $this->db->query("SELECT * from spmasuk");
        
        foreach($data_spmasuk->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->date;
            $row[] = $rowa->kode_barang;
            $row[] = $rowa->nama_barang;
            $row[] = $rowa->merek;
            $row[] = $rowa->tipe;
            $row[] = $rowa->jumlah_masuk;
            $row[] = $rowa->keterangan;
            $row[] = $akses;
            $row[] = $rowa->id_spm;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $dateMasuk = $this->input->post('txtDateMasuk');
        $kodeBarangMasuk = $this->input->post('txtKodeBarangMasuk');
        $namaBarangMasuk = $this->input->post('txtNamaBarangMasuk');
        $merekMasuk = $this->input->post('txtMerekMasuk');
        $tipeMasuk = $this->input->post('txtTipeMasuk');
        $jumlahMasuk = $this->input->post('txtJumlahMasuk');
        $keteranganMasuk = $this->input->post('txtKeteranganMasuk');
        $kodeSpMasuk = $this->input->post('txtKodeSpMasuk');

        $sql = "SELECT * FROM spmasuk WHERE id_spm ='$kodeSpMasuk'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE spmasuk
                    SET date = '$dateMasuk',  kode_barang = '$kodeBarangMasuk' , nama_barang = '$namaBarangMasuk', merek = '$merekMasuk', tipe = '$tipeMasuk', jumlah_masuk = '$jumlahMasuk',  keterangan = '$keteranganMasuk'
                    WHERE id_spm='$kodeSpMasuk'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO spmasuk(date, kode_barang, nama_barang, merek, tipe, jumlah_masuk,   keterangan)
                    VALUES ('$dateMasuk', '$kodeBarangMasuk', '$namaBarangMasuk', '$merekMasuk', '$tipeMasuk', '$jumlahMasuk',  '$keteranganMasuk' )")){       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil ditambahkan.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        }

        echo json_encode($data);
    }

    public function hapus()
    {
        $kodeSpMasuk = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM spmasuk WHERE id_spm = '$kodeSpMasuk'")){       
                $data['msg'][0] = "hapus";
                $data['msg'][1] = "Data berhasil dihapus.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        echo json_encode($data);
    }

}