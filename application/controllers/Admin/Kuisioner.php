<?php

Class Kuisioner extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_kuisioner');
    }

    function index() {
         $data['kuisioner'] = $this->db->query("SELECT k.idkuisioner,k.soalkuisioner,k.A,k.B,k.C,k.D,k.E,p.id_paket as paket FROM kuisioner as k,paket as p WHERE k.id_paket=p.id_paket")->result();
        $this->template->load('template', 'kuisioner/list', $data);
    }

    function add() {
         if (isset($_POST['submit'])) {
            $this->Model_kuisioner->add();
            echo $this->session->set_flashdata('Berhasil....');
            redirect('Admin/kuisioner');
        } else {
  
         $this->template->load('template', 'kuisioner/list'); 
       } 
   }
   function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_kuisioner->edit();
            echo $this->session->set_flashdata('edit', 'Berhasil...');
            redirect('Admin/Kuisioner');
        } else {

            $id = $this->uri->segment(4);
            $data['kuisioner'] = $this->db->get_where('kuisioner', array('idkuisioner' => $id))->row_Array();
            $this->template->load('template', 'kuisioner/soal', $data);
        }
    }
 function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('idkuisioner', $id);
        $this->db->delete('kuisioner');
        echo $this->session->set_flashdata('Hapus', 'Berhasil Dihapus....');
        redirect('Admin/kuisioner');
    }
    function tampilsoal(){
        $data['kuisioner'] = $this->db->query("SELECT k.idkuisioner,k.soalkuisioner,k.A,k.B,k.C,k.D,k.E,k.idkuisioner as paket FROM kuisioner as k")->result();
        $this->template->load('template', 'kuisioner/tampilsoal', $data);
    }
 }


 ?>