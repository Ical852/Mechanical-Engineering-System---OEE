<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Oeemonthly_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function add()
    {
        $bulan = $this->input->post('txtMonth');
        $namaMesin = $this->input->post('txtNamaMesin');
        $waktuYgTer = $this->input->post('txtWaktuYgTer');
        $waktuKerMes = $this->input->post('txtWaktuKerMes');
        $plannedDt = $this->input->post('txtPlannedDt');
        $unplannedDt = $this->input->post('txtUnplannedDt');
        $setupTime = $this->input->post('txtSetupTime');
        $jumlahOutput = $this->input->post('txtJumlahOutput');
        $jumlahReject = $this->input->post('txtJumlahReject');
        $idealCyTime = $this->input->post('txtIdealCyTime');
        $kodeOee = $this->input->post('txtKodeOee');
        
            if($this->db->simple_query("INSERT INTO oee_data_monthly(bulan , nama_mesin, WaktuYgTer, WaktuKerMes, PlannedDt, UnplannedDt, SetupTime, LoadingTime , OperationTime , AvailRatio , JumlahOutput , RejectUnit, IdealCycleTime, ActualCycleTime, Performance, Quality, OEE )
                    VALUES ('$bulan' , '$namaMesin' ,'$waktuYgTer', '$waktuKerMes', '$plannedDt', '$unplannedDt', '$setupTime' , (WaktuKerMes-PlannedDt) , (LoadingTime-(SetupTime+UnplannedDt)) , ((OperationTime/LoadingTime)*100) ,'$jumlahOutput' , '$jumlahReject', '$idealCyTime', (OperationTime/JumlahOutput), (((JumlahOutput*IdealCycleTime)/OperationTime)*100), (((JumlahOutput-RejectUnit)/JumlahOutput)*100), ((AvailRatio*Performance*Quality)/10000) )")){       
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

    public function getData()
    {
        $query = $this->db->query("SELECT * FROM data_mesin ORDER BY nama_mesin ASC");

        return $query->result();
    }

}