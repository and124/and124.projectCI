<?php

Class Model_kuisioner extends CI_Model {

    function add(){
          $data=array(
            'idkuisioner'       => $this->input->post('idkuisioner'),
            'soalkuisioner'       => $this->input->post('soalkuisioner'),
            'A'=> $this->input->post('A'),
            'B'   => $this->input->post('B'),
            'C'  => $this->input->post('C'),
            'D'    => $this->input->post('D'),
            'E'  => $this->input->post('E'),
            'id_paket'=>$this->input->post('id_paket'),

        );
        
        $this->db->insert('kuisioner', $data);
    }
        
    
    
    function edit(){
        $data=array(
            'soalkuisioner'       => $this->input->post('soalkuisioner'),
            'A'=> $this->input->post('A'),
            'B'   => $this->input->post('B'),
            'C'  => $this->input->post('C'),
            'D'    => $this->input->post('D'),
            'E'  => $this->input->post('E'),
            'id_paket'=>$this->input->post('id_paket'),
        );
        $idkuisioner=$this->input->post('idkuisioner');
        $this->db->where('idkuisioner',$idkuisioner);
        $this->db->update('kuisioner',$data);
    }
    function tampil(){
        $data=array(
            'idkuisioner'       => $this->input->post('idkuisioner'),
            'soalkuisioner'       => $this->input->post('soalkuisioner'),
            'A'=> $this->input->post('A'),
            'B'   => $this->input->post('B'),
            'C'  => $this->input->post('C'),
            'D'    => $this->input->post('D'),
            'E'  => $this->input->post('E'),
        );
        $idkuisioner=$this->input->post('idkuisioner');
        $this->db->where('idkuisioner',$idkuisioner);
        $this->db->update('kuisioner',$data);
    }
}

?>

