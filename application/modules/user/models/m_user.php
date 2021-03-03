<?php
class m_user extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*DATA USER*/
    public function get_user($id = false)
    {
        if($id === false)
        {
            //$this->db->where('id_user = 1');
            $this->db->join("data_akses","data_akses.id_akses = user.akses","left");
            $this->db->join("data_unit","data_unit.id_unit = user.unit","left");
            $this->db->order_by('username','ASC');
            $query = $this->db->get('user');
            return $query->result_array();
        }
        $this->db->join("data_akses","data_akses.id_akses = user.akses","left");
        $this->db->join("data_unit","data_unit.id_unit = user.unit","left");
        $this->db->order_by('username','ASC');
        $query = $this->db->get_where('user', array('id_user' => $id));
        return $query->row_array();
    }

    /*DATA AKSES*/
    public function get_data_akses($id = false)
    {
        if($id === false)
        {
            //$this->db->where('id_user = 1');
            $this->db->order_by('nama_akses','ASC');
            $query = $this->db->get('data_akses');
            return $query->result_array();
        }
        $this->db->order_by('nama_akses','ASC');
        $query = $this->db->get_where('data_akses', array('id_akses' => $id));
        return $query->row_array();
    }

    /*DATA UNIT*/
    public function get_data_unit($id = false)
    {
        if($id === false)
        {
            //$this->db->where('id_user = 1');
            $this->db->order_by('nama_unit','ASC');
            $query = $this->db->get('data_unit');
            return $query->result_array();
        }
        $this->db->order_by('nama_unit','ASC');
        $query = $this->db->get_where('data_unit', array('id_unit' => $id));
        return $query->row_array();
    }

}