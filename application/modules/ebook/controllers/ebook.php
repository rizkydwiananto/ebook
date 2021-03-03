<?php

class ebook extends CI_Controller{
    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('m_ebook');
        if ($this->session->userdata('logged')<>1 && $this->session->userdata('akses') != 'administrator') {
            redirect(site_url('login'));
        }
    }

    /*DATA EBOOK*/
    public function index() {
        $data['data_ebook'] = $this->m_ebook->get_data_ebook();
        $data['title'] = "Data e-Book";
        $data['view'] = "data_ebook";
        $this->load->view('header',$data);
    }

    /*TAMBAH EBOOK*/
    public function tambah_ebook() {
        $data['data_ebook'] = $this->m_ebook->get_data_ebook();
        $data['jenis_ebook'] = $this->m_ebook->get_jenis_ebook();
        $data['kode'] = $this->m_ebook->kode();
        $data['title'] = "Tambah e-Book";
        $data['view'] = "tambah_ebook";
        $this->load->view('header',$data);
    }

    /*TAMBAH EBOOK PROSES*/
    public function tambah_ebook_proses()
    {
        $variable = 'pdf'; //variable name dari form
        $directory = './assets/files/'; //direktori
        $allowed_file = 'pdf|PDF'; //file yang diizinkan dibatasi dengan tanga |
        $upload['detail'] = $this->m_ebook->uploadfile($variable,$directory,$allowed_file); //proses dengan modul insertfile
        /* to upload file */
        $filename = $upload['detail']['file_name'];

        if ($filename != "")
        {
            $data = array(
                'pdf' => $filename,
                'kode_buku' => $this->input->post('kode_buku'),
                'judul_ebook' => $this->input->post('judul_ebook'),
                'penerbit' => $this->input->post('penerbit'),
                'pengarang' => $this->input->post('pengarang'),
                'tahun_terbit' => $this->input->post('tahun_terbit'),
                'jenis_ebook' => $this->input->post('jenis_ebook')
            );
            $insert = $this->db->insert('data_ebook',$data);

        } else {
            $data = array(
                'pdf' => $filename,
                'kode_buku' => $this->input->post('kode_buku'),
                'judul_ebook' => $this->input->post('judul_ebook'),
                'penerbit' => $this->input->post('penerbit'),
                'pengarang' => $this->input->post('pengarang'),
                'tahun_terbit' => $this->input->post('tahun_terbit'),
                'jenis_ebook' => $this->input->post('jenis_ebook')
            );
            $insert = $this->db->insert('data_ebook',$data);
        }

        redirect('dashboard');
    }

    public function aksi_upload(){
        //membuat konfigurasi
        $config = [
            'upload_path' => './assets/files/',
            'allowed_types' => 'pdf|PDF',
            'max_size' => 1000, 'max_width' => 1000,
            'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('pdf'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('dashboard', $error);
        }   else

        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['pdf' => $file['file_name'],
                'kode_buku' => set_value('kode_buku'),
                'judul_ebook' => set_value('judul_ebook'),
                'penerbit' => set_value('penerbit'),
                'pengarang' => set_value('pengarang'),
                'tahun_terbit' => set_value('tahun_terbit'),
                'jenis_ebook' => set_value('jenis_ebook')
            ];
            $insert = $this->db->insert('data_ebook',$data);
            redirect('dashboard');
        }
    }

    public function hapus_ebook($id)
    {
        $this->db->where('kode_buku',$id);
        $query = $this->db->get('data_ebook');
        $row = $query->row();
        unlink("assets/files/pdf/$row->pdf");

        $delete = $this->db->delete('data_ebook',array('kode_buku' => $id));
        redirect('dashboard');
    }


    /*TAMPIL PDF*/
    public function tampil_pdf($id) {
        $data['data_ebook'] = $this->m_ebook->get_data_ebook($id);
        $data['title'] = "Tampil PDF";
        $data['view'] = "tampil_pdf";
        $this->load->view('header',$data);
    }


    /*DATA JENIS EBOOK*/
    public function jenis_ebook() {
        $data['jenis_ebook'] = $this->m_ebook->get_jenis_ebook();
        $data['title'] = "Data Jenis E-book";
        $data['view'] = "data_jenis_ebook";
        $this->load->view('header',$data);
    }

    /*TAMBAH JENIS EBOOK*/
    public function tambah_jenis_ebook() {
        $data['jenis_ebook'] = $this->m_ebook->get_jenis_ebook();
        $data['title'] = "Tambah Jenis E-Book";
        $data['view'] = "tambah_jenis_ebook";
        $this->load->view('header',$data);
    }

    /*TAMBAH JENIS EBOOK PROSES*/
    public function tambahjenisproses()
    {
        $data = array(
            'nama_jenis_ebook' => $this->input->post('nama_jenis_ebook')
        );

        $insert = $this->db->insert('jenis_ebook',$data);

        redirect('ebook/jenis_ebook');
    }

    /*EDIT JENIS EBOOK*/
    public function edit_jenis_ebook($id) {
        $data['jenis_ebook'] = $this->m_ebook->get_jenis_ebook($id);
        $data['title'] = "Edit Jenis e_book";
        $data['view'] = "edit_jenis_ebook";
        $this->load->view('header',$data);
    }

    /*EDIT JENIS EBOOK PROSES*/
    public function editjenisproses($id)
    {
        $data = array(
            'nama_jenis_ebook' => $this->input->post('nama_jenis_ebook')
        );

        $update = $this->db->update('jenis_ebook',$data,array('id_jenis_ebook' => $id));

        redirect('ebook/jenis_ebook');
    }

    /*HAPUS JENIS EBOOK*/
    public function hapus_jenis_ebook($id)
    {
        $delete = $this->db->delete('jenis_ebook',array('id_jenis_ebook' => $id));
        redirect('ebook/jenis_ebook');
    }

}