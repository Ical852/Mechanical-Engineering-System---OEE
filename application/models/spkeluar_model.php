<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Spkeluar_model extends CI_Model {
     
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
        $data_spkeluar = $this->db->query("SELECT * from spkeluar");
        
        foreach($data_spkeluar->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->date;
            $row[] = $rowa->kode_barang;
            $row[] = $rowa->nama_barang;
            $row[] = $rowa->merek;
            $row[] = $rowa->tipe;
            $row[] = $rowa->jumlah_keluar;
            $row[] = $rowa->keterangan;
            $row[] = $akses;
            $row[] = $rowa->id_spk;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $dateKeluar = $this->input->post('txtDateKeluar');
        $kodeBarangKeluar = $this->input->post('txtKodeBarangKeluar');
        $namaBarangKeluar = $this->input->post('txtNamaBarangKeluar');
        $merekKeluar = $this->input->post('txtMerekKeluar');
        $tipeKeluar = $this->input->post('txtTipeKeluar');
        $jumlahKeluar = $this->input->post('txtJumlahKeluar');
        $keteranganKeluar = $this->input->post('txtKeteranganKeluar');
        $kodeSpKeluar = $this->input->post('txtKodeSpKeluar');

        $sql = "SELECT * FROM spkeluar WHERE id_spk ='$kodeSpKeluar'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE spkeluar
                    SET date = '$dateKeluar',  kode_barang = '$kodeBarangKeluar' , nama_barang = '$namaBarangKeluar', merek = '$merekKeluar', tipe = '$tipeKeluar', jumlah_keluar = '$jumlahKeluar',  keterangan = '$keteranganKeluar'
                    WHERE id_spk='$kodeSpKeluar'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO spkeluar(date, kode_barang, nama_barang, merek, tipe, jumlah_keluar,   keterangan)
                    VALUES ('$dateKeluar', '$kodeBarangKeluar', '$namaBarangKeluar', '$merekKeluar', '$tipeKeluar', '$jumlahKeluar',  '$keteranganKeluar' )")){       
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
        $kodeSpKeluar = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM spkeluar WHERE id_spk = '$kodeSpKeluar'")){       
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