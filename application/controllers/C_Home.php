<?php

class C_Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Tentor_model');

    }
    public function index()
    {
        $data['judul'] = 'Dashboard';        
        $data['aktifdashboard'] = 'active';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';

        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['tentor'] = $this->Tentor_model->getAllTentor();
        
        $data['user'] = $this->db->get_where('admin')->row_array();


        $data['jumlahsiswa'] = $this->Siswa_model->getTotalSiswa();
        $data['jumlahtentor'] = $this->Tentor_model->getTotalTentor();

        $this->load->view('template/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
        // var_dump($data['user']);
    }
    
}