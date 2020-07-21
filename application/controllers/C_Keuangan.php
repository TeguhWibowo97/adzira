<?php

class C_Keuangan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Absensi_model');
        $this->load->model('Tentor_model');
        $this->load->model('Siswa_model');
    }

    public function index()
    {

        $data['tentor'] = $this->Tentor_model->getAllTentor();
        $data['absensi'] = $this->Absensi_model->getAllAbsensi();

        $data['judul'] = 'Gaji Tentor';        
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = 'active';
        $data['user'] = $this->db->get_where('admin')->row_array();


        $this->load->view('template/header',$data);
        $this->load->view('keuangan/gajitentor',$data);
        $this->load->view('template/footer');

        // var_dump($data['gaji']);
    }

    public function tagihan()
    {
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['absensi'] = $this->Absensi_model->getAllAbsensi();

        $data['judul'] = 'Tagihan Siswa';        
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = 'active';
        $data['user'] = $this->db->get_where('admin')->row_array();


        $this->load->view('template/header',$data);
        $this->load->view('keuangan/tagihansiswa',$data);
        $this->load->view('template/footer');
        
    }
}