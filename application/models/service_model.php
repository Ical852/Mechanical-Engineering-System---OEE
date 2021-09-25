<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Service_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $query = $this->db->query("SELECT supplier, date, nama_barang, pengiriman, kualitas, pelayanan_pumajual, pelayanan_keluhan, total_nilai, rata2, keterangan
            FROM evaluasisup
            WHERE date=(SELECT MAX(date) FROM evaluasisup);");

        return $query->result();
    }

}