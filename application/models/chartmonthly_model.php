<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Chartmonthly_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

 	function fetch_chart_data($bulan)
 	{
	  $this->db->where('bulan', $bulan);
	  $this->db->order_by('bulan', 'ASC');
	  return $this->db->get('oee_data_monthly');
 	}

}