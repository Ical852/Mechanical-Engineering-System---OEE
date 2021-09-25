<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Keluhan_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $keluhan_user = $this->db->query("SELECT * from keluhan_user");
        
        foreach($keluhan_user->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a><a href='#' class='tooltip-success' data-rel='tooltip' title='Simpan' ><span class='primary'><i class='ace-icon fa fa-share-square-o bigger-120'></i></span></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->nama;
            $row[] = $rowa->alamat;
            $row[] = $rowa->no_telpon;
            $row[] = $rowa->keluhan;
            $row[] = $rowa->kritik_dan_saran;
            $row[] = $akses;
            $row[] = $rowa->id_keluhan;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $nama = $this->input->post('txtNama');
        $alamat = $this->input->post('txtAlamat');
        $telp = $this->input->post('txtNoTelfon');
        $keluhan = $this->input->post('txtKeluhan');
        $kritik = $this->input->post('txtKritikdanSaran');
        $kodeKeluhan = $this->input->post('txtKodeKeluhan');

        $sql = "SELECT * FROM keluhan_user WHERE id_keluhan='$kodeKeluhan'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE keluhan_user
                    SET nama='$nama', alamat ='$alamat', no_telpon ='$telp', keluhan = '$keluhan', kritik_dan_saran = '$kritik' 
                    WHERE id_keluhan='$kodeKeluhan'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO keluhan_user(nama, alamat, no_telpon, keluhan, kritik_dan_saran)
                    VALUES ('$nama', '$alamat', '$telp', '$keluhan', '$kritik')")){       
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
        $id_keluhan = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM keluhan_user WHERE id_keluhan='$id_keluhan'")){       
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

    public function simpan()
    {
        $id_keluhan = $this->input->post('id');

        if($this->db->simple_query("INSERT INTO keluhan_simpanan SELECT * FROM keluhan_user WHERE id_keluhan = '$id_keluhan'")){
            $data['msg'][0] = "simpan";
            $data['msg'][1] = "Data berhasil disimpan.....";
        } else {
            $error = $this->db->error();
            $myJSON = json_encode($error['code'].": ".$error['message']);
            $data['msg'][0] = "err";
            $data['msg'][1] = $myJSON;
        }

        echo json_encode($data);
    }

}
