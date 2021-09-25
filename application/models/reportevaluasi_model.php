<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Reportevaluasi_model extends CI_Model {
     
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
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='blue'><i class='ace-icon fa fa-search bigger-120'></i></span></a> </center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->supplier;
            $row[] = $rowa->date;
            $row[] = $rowa->nama_barang;
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

}
