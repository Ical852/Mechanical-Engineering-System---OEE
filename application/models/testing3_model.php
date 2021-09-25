<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Testing3_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

 	function fetch_chart_data($date)
 	{
	  $this->db->where('date', $date);
	  $this->db->order_by('date', 'ASC');
	  return $this->db->get('oee_data_daily');
 	}

}