<?php

class Jadwal_model extends CI_model{

    public function getAllJadwalSiswa()
    {
        return $this->db->get('jadwal')->result_array();
    }

    public function getJadwalSiswaById($id)
    {
        return $this->db->get_where('jadwal',['id_siswa' => $id])->result_array();
    }
    public function getJadwalById($id)
    {
        return $this->db->get_where('jadwal',['id_jadwal' => $id])->row_array();
    }

    public function tambahJadwal()
    {
        $data = [
            "id_siswa" => $this->input->post('id_siswa',true),
            "id_tentor" => $this->input->post('id_tentor',true),
            "hari" => $this->input->post('hari',true),
            "jam" => $this->input->post('jam',true),
            "mapel" => $this->input->post('mapel',true)
        ];

        $this->db->insert('jadwal',$data);
    }

    public function ubahJadwal($id)
    {
        $data = [
            "id_siswa" => $this->input->post('id_siswa',true),
            "id_tentor" => $this->input->post('id_tentor',true),
            "hari" => $this->input->post('hari',true),
            "jam" => $this->input->post('jam',true),
            "mapel" => $this->input->post('mapel',true)
        ];

        $this->db->where('id_jadwal',$id);
        $this->db->update('jadwal',$data);

    }

    public function hapusJadwal($id)
    {
        $this->db->where('id_jadwal',$id);
        $this->db->delete('jadwal');
    }
}
