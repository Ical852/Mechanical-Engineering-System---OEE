<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Datasp_model extends CI_Model {
     
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
        $data_sparepart = $this->db->query("SELECT * from sparepart");
        
        foreach($data_sparepart->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a>  
                <a href='#' class='tooltip-success' data-rel='tooltip' title='Masukkan' ><span class='blue'><i class='ace-icon fa fa-cube bigger-120'></i></span></a>  <a href='#' class='tooltip-success' data-rel='tooltip' title='Keluar' ><span class='orange'><i class='ace-icon fa fa-outdent bigger-120'></i></span></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->kode_barang;
            $row[] = $rowa->nama_barang;
            $row[] = $rowa->merek;
            $row[] = $rowa->tipe;
            $row[] = $rowa->stok;
            $row[] = $rowa->date;
            $row[] = $rowa->keterangan;
            $row[] = $akses;
            $row[] = $rowa->kode_barang;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $date = $this->input->post('txtDateSp');
        $kodeBarang = $this->input->post('txtKodeBarang');
        $namaBarang = $this->input->post('txtNamaBarang');
        $merek = $this->input->post('txtMerek');
        $tipe = $this->input->post('txtTipe');
        $stok = $this->input->post('txtStok');
        $keterangan = $this->input->post('txtKeterangan');
        $kodeSp = $this->input->post('txtKodeSp');

        $sql = "SELECT * FROM sparepart WHERE kode_barang ='$kodeSp'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE sparepart
                    SET  kode_barang = '$kodeBarang' , nama_barang = '$namaBarang', merek = '$merek', tipe = '$tipe', stok = '$stok', date = '$date', keterangan = '$keterangan'
                    WHERE kode_barang='$kodeSp'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO sparepart(kode_barang, nama_barang, merek, tipe, stok, date ,  keterangan)
                    VALUES ('$kodeBarang', '$namaBarang', '$merek', '$tipe', '$stok', '$date', '$keterangan' )")){       
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
        $kodeSp = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM sparepart WHERE kode_barang = '$kodeSp'")){       
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

    public function masuk()
    {
        $dateMasuk = $this->input->post('txtDateSpMasuk');
        $kodeBarangMasuk = $this->input->post('txtKodeBarangMasuk');
        $namaBarangMasuk = $this->input->post('txtNamaBarangMasuk');
        $merekBarangMasuk = $this->input->post('txtMerekMasuk');
        $tipeBarangMasuk = $this->input->post('txtTipeMasuk');
        $jumlahBarangMasuk = $this->input->post('txtJumlahMasuk');
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

    public function keluar()
    {
        $dateKeluar = $this->input->post('txtDateSpKeluar');
        $kodeBarangKeluar = $this->input->post('txtKodeBarangKeluar');
        $namaBarangKeluar = $this->input->post('txtNamaBarangKeluar');
        $merekBarangKeluar = $this->input->post('txtMerekKeluar');
        $tipeBarangKeluar = $this->input->post('txtTipeKeluar');
        $jumlahBarangKeluar = $this->input->post('txtJumlahKeluar');
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