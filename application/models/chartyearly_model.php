<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Chartyearly_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

 	function fetch_chart_data($tahun)
 	{
	  $this->db->where('tahun', $tahun);
	  $this->db->order_by('tahun', 'ASC');
	  return $this->db->get('oee_data_yearly');
 	}

 	public function getData()
    {
        $query = $this->db->query("SELECT tahun, MAX(id_oee_yearly) FROM oee_data_yearly GROUP BY tahun ASC");

        return $query->result();
    }

}