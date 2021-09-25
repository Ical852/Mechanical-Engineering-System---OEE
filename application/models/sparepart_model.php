<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Sparepart_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function getData()
    {
        $query = $this->db->query("SELECT kode_barang, nama_barang, merek, tipe, stok, date, keterangan
            FROM sparepart
            WHERE date=(SELECT MAX(date) FROM sparepart);");
        return $query->result();
    }

    public function getData1()
    {
        $query = $this->db->query("SELECT t.date, t.kode_barang, t.nama_barang, t.merek, t.tipe, t.jumlah_masuk, t.keterangan
            FROM spmasuk t
            INNER JOIN (SELECT nama_barang, MAX(date) AS MaxDate
            FROM spmasuk
            GROUP BY nama_barang)
            tm ON t.nama_barang = tm.nama_barang AND t.date = tm.MaxDate");

        return $query->result();
    }

    public function getData2()
    {
        $query = $this->db->query("SELECT t.date, t.kode_barang, t.nama_barang, t.merek, t.tipe, t.jumlah_keluar, t.keterangan
            FROM spkeluar t
            INNER JOIN (SELECT nama_barang, MAX(date) AS MaxDate
            FROM spkeluar
            GROUP BY nama_barang)
            tm ON t.nama_barang = tm.nama_barang AND t.date = tm.MaxDate");

        return $query->result();
    }
}