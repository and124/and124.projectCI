<?php

Class Model_guru extends CI_Model {

    function chek_login($username, $password) {

        $guru = $this->db->get('guru')->row_Array();
        return $guru;
    }

    function add($uploads) {
        $data = array(
            'nama'     => $this->input->post('nama'),
            'nik'      => $this->input->post('nik'),
            'alamat'   => $this->input->post('alamat'),
            'telepon'   => $this->input->post('telepon'),
            'foto'     => $uploads,

        );
        $this->db->insert('guru',$data);
    }
    
    
    function edit($uploads){
        $data=array(
            'nama'=> $this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'telepon'   => $this->input->post('telepon'),
            'foto'     => $uploads,
        );
       $nik=$this->input->post('nik');
       $this->db->where('nik',$nik);
       $this->db->update('guru',$data);
    }

}
?>

