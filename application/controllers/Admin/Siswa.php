<?php

class Siswa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_siswa');
    }

    function index() {
        $data['siswa'] = $this->db->get('siswa')->result();
        $this->template->load('template', 'siswa/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $uploads = $this->upload();
            $this->Model_siswa->add($uploads);
            echo $this->session->set_flashdata('Berhasil', 'Berhasil Menambahkan Mahasiswa....');
            redirect('Admin/Siswa');
        } else {
            $this->template->load('template', 'siswa/list');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $uploads = $this->upload();
            $this->Model_siswa->edit($uploads);
            echo $this->session->set_flashdata('edit','success edit Mahasiswa.....');  
            redirect('Admin/Siswa');
        }else{
            $id = $this->uri->segment(4);
            $data['siswa'] = $this->db->get_where('siswa', array('nis' => $id))->row_array();
            $this->template->load('template', 'siswa/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('nis', $id);
        $this->db->delete('siswa');
        echo $this->session->set_flashdata('Hapus', 'Berhasil Menghapus Mahasiswa....');
        redirect('Admin/siswa');
    }

    function upload() {
        $config['upload_path'] = './Uploads/siswa/';
        $config['allowed_types'] = 'png|jpg';
        $config['max_size'] = 8000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }
     function update() {
        if (isset($_POST['submit'])) {
            if (!empty($this->session->userdata('nis'))) {

                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                );
                $this->db->where('nis', $this->session->userdata('nis'));
                $this->db->update('siswa', $data);

            } else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                );
                $this->db->where('id', $this->session->userdata('id'));
                $this->db->update('pengguna', $data);
            }
        }
       echo $this->session->set_flashdata('Update', 'Berhasil Update password....');
        redirect('Admin/Dashboard');
    }
    function ganti(){
        $data['siswa'] = $this->db->get('siswa')->result();
        $this->template->load('template', 'auth/gantipassword', $data);
    }
    function gantiprofil() {
        if (isset($_POST['submit'])) {
            $this->session->set_userdata($data1);
            $uploads = $this->upload();
            $this->Model_siswa->editprofil($uploads);
            echo $this->session->set_flashdata('edit','success edit Mahasiswa.....');  
            redirect('Admin/Siswa/ganti');
        }else{
            $id = $this->uri->segment(4);
            $data['siswa'] = $this->db->get_where('siswa', array('nis' => $id))->row_array();
            $this->template->load('template', 'auth/editprofil', $data);
        }
    }
}

?>