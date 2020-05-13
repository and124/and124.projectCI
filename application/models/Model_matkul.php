<?php

Class Model_matkul extends CI_Model {

    function add($uploads){
          $data=array(
            'id_matkul'       => $this->input->post('id_matkul'),
            'nama_matkul'       => $this->input->post('nama_matkul'),
            'kodematkul'=> $this->input->post('kodematkul'),

        );
        
        $this->db->insert('matkul', $data);
    }
        
    
    
    function edit(){
        $data=array(
             'nama_matkul'       => $this->input->post('nama_matkul'),
            'kodematkul'=> $this->input->post('kodematkul'),
        );
        $id_matkul=$this->input->post('id_matkul');
        $this->db->where('id_matkul',$id_matkul);
        $this->db->update('matkul',$data);
    }
}
?>

