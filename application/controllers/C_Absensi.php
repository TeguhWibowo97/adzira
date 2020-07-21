<?php

class C_Absensi extends CI_Controller{
    
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('Absensi_model');
        $this->load->model('Tentor_model');
        $this->load->model('Siswa_model');
    }

    public function index()
    {
        $data['absensi'] = $this->Absensi_model->getAllAbsensi();
        $data['tentor'] = $this->Tentor_model->getAllTentor();
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['hari'] = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
        $data['judul'] = 'Absensi';
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = 'active';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();

        $this->load->view('template/header',$data);
        $this->load->view('absensi/index',$data);
        $this->load->view('template/footer');

        $this->load->view('modal/modaltambahabsensi');
        // var_dump($data['tentor']);
    }

    public function tambah()
    {
        $data['absensi'] = $this->Absensi_model->tambahAbsensi();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('c_absensi');

    }
    public function detail($id)
    {
        $data['absensi'] = $this->Absensi_model->getAbsensiByIdTentor($id);
        $data['tentor'] = $this->Tentor_model->getTentorById($id);
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['hari'] = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
        $data['judul'] = 'Detail Absensi';
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = 'active';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();

        $this->load->view('template/header',$data);
        $this->load->view('absensi/detail',$data);
        $this->load->view('template/footer');

        // var_dump($data['absensi']);
    }

    public function edit($id)
    {
        $data['absensi'] = $this->Absensi_model->getAbsensiById($id);
        $data['tentor'] = $this->Tentor_model->getAllTentor();
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['hari'] = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
        $data['judul'] = 'Edit Absensi';
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = 'active';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();

        $this->load->view('template/header',$data);
        $this->load->view('absensi/edit',$data);
        $this->load->view('template/footer');
        // var_dump($data['absensi']);
    }

    public function ubah($id)
    {
        $data['absensi'] = $this->Absensi_model->ubahAbsensi($id);
        $this->session->set_flashdata('flash','Diubah');
        redirect('c_absensi');
    }

    public function hapus($id)
    {
        $this->Absensi_model->hapusAbsensi($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('c_absensi');
    }
}
