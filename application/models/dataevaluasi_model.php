<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dataevaluasi_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $data_evaluasi = $this->db->query("SELECT * from evaluasisup");
        
        foreach($data_evaluasi->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->supplier;
            $row[] = $rowa->date;
            $row[] = $rowa->nama_barang;
            $row[] = $rowa->pengiriman;
            $row[] = $rowa->kualitas;
            $row[] = $rowa->pelayanan_pumajual;
            $row[] = $rowa->pelayanan_keluhan;
            $row[] = $rowa->total_nilai;
            $row[] = $rowa->rata2;
            $row[] = $rowa->keterangan;
            $row[] = $akses;
            $row[] = $rowa->id_eval;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
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

        $sql = "SELECT * FROM evaluasisup WHERE id_eval ='$kodeEvaluasi'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE evaluasisup
                    SET supplier = '$namaSupplier', date = '$tanggal', nama_barang = '$namaBarang', pengiriman = '$pengiriman', kualitas = '$kualitas', pelayanan_pumajual = '$pelayananPJ', pelayanan_keluhan = '$pelayananK', total_nilai = (pengiriman+kualitas+pelayanan_pumajual+pelayanan_keluhan), rata2 = (total_nilai/4), keterangan = '$keterangan'
                    WHERE id_eval='$kodeEvaluasi'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
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
        }

        echo json_encode($data);
    }

    public function hapus()
    {
        $kodeEvaluasi = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM evaluasisup WHERE id_eval = '$kodeEvaluasi'")){       
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

    public function getData2()
    {
        $query = $this->db->query("SELECT * FROM supplieravl ORDER BY nama_supplier ASC");

        return $query->result();
    }

}