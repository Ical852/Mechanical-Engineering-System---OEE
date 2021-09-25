<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Reporttahunan_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $oee_data = $this->db->query("SELECT * from oee_data_yearly");
        
        foreach($oee_data->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='blue'><i class='ace-icon fa fa-search bigger-120'></i></span></a> </center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->tahun;
            $row[] = $rowa->nama_mesin;
            $row[] = $rowa->AvailRatio;
            $row[] = $rowa->Performance;
            $row[] = $rowa->Quality;
            $row[] = $rowa->OEE;
            $row[] = $akses;
            $row[] = $rowa->id_oee_yearly;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

}
