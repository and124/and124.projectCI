<?php

Class Model_paket extends CI_Model {

    function add($uploads){
          $data=array(
            'id_paket'       => $this->input->post('id_paket'),
            'paket'       => $this->input->post('paket'),

        );
        
        $this->db->insert('paket', $data);
    }
        
    
    
    function edit(){
        $data=array(
            'id_paket'       => $this->input->post('id_paket'),
            'paket'       => $this->input->post('paket'),
        );
        $idkuisioner=$this->input->post('id_paket');
        $this->db->where('id_paket',$id_paket);
        $this->db->update('paket',$data);
    }
}
?>

