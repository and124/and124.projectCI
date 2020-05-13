<?php

Class Model_tes extends CI_Model {

    function add(){
        $data=array(
      
            'id_tes'=> $this->input->post('id_tes'),
            'nis'   => $this->session->userdata('nis'),
            'nama'  => $this->input->post('nama'),
            'nama_matkul'    => $this->input->post('nama_matkul'),
      
            'tanggal'  =>date("Y-m-d"),
        );
        
        $this->db->insert('tes', $data);
    }

    function add_hasil_kuis($bakuKehad, $bakuPerku, $bakuMarku, $bakuSilu){
        $data=array(
      
            'nik'           => $this->input->post('nik'),
            'total_kehad'   => $bakuKehad,
            'total_perku'   => $bakuPerku,
            'total_marku'   => $bakuMarku,
            'total_silu'    => $bakuSilu,
            'ket'           => $this->input->post('ket'),
            'tanggal'       => date("Y-m-d"),
            'nama'           =>'',
        );
        
        $this->db->insert('hasil_kuis', $data);
    }
        
    
}
?>

