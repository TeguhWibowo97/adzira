<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller{

    function __construct(){
        parent::__construct();
        //$this->load->library('session');
        $this->load->model('m_login');
    }

    function index(){
        $this->load->view('v_login');
    }

    public function aksi_login(){
        
        $this->load->model('m_login');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login('admin',$where)->num_rows();
        if($cek > 0){
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            $data['user'] = $this->db->get_where('admin')->row_array();
            
            $this->load->view('template/header',$data);
            // $this->load->view('home/index',$data);
            redirect(base_url()."c_home",$data);
            // var_dump($data_session['nama']);
            // var_dump($data);
        }
        else{
            ?>
            <script language="JavaScript">
                alert("Username atau Password Salah..!");
            </script>
            <?php
            $this->load->view('v_login');
        }
    }

    function logout(){
        
        $this->session->sess_destroy();
        redirect(base_url()."index.php/c_login");
    }
}
?>