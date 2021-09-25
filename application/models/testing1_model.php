<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Testing1_model extends CI_Model {
     
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

 	function fetch_chart_data($date)
 	{
	  $this->db->where('date', $date);
	  $this->db->order_by('date', 'ASC');
	  return $this->db->get('oee_data_testing');
 	}

    function fetch_chart_data1($nama_mesin)
    {
      $this->db->where('nama_mesin', $nama_mesin);
      $this->db->order_by('nama_mesin', 'ASC');
      return $this->db->get('oee_data_testing');
    }

    function fetch_chart_data2($date, $nama_mesin)
    {
      $this->db->where('date, nama_mesin', $date, $nama_mesin);
      $this->db->order_by('nama_mesin', 'ASC');
      return $this->db->get('oee_data_testing');
    }

}