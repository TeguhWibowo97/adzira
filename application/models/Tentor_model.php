<?php

class Tentor_model extends CI_model{

    public function getAllTentor()
    {
        return $this->db->get('tentor')->result_array();
    }
    public function getTentorById($id)
    {
        return $this->db->get_where('tentor',['id_tentor' => $id])->row_array();
    }
    public function getTotalTentor()
    {
        return $this->db->query('SELECT * FROM tentor')->num_rows();
    }
    public function tambahDataTentor()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "no_tlp" => $this->input->post('no_tlp',true),
            "bidang_keahlian" => $this->input->post('bidang_keahlian',true),
            "sekolah" => $this->input->post('sekolah',true),
            "jurusan" => $this->input->post('jurusan',true),
            "semester" => $this->input->post('semester',true)
        ];

        $this->db->insert('tentor',$data);
    }

    public function hapusDataTentor($id)
    {
        $this->db->where('id_tentor',$id);
        $this->db->delete('tentor');
    }

    public function ubahDataTentor($id)
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "no_tlp" => $this->input->post('no_tlp',true),
            "bidang_keahlian" => $this->input->post('bidang_keahlian',true),
            "sekolah" => $this->input->post('sekolah',true),
            "jurusan" => $this->input->post('jurusan',true),
            "semester" => $this->input->post('semester',true)
        ];

        $this->db->where('id_tentor',$id);
        $this->db->update('tentor',$data);
    }

    public function uploadFotoTentor($id)
    { 
        date_default_timezone_set('Asia/Jakarta');
            $config['upload_path']      = './uploads/foto/';
            $config['allowed_types']    = 'jpg|png|jpeg|gif';
            $config['max_size']         = 5120;
            $config['file_name']        = 'tentor'.date('d-m-Y').'jam'.date('H-i').'-'.substr(md5(rand()),0,15);
            $this->load->library('upload',$config);
            if(@$_FILES['image']['name'] != null)
            {
                if($this->upload->do_upload('image'))
                {
                    $item = $this->db->get('tentor')->row();
                    if($item->image != null){
                        $target_file = './uploads/foto/'.$item->image;
                        unlink($target_file);
                    }

                    $data['image'] = $this->upload->data('file_name');
                    $this->db->where('id_tentor',$id);
                    $this->db->update('tentor',$data);
                    $this->session->set_flashdata('flash','Diupload');
                    redirect('c_tentor/detail/'.$id);                    
                }else{
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('flashgagal',$error);
                    redirect('c_tentor/detail/'.$id);
                }
            }
    }
}