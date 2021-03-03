<?php
class m_ebook extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }


    /*DATA EBOOK*/
    public function get_data_ebook($id = false)
    {
        if ($id === false) {
            $this->db->order_by('judul_ebook', 'ASC');
            /*$this->db->join("jenis_ebook","jenis_ebook.id_jenis_ebook = data_ebook.jenis_ebook","left");*/
            $query = $this->db->get('data_ebook');
            return $query->result_array();
        }
        $this->db->order_by('judul_ebook', 'ASC');
        /*$this->db->join("jenis_ebook","jenis_ebook.id_jenis_ebook = data_ebook.jenis_ebook","left");*/
        $query = $this->db->get_where('data_ebook', array('kode_buku' => $id));
        return $query->row_array();
    }

    /*KODE BUKU*/
    function kode(){
        $this->db->select('RIGHT(data_ebook.kode_buku,2)as kode_buku', FALSE);
        $this->db->order_by('kode_buku','DESC');
        $this->db->limit(1);
        $query = $this->db->get('data_ebook');
        if ($query->num_rows() <> 0){
            $data = $query->row();
            $kode = intval($data->kode_buku) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode,4,"0", STR_PAD_LEFT);
        $kodetampil = "B".$batas;
        return $kodetampil;
    }

    /*AKSI UPLOAD FILE*/
    function uploadfile($var,$dir,$all){
        $new_name = $this->input->post('judul_ebook');
        $config2=array(
            'image_library' => 'gd2',
            'upload_path' => $dir."/pdf/", //lokasi gambar akan di simpan
            'allowed_types' => $all, //ekstensi gambar yang boleh di uanggah
            'create_thumb' => TRUE,
            'max_size' => '2048', //batas maksimal ukuran gambar
            'file_name' => $new_name
        );

        $this->load->library('upload');
        $this->upload->initialize($config2);
        if ($this->upload->do_upload($var))
        {

            return $this->upload->data();
        }
        else
        {
            return 0;
        }
    }


    /*JENIS EBOOK*/
    public function get_jenis_ebook($id = false)
    {
        if ($id === false) {
            $this->db->order_by('nama_jenis_ebook', 'ASC');
            $query = $this->db->get('jenis_ebook');
            return $query->result_array();
        }
        $this->db->order_by('nama_jenis_ebook', 'ASC');
        $query = $this->db->get_where('jenis_ebook', array('id_jenis_ebook' => $id));
        return $query->row_array();
    }
}