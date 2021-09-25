<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dataoeeyearly_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $i = 1;
        $data_oee = $this->db->query("SELECT * from oee_data_yearly");
        
        foreach($data_oee->result() as $rowa) {
            $akses="<center><a href='#' class='tooltip-success' data-rel='tooltip' title='Ubah' ><span class='green'><i class='ace-icon fa fa-pencil-square-o bigger-120'></i></span></a>  <a href='#' class='tooltip-error' data-rel='tooltip' title='Hapus' ><span class='red'><i class='ace-icon fa fa-trash-o bigger-120'></i></span></a></center>";
            
            $row = array();
            $row[] = $i;
            $row[] = $rowa->tahun;
            $row[] = $rowa->nama_mesin;
            $row[] = $rowa->WaktuYgTer;
            $row[] = $rowa->WaktuKerMes;
            $row[] = $rowa->PlannedDt;
            $row[] = $rowa->UnplannedDt;
            $row[] = $rowa->SetupTime;
            $row[] = $rowa->LoadingTime;
            $row[] = $rowa->OperationTime;
            $row[] = $rowa->AvailRatio;
            $row[] = $rowa->JumlahOutput;
            $row[] = $rowa->RejectUnit;
            $row[] = $rowa->IdealCycleTime;
            $row[] = $rowa->ActualCycleTime;
            $row[] = $rowa->Performance;
            $row[] = $rowa->Quality;
            $row[] = $rowa->OEE;
            $row[] = $akses;
            $row[] = $rowa->id_oee_yearly ;

            $data['data'][] = $row;
            $i++;
        }
        echo json_encode($data);
    }

    public function add()
    {
        $date = $this->input->post('txtYear');
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

        $sql = "SELECT * FROM oee_data_yearly WHERE id_oee_yearly ='$kodeOee'";
        $result =$this->db->query($sql);

        if ($result->num_rows() > 0){
            if($this->db->simple_query("UPDATE oee_data_yearly
                    SET tahun = '$date', nama_mesin = '$namaMesin', WaktuYgTer = '$waktuYgTer', WaktuKerMes = '$waktuKerMes', PlannedDt = '$plannedDt', UnplannedDt = '$unplannedDt', SetupTime = '$setupTime', LoadingTime = (WaktuKerMes-PlannedDt), OperationTime = (LoadingTime-(SetupTime+UnplannedDt)), AvailRatio = ((OperationTime/LoadingTime)*100), JumlahOutput = '$jumlahOutput', RejectUnit = '$jumlahReject', IdealCycleTime = '$idealCyTime', ActualCycleTime = (OperationTime/JumlahOutput), Performance = (((JumlahOutput*IdealCycleTime)/OperationTime)*100), Quality = (((JumlahOutput-RejectUnit)/JumlahOutput)*100), OEE = ((AvailRatio*Performance*Quality)/10000)
                    WHERE id_oee_yearly='$kodeOee'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
        
        } else {
        
            if($this->db->simple_query("INSERT INTO oee_data_yearly (tahun , nama_mesin, WaktuYgTer, WaktuKerMes, PlannedDt, UnplannedDt, SetupTime, LoadingTime , OperationTime , AvailRatio , JumlahOutput , RejectUnit, IdealCycleTime, ActualCycleTime, Performance, Quality, OEE )
                    VALUES ('$date' , '$namaMesin' ,'$waktuYgTer', '$waktuKerMes', '$plannedDt', '$unplannedDt', '$setupTime' , (WaktuKerMes-PlannedDt) , (LoadingTime-(SetupTime+UnplannedDt)) , ((OperationTime/LoadingTime)*100) ,'$jumlahOutput' , '$jumlahReject', '$idealCyTime', (OperationTime/JumlahOutput), (((JumlahOutput*IdealCycleTime)/OperationTime)*100), (((JumlahOutput-RejectUnit)/JumlahOutput)*100), ((AvailRatio*Performance*Quality)/10000) )")){       
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
        $kodeOee = $this->input->post('id');
        
            if($this->db->simple_query("DELETE FROM oee_data_yearly WHERE id_oee_yearly = '$kodeOee'")){       
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

    public function getDataMesin()
    {
        $query = $this->db->query("SELECT * FROM data_mesin ORDER BY nama_mesin ASC");

        return $query->result();
    }

}