<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Reportshift_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData1()
    {
        $query = $this->db->query("SELECT * FROM data_mesin ORDER BY nama_mesin ASC");

        return $query->result();
    }

    public function getData()
    {
        $i = 1;
        $oee_data = $this->db->query("SELECT * from oee_data");
        
        foreach($oee_data->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='blue'><i class='ace-icon fa fa-search bigger-120'></i></span></a> </center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->date;
            $row[] = $rowa->shift;
            $row[] = $rowa->nama_mesin;
            $row[] = $rowa->AvailRatio;
            $row[] = $rowa->Performance;
            $row[] = $rowa->Quality;
            $row[] = $rowa->OEE;
            $row[] = $akses;
            $row[] = $rowa->id_oee;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $dateDaily = $this->input->post('txtDateFilterDaily');
        $namaMesinDaily = $this->input->post('txtNamaMesinFilterDaily');
        $dariShift = $this->input->post('txtDariShift');
        $sampaiShift = $this->input->post('txtSampaiShift');
        
            if($this->db->simple_query("INSERT INTO oee_data_daily(date, nama_mesin, WaktuYgTer, WaktuKerMes, PlannedDt, UnplannedDt, SetupTime, LoadingTime, OperationTime, AvailRatio, JumlahOutput, RejectUnit, IdealCycleTime, ActualCycleTime, Performance, Quality, OEE)
                SELECT '$dateDaily', '$namaMesinDaily', SUM(WaktuYgTer), SUM(WaktuKerMes), SUM(PlannedDt), SUM(UnplannedDt), SUM(SetupTime), SUM(LoadingTime), SUM(OperationTime), AVG(AvailRatio), SUM(JumlahOutput), SUM(RejectUnit), AVG(IdealCycleTime), AVG(ActualCycleTime), AVG(Performance), AVG(Quality), AVG(OEE)
                FROM oee_data
                WHERE nama_mesin = '$namaMesinDaily' AND date = '$dateDaily' AND shift BETWEEN '$dariShift' AND '$sampaiShift' ")){       
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
