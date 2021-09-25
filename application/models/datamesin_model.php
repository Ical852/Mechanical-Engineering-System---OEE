<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Datamesin_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $data_mesin = $this->db->query("SELECT * from data_mesin");
        
        foreach($data_mesin->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->kode_mesin;
            $row[] = $rowa->nama_mesin;
            $row[] = $rowa->keterangan;
            $row[] = $rowa->status;
            $row[] = $akses;
            $row[] = $rowa->id_mesin;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $kodeMesin = $this->input->post('txtKodeMesin');
        $namaMesin = $this->input->post('txtNamaMesin');
        $keterangan = $this->input->post('txtKeterangan');
        $status = $this->input->post('txtStatus');
        $idMesin = $this->input->post('txtIdMesin');

        $sql = "SELECT * FROM data_mesin WHERE id_mesin ='$idMesin'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE data_mesin
                    SET kode_mesin = '$kodeMesin', nama_mesin = '$namaMesin', keterangan = '$keterangan', status = '$status'
                    WHERE id_mesin='$idMesin'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO data_mesin(kode_mesin, nama_mesin, keterangan, status)
                    VALUES ('$kodeMesin', '$namaMesin', '$keterangan', '$status')")){       
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
        $idMesin = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM data_mesin WHERE id_mesin = '$idMesin'")){       
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