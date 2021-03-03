<?php

class User extends CI_Controller{
    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('m_user');
        if ($this->session->userdata('logged')<>1 && $this->session->userdata('akses') != 'administrator') {
            redirect(site_url('login'));
        }
    }

    /*DATA USER*/
    public function index() {
        $data['user'] = $this->m_user->get_user();
        $data['title'] = "Data User";
        $data['view'] = "data_user";
        $this->load->view('header',$data);
    }

    /*TAMBAH USER*/
    public function tambah_user() {
        $data['user'] = $this->m_user->get_user();
        $data['data_akses'] = $this->m_user->get_data_akses();
        $data['data_unit'] = $this->m_user->get_data_unit();
        $data['title'] = "Tambah User";
        $data['view'] = "tambah_user";
        $this->load->view('header',$data);
    }

    /*TAMBAH USER PROSES*/
    public function tambah_user_proses()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'akses' => $this->input->post('akses'),
            'unit' => $this->input->post('unit'),
            'password' => md5($this->input->post('password'))
        );

        $insert = $this->db->insert('user',$data);

        redirect('user');
    }

    /*EDIT USER*/
    public function edit_user($id) {
        $data['user'] = $this->m_user->get_user($id);
        $data['data_akses'] = $this->m_user->get_data_akses();
        $data['data_unit'] = $this->m_user->get_data_unit();
        $data['title'] = "Edit User";
        $data['view'] = "edit_user";
        $this->load->view('header',$data);
    }

    /*EDIT USER PROSES*/
    public function edit_user_proses($id)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'akses' => $this->input->post('akses'),
            'unit' => $this->input->post('unit'),
            'password' => md5($this->input->post('password'))
        );

        $update = $this->db->update('user',$data,array('id_user' => $id));

        redirect('user');
    }

    /*HAPUS USER*/
    public function hapus_user($id)
    {
        $delete = $this->db->delete('user',array('id_user' => $id));
        redirect('user');
    }

    /*DATA UNIT*/
    public function data_unit() {
        $data['data_unit'] = $this->m_user->get_data_unit();
        $data['title'] = "Data Unit";
        $data['view'] = "data_unit";
        $this->load->view('header',$data);
    }

    /*TAMBAH UNIT*/
    public function tambah_unit() {
        $data['data_unit'] = $this->m_user->get_data_unit();
        $data['title'] = "Tambah Unit";
        $data['view'] = "tambah_unit";
        $this->load->view('header',$data);
    }

    /*TAMBAH UNIT PROSES*/
    public function tambahunitproses()
    {
        $data = array(
            'nama_unit' => $this->input->post('nama_unit')
        );

        $insert = $this->db->insert('data_unit',$data);

        redirect('user/data_unit');
    }

    /*EDIT UNIT*/
    public function edit_unit($id) {
        $data['data_unit'] = $this->m_user->get_data_unit($id);
        $data['title'] = "Edit Unit";
        $data['view'] = "edit_unit";
        $this->load->view('header',$data);
    }

    /*EDIT UNIT PROSES*/
    public function editunitproses($id)
    {
        $data = array(
            'nama_unit' => $this->input->post('nama_unit')
        );

        $update = $this->db->update('data_unit',$data,array('id_unit' => $id));

        redirect('user/data_unit');
    }

    /*HAPUS UNIT*/
    public function hapus_unit($id)
    {
        $delete = $this->db->delete('data_unit',array('id_unit' => $id));
        redirect('user/data_unit');
    }

    /*DATA AKSES*/
    public function data_akses() {
        $data['data_akses'] = $this->m_user->get_data_akses();
        $data['title'] = "Data Akses";
        $data['view'] = "data_akses";
        $this->load->view('header',$data);
    }

    /*TAMBAH AKSES*/
    public function tambah_akses() {
        $data['data_akses'] = $this->m_user->get_data_akses();
        $data['title'] = "Tambah Akses";
        $data['view'] = "tambah_akses";
        $this->load->view('header',$data);
    }

    /*TAMBAH AKSES PROSES*/
    public function tambahaksesproses()
    {
        $data = array(
            'nama_akses' => $this->input->post('nama_akses')
        );

        $insert = $this->db->insert('data_akses',$data);

        redirect('user/data_akses');
    }

    /*EDIT AKSES*/
    public function edit_akses($id) {
        $data['data_akses'] = $this->m_user->get_data_akses($id);
        $data['title'] = "Edit Akses";
        $data['view'] = "edit_akses";
        $this->load->view('header',$data);
    }

    /*EDIT AKSES PROSES*/
    public function editaksesproses($id)
    {
        $data = array(
            'nama_akses' => $this->input->post('nama_akses')
        );

        $update = $this->db->update('data_akses',$data,array('id_akses' => $id));

        redirect('user/data_akses');
    }

    /*HAPUS AKSES*/
    public function hapus_akses($id)
    {
        $delete = $this->db->delete('data_akses',array('id_akses' => $id));
        redirect('user/data_akses');
    }

    /*PROFIL USER*/
    public function profil_user() {
        $data['user'] = $this->m_user->get_user();
        $data['title'] = "Profil";
        $data['view'] = "profil_user";
        $this->load->view('header',$data);
    }

    /*EDIT PROFIL PROSES*/
    public function editprofilproses($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username')
        );

        $update = $this->db->update('user',$data,array('id_user' => $id));

        redirect('login');
    }

    /*EDIT PROFIL PASSWORD*/
    public function editpassprofproses($id)
    {
        $data = array(
            'password' => md5($this->input->post('password'))
        );

        $update = $this->db->update('user',$data,array('id_user' => $id));

        redirect('login');
    }

}