<?php
class m_dashboard extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }



    function total_who()
    {
        $this->db->select('data_ebook.jenis_ebook');
        $this->db->where('jenis_ebook','Publikasi - WHO');
        $query = $this->db->get('data_ebook');
        if ($query->num_rows()>=0){
            return $query->num_rows();
        }
    }

    function total_peraturan_perundangan()
    {
        $this->db->select('data_ebook.jenis_ebook');
        $this->db->where('jenis_ebook','Peraturan - Perundangan');
        $query = $this->db->get('data_ebook');
        if ($query->num_rows()>=0){
            return $query->num_rows();
        }
    }

    function informasi_asuhan_pasien()
    {
        $this->db->select('data_ebook.jenis_ebook');
        $this->db->where('jenis_ebook','Informasi Asuhan Pasien');
        $query = $this->db->get('data_ebook');
        if ($query->num_rows()>=0){
            return $query->num_rows();
        }
    }

    function ppk()
    {
        $this->db->select('data_ebook.jenis_ebook');
        $this->db->where('jenis_ebook','Panduan Praktik Klinis (PPK)');
        $query = $this->db->get('data_ebook');
        if ($query->num_rows()>=0){
            return $query->num_rows();
        }
    }

    function publikasi_idi()
    {
        $this->db->select('data_ebook.jenis_ebook');
        $this->db->where('jenis_ebook','Publikasi - IDI');
        $query = $this->db->get('data_ebook');
        if ($query->num_rows()>=0){
            return $query->num_rows();
        }
    }

    function publikasi_kemenkes()
    {
        $this->db->select('data_ebook.jenis_ebook');
        $this->db->where('jenis_ebook','Publikasi - Kemenkes');
        $query = $this->db->get('data_ebook');
        if ($query->num_rows()>=0){
            return $query->num_rows();
        }
    }

    function publikasi_lainnya()
    {
        $this->db->select('data_ebook.jenis_ebook');
        $this->db->where('jenis_ebook','Publikasi - Lainnya');
        $query = $this->db->get('data_ebook');
        if ($query->num_rows()>=0){
            return $query->num_rows();
        }
    }

    function informasi_manajemen_rs()
    {
        $this->db->select('data_ebook.jenis_ebook');
        $this->db->where('jenis_ebook','Informasi Manajemen RS');
        $query = $this->db->get('data_ebook');
        if ($query->num_rows()>=0){
            return $query->num_rows();
        }
    }

    function jurnal_medis()
    {
        $this->db->select('data_ebook.jenis_ebook');
        $this->db->where('jenis_ebook','Jurnal Medis');
        $query = $this->db->get('data_ebook');
        if ($query->num_rows()>=0){
            return $query->num_rows();
        }
    }
}