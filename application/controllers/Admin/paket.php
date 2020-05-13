<?php

Class Paket extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_paket');
    }

    function index() {
         $data['paket'] = $this->db->query()->result();
        $this->template->load('template', 'kuisioner/list', $data);
    }

    function add() {
         if (isset($_POST['submit'])) {
            $this->Model_paket->add($uploads);
            echo $this->session->set_flashdata('Berhasil....');
            redirect('Admin/kuisioner');
        } else {
  
         $this->template->load('template', 'kuisioner/soal'); 
       } 
   }
   function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_paket->edit();
            echo $this->session->set_flashdata('edit', 'Berhasil...');
            redirect('Admin/Kuisioner');
        } else {

            $id = $this->uri->segment(4);
            $data['paket'] = $this->db->get_where('paket', array('id_paket' => $id))->row_Array();
            $this->template->load('template', 'kuisioner/soal', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id_paket', $id);
        $this->db->delete('paket');
        echo $this->session->set_flashdata('Hapus', 'Berhasil Dihapus....');
        redirect('Admin/kuisioner');
    }
}

 ?>