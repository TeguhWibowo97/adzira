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

}