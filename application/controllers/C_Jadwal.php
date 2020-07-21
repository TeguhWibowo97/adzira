<?php

class C_Jadwal extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->model('Siswa_model');
        $this->load->model('Tentor_model');
    }

    public function index()
    {
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['tentor'] = $this->Tentor_model->getAllTentor();
        $data['hari'] = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
        $data['judul'] = 'Jadwal Siswa';        
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = 'active';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();


        $this->load->view('template/header',$data);
        $this->load->view('jadwal/index',$data);
        $this->load->view('template/footer');

        
        $this->load->view('modal/index');
        // var_dump($data['hari']);
    }

    public function index2()
    {
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['tentor'] = $this->Tentor_model->getAllTentor();
        $data['hari'] = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
        $data['judul'] = 'Jadwal Siswa';        
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = 'active';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();


        $this->load->view('template/header',$data);
        $this->load->view('jadwal/index2',$data);
        $this->load->view('template/footer');

        
        $this->load->view('modal/index');
        // var_dump($data['hari']);
    }

    public function detail($id)
    {
        $data['jadwal'] = $this->Jadwal_model->getJadwalSiswaById($id);
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);
        $data['tentor'] = $this->Tentor_model->getAllTentor();
        $data['judul'] = 'Detail Jadwal Siswa';        
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktifjadwal'] = 'active';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();


        $this->load->view('template/header',$data);
        $this->load->view('jadwal/detail',$data);
        $this->load->view('template/footer');

        // var_dump($data['tentor']);
    }

    public function detail2($id)
    {
        $data['jadwal'] = $this->Jadwal_model->getAllJadwalSiswa();
        $data['tentor'] = $this->Tentor_model->getTentorById($id);
        $data['namatentor'] = $this->Tentor_model->getAllTentor();
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['judul'] = 'Detail Jadwal Tentor';        
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktifjadwal'] = 'active';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();


        $this->load->view('template/header',$data);
        $this->load->view('jadwal/detail2',$data);
        $this->load->view('template/footer');

        // var_dump($data['tentor']);
    }

    public function tambah()
    {
        $data['jadwal'] = $this->Jadwal_model->tambahJadwal();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('c_jadwal');
    }

    public function edit($id)
    {
        $data['jadwal'] = $this->Jadwal_model->getJadwalById($id);
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['tentor'] = $this->Tentor_model->getAllTentor();        
        $data['hari'] = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];

        $data['judul'] = 'Edit Jadwal Siswa';        
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktifjadwal'] = 'active';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();

        $this->load->view('template/header',$data);
        $this->load->view('jadwal/edit',$data);
        $this->load->view('template/footer');

        // var_dump($data['jadwal']);

    }
    
    public function ubah($id)
    {
        $data['jadwal'] = $this->Jadwal_model->ubahJadwal($id);
        $this->session->set_flashdata('flash','Diubah');
        redirect('c_jadwal');
        // var_dump($_POST);
    }

    public function hapus($id)
    {
        $this->Jadwal_model->hapusJadwal($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('c_jadwal');
    }
}