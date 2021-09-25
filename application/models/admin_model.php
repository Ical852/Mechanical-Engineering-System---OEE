<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function get_data()
    {
    	$query = $this->db->query('SELECT t.nama_mesin, t.date,t.AvailRatio, t.Performance, t.Quality, t.OEE
            FROM oee_data_daily t
            INNER JOIN (SELECT nama_mesin, MAX(date) AS MaxDate
            FROM oee_data_daily
            GROUP BY nama_mesin)
            tm ON t.nama_mesin = tm.nama_mesin AND t.date = tm.MaxDate');
    	return $query;
    }

    public function add()
    {
        $nama = $this->input->post('txtNama');
        $gambar = $this->input->post('txtImg');
        $id = $this->input->post('txtId');

            if($this->db->simple_query("UPDATE user
                    SET name = '$nama', image = '$gambar' 
                    WHERE id ='$id'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }

        echo json_encode($data);
    }

    public function changepassword()
    {
        $email = $this->input->post('txtEmail');
        $password = $this->input->post('txtPassword');

        $sql = "SELECT * FROM user WHERE email ='$email'";
        $result =$this->db->query($sql);

            if($this->db->simple_query("UPDATE user
                    SET password = '$password' 
                    WHERE email ='$email'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Data berhasil diubah.....";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
         
        echo json_encode($data);
    }

    public function resetpassword()
    {
        $email = $this->input->post('txtEmail');
        $password = $this->input->post('txtPassword');

            if($this->db->simple_query("UPDATE user
                    SET password = '$password' 
                    WHERE email ='$email'")) {       
                $data['msg'][0] = "ok";
                $data['msg'][1] = "Password Berhasil Direset, Silakan Coba Login";
            } else {
                $error = $this->db->error();
                $myJSON = json_encode($error['code'].": ".$error['message']);
                $data['msg'][0] = "err";
                $data['msg'][1] = $myJSON;
            }
         
        echo json_encode($data);
    }

}