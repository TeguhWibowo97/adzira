<?php

class C_Siswa extends CI_Controller{

    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('Siswa_model');
        
    }
    
    public function index()
    {
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['judul'] = 'Data Siswa';
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = 'active';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';
        
        $data['user'] = $this->db->get_where('admin')->row_array();
        
        $this->load->view('template/header',$data);
        $this->load->view('siswa/index',$data);
        $this->load->view('template/footer');
    }
    
    public function tambah()
    {
        $data['user'] = $this->db->get_where('admin')->row_array();
        $data['siswa'] = $this->Siswa_model->tambahDataSiswa();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('c_siswa');
    }

    public function hapus($id)
    {
        $this->Siswa_model->hapusDataSiswa($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('c_siswa');
    }

    public function detail($id)
    {
        $data['siswa']= $this->Siswa_model->getSiswaById($id);
        $data['judul'] = 'Detail Siswa';
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = 'active';
        $data['aktiftentor'] = '';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';

        $data['user'] = $this->db->get_where('admin')->row_array();

        $this->load->view('template/header',$data);
        $this->load->view('siswa/detail',$data);
        $this->load->view('template/footer');

        $this->load->view('modal/modaleditsiswa');
        $this->load->view('modal/modaluploadfoto');
    }

    public function ubah($id)
    {
        $this->Siswa_model->ubahDataSiswa($id);
        $this->session->set_flashdata('flash','Diubah');
        redirect('c_siswa');
    }

    public function upload($id)
    {
        $this->Siswa_model->uploadFotoSiswa($id);
        
    }
}