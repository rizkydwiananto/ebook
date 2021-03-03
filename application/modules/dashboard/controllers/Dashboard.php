<?php

class Dashboard extends CI_Controller{
    //put your code here
   
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('m_dashboard');
        if ($this->session->userdata('logged')<>1 && $this->session->userdata('akses') != 'administrator') {
            redirect(site_url('login'));
        }
    }

    //------------------------------------------------ DASHBOARD ----------------------------------------------------------//
    public function index() {
        $data['total_who'] = $this->m_dashboard->total_who();
        $data['total_peraturan_perundangan'] = $this->m_dashboard->total_peraturan_perundangan();
        $data['informasi_asuhan_pasien'] = $this->m_dashboard->informasi_asuhan_pasien();
        $data['ppk'] = $this->m_dashboard->ppk();
        $data['publikasi_idi'] = $this->m_dashboard->publikasi_idi();
        $data['publikasi_kemenkes'] = $this->m_dashboard->publikasi_kemenkes();
        $data['publikasi_lainnya'] = $this->m_dashboard->publikasi_lainnya();
        $data['informasi_manajemen_rs'] = $this->m_dashboard->informasi_manajemen_rs();
        $data['jurnal_medis'] = $this->m_dashboard->jurnal_medis();
        $data['title'] = "Main Menu";
        $data['view'] = "mainmenu";
        $this->load->view('header',$data);
    }

    //------------------------------------------------ END OF DASHBOARD -------------------------------------------------//
   
}