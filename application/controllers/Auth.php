<?php

Class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pengguna');
        $this->load->Model('Model_siswa');
    }

    function index(){
        $this->load->view('auth/login');
    }

    function chek_login() {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $login_pengguna = $this->Model_pengguna->chek_login($username, $password);
            $login_siswa = $this->Model_siswa->chek_login($username, $password);

            if (!empty($login_pengguna)) {
                //success login for user
                $this->session->set_userdata($login_pengguna);
                redirect('Admin/Dashboard');
            } elseif (!empty($login_guru)) {
                $this->session->set_userdata($login_guru);
                redirect('Admin/Dashboard');
            } elseif (!empty($login_siswa)) {
                $this->session->set_userdata($login_siswa);
                redirect('Admin/Dashboard');
            } else {
                redirect('Auth');
            }
        }
    }
    function profil(){
        $data['pengguna'] = $this->db->get('pengguna')->result();
        $this->template->load('template', 'admin/admin', $data);
    }
    function edit() {
        if (isset($_POST['submit'])) {
     
            $this->session->set_userdata('nama',$data);
            $uploads = $this->upload();
            $this->Model_pengguna->edit($uploads);
            echo $this->session->set_flashdata('edit','success .....');  
            redirect('Auth/profil');
        }else{
            $id = $this->uri->segment(4);
            $data['pengguna'] = $this->db->get_where('pengguna', array('id' => $id))->row_array();
            $this->template->load('template', 'admin/editadmin', $data);
        }
    }
    function upload() {
        $config['upload_path'] = './Uploads/guru/';
        $config['allowed_types'] = 'png|jpg';
        $config['max_size'] = 8000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }
    function Logout() {
        $this->session->sess_destroy();
        redirect('Auth');
    }

}

?>