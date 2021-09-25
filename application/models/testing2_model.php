<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Testing2_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    function fetch_mesin()
    {
        $this->db->select('nama_mesin');
        $this->db->from('oee_data_testing');
        $this->db->group_by('nama_mesin');
        $this->db->order_by('nama_mesin', 'ASC');
        return $this->db->get();
    }

 	function fetch_chart_data($nama_mesin)
 	{
	  $this->db->where('nama_mesin', $nama_mesin);
	  $this->db->order_by('nama_mesin', 'ASC');
	  return $this->db->get('oee_data_testing');
 	}

}