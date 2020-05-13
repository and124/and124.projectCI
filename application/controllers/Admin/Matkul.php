<?php

Class Matkul extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_matkul');
    }

    function index() {
        $data['matkul'] = $this->db->get("matkul")->result();
        $this->template->load('template', 'matkul/list', $data);
    }

    function add() {
         if (isset($_POST['submit'])) {
            $this->Model_matkul->add($uploads);
            echo $this->session->set_flashdata('Berhasil....');
            redirect('Admin/Matkul');
        } else {
  
         $this->template->load('template', 'matkul/list'); 
       } 
   }
   function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_matkul->edit();
            echo $this->session->set_flashdata('edit', 'Berhasil...');
            redirect('Admin/Matkul');
        } else {

            $id = $this->uri->segment(4);
            $data['matkul'] = $this->db->get_where('matkul', array('id_matkul' => $id))->row_Array();
            $this->template->load('template', 'matkul/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id_matkul', $id);
        $this->db->delete('matkul');
        echo $this->session->set_flashdata('Hapus', 'Berhasil Dihapus....');
        redirect('Admin/Matkul');
    }
}

 ?>