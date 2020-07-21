<?php

class C_Tentor extends CI_Controller{

    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('Tentor_model');
    }
    public function index()
    {
        $data['tentor'] = $this->Tentor_model->getAllTentor();
        $data['judul'] = 'Data Tentor';
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = 'active';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();

        $this->load->view('template/header',$data);
        $this->load->view('tentor/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['tentor'] = $this->Tentor_model->tambahDataTentor();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('c_tentor');
    }

    public function hapus($id)
    {
        $this->Tentor_model->hapusDataTentor($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('c_tentor');
    }

    public function detail($id)
    {
        $data['tentor']= $this->Tentor_model->getTentorById($id);
        $data['judul'] = 'Detail Tentor';
        $data['aktifdashboard'] = '';
        $data['aktifsiswa'] = '';
        $data['aktiftentor'] = 'active';
        $data['aktifjadwal'] = '';
        $data['aktifabsensi'] = '';
        $data['aktifkeuangan'] = '';
        $data['user'] = $this->db->get_where('admin')->row_array();

        $this->load->view('template/header',$data);
        $this->load->view('tentor/detail',$data);
        $this->load->view('template/footer');

        $this->load->view('modal/modaledittentor');
        $this->load->view('modal/modaluploadfototentor');
    }

    public function ubah($id)
    {
        $this->Tentor_model->ubahDataTentor($id);
        $this->session->set_flashdata('flash','Diubah');
        redirect('c_tentor');
    }

    public function upload($id)
    {
        $this->Tentor_model->uploadFotoTentor($id);
    }
}