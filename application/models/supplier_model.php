<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Supplier_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $data_supplier = $this->db->query("SELECT * from supplieravl");
        
        foreach($data_supplier->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->nama_supplier;
            $row[] = $rowa->contact;
            $row[] = $rowa->alamat;
            $row[] = $rowa->no_telpon;
            $row[] = $rowa->fax;
            $row[] = $rowa->keterangan;
            $row[] = $akses;
            $row[] = $rowa->id_sup;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $namaSupplier = $this->input->post('txtNamaSupplier');
        $contact = $this->input->post('txtContact');
        $alamat = $this->input->post('txtAlamat');
        $noTelpon = $this->input->post('txtNoTelpon');
        $fax = $this->input->post('txtFax');
        $keterangan = $this->input->post('txtKeterangan');
        $kodeSupplier = $this->input->post('txtKodeSupplier');

        $sql = "SELECT * FROM supplieravl WHERE id_sup ='$kodeSupplier'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE supplieravl
                    SET nama_supplier = '$namaSupplier', contact = '$contact', alamat = '$alamat', no_telpon = '$noTelpon', fax = '$fax', keterangan = '$keterangan'
                    WHERE id_sup='$kodeSupplier'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO supplieravl (nama_supplier, contact, alamat, no_telpon, fax, keterangan )
                    VALUES ('$namaSupplier', '$contact', '$alamat', '$noTelpon', '$fax', '$keterangan' )")){       
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
        $kodeSupplier = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM supplieravl WHERE id_sup = '$kodeSupplier'")){       
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