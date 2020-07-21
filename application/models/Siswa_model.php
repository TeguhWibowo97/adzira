<?php 

class Siswa_model extends CI_model{

    public function getAllSiswa()
    {
       return  $this->db->get('siswa')->result_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "tgl_lahir" => $this->input->post('tgl_lahir',true),
            "kelas" => $this->input->post('kelas',true),
            "nama_ortu" => $this->input->post('nama_ortu',true),
            "tlp_ortu" => $this->input->post('tlp_ortu',true)
        ];

        $this->db->insert('siswa',$data);
    }

    public function hapusDataSiswa($id)
    {
        $this->db->where('id_siswa',$id);
        $this->db->delete('siswa');
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('siswa',['id_siswa' => $id])->row_array();
    }
    public function getTotalSiswa()
    {
        return $this->db->query('SELECT * FROM siswa')->num_rows();
    }

    public function ubahDataSiswa($id)
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "tgl_lahir" => $this->input->post('tgl_lahir',true),
            "kelas" => $this->input->post('kelas',true),
            "nama_ortu" => $this->input->post('nama_ortu',true),
            "tlp_ortu" => $this->input->post('tlp_ortu',true)
        ];

        $this->db->where('id_siswa',$id);
        $this->db->update('siswa',$data);
    }
    public function uploadFotoSiswa($id)
    {            
        date_default_timezone_set('Asia/Jakarta');
            $config['upload_path']      = './uploads/foto/';
            $config['allowed_types']    = 'jpg|png|jpeg|gif';
            $config['max_size']         = 5120;
            $config['file_name']        = 'siswa'.date('d-m-Y').'jam'.date('H-i').'-'.substr(md5(rand()),0,15);
            $this->load->library('upload',$config);
            if(@$_FILES['image']['name'] != null)
            {
                if($this->upload->do_upload('image'))
                {
                    $item = $this->db->get('siswa')->row();
                    if($item->image != null){
                        $target_file = './uploads/foto/'.$item->image;
                        unlink($target_file);
                    }

                    $data['image'] = $this->upload->data('file_name');
                    $this->db->where('id_siswa',$id);
                    $this->db->update('siswa',$data);
                    $this->session->set_flashdata('flash','Diupload');
                    redirect('c_siswa/detail/'.$id);                    
                }else{
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('flashgagal',$error);
                    redirect('c_siswa/detail/'.$id);
                }
            }
    }
}