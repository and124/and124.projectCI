<?php

Class Guru extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_guru');
    }

    function index() {
        $data['guru'] = $this->db->get('guru')->result();
        $this->template->load('template', 'guru/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $uploads = $this->upload();
            $this->Model_guru->add($uploads);
            echo $this->session->set_flashdata('Berhasil', 'Berhasil Menambahkan Dosen....');
            redirect('Admin/Guru');
        } else {
            $this->template->load('template', 'guru/list');
        }
    }

    function edit() {
      
        if (isset($_POST['submit'])) {
            $uploads = $this->upload();
            $this->Model_guru->edit($uploads);
            echo $this->session->set_flashdata('edit', 'Berhasil edit Dosen....');
            redirect('Admin/Guru');
        } else {

            $id = $this->uri->segment(4);
            $data['guru'] = $this->db->get_where('guru', array('nik' => $id))->row_Array();
            $this->template->load('template', 'guru/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('nik', $id);
        $this->db->delete('guru');
        echo $this->session->set_flashdata('Hapus', 'Berhasil Menghapus Dosen....');
        redirect('Admin/Guru');
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
  
    

    
}

?>