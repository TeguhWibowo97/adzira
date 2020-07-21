<?php

class Absensi_model extends CI_model{

    public function getAllAbsensi()
    {
        return $this->db->get('absensi')->result_array();
    }

    public function tambahAbsensi()
    {
        $data = [
            "id_tentor" => $this->input->post('id_tentor',true),
            "id_siswa" => $this->input->post('id_siswa',true),
            "hari" => $this->input->post('hari',true),
            "tanggal" => $this->input->post('tanggal',true),
            "jam" => $this->input->post('jam',true),
            "mapel" => $this->input->post('mapel',true)
        ];

        $this->db->insert('absensi',$data);
    }

    public function getAbsensiByIdTentor($id)
    {
        return $this->db->get_where('absensi',['id_tentor'=> $id])->result_array();
    }

    public function getAbsensiById($id)
    {
        return $this->db->get_where('absensi',['id_absensi' => $id])->row_array();
    }

    public function ubahAbsensi($id)
    {
        $data = [
            "id_siswa" => $this->input->post('id_siswa',true),
            "id_tentor" => $this->input->post('id_tentor',true),
            "tanggal" => $this->input->post('tanggal',true),
            "hari" => $this->input->post('hari',true),
            "mapel" => $this->input->post('mapel',true),
            "jam" => $this->input->post('jam',true)            
        ];
        $this->db->where('id_absensi',$id);
        $this->db->update('absensi',$data);
    }

    public function hapusAbsensi($id)
    {
        $this->db->where('id_absensi',$id);
        $this->db->delete('absensi');
    }

    public function hitungAbsensiTentorByName($id)
    {
        return $this->db->get_where('absensi',['id_tentor' => $id])->num_rows();
    }
}