  <?php

Class Hasilkuisioner extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

    function index() {
        $data['hasil_kuis'] = $this->db->query("SELECT h.id_hasil,g.nik,g.nama,h.total_kehad,h.total_perku,h.total_marku,h.total_silu,h.ket,h.tanggal,g.nik as hasil FROM hasil_kuis as h,guru as g WHERE h.nik = g.nik")->result();
        $this->template->load('template', 'hasilkuisioner/list', $data);
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $data=array(
      
                'total_kehad'=> $this->input->post('total_kehad'),
                'total_perku'   => $this->input->post('total_perku'),
                'total_marku'  => $this->input->post('total_marku'),
                'total_silu'    => $this->input->post('total_silu'),
                'ket'  => $this->input->post('ket'),
            
            );
            $id_hasil=$this->input->post('id_hasil');
            $this->db->where('id_hasil',$id_hasil);
            $this->db->update('hasil_kuis',$data);
            echo $this->session->set_flashdata('edit', 'Berhasil...');
            redirect('Admin/hasilkuisioner');
        }
        else {

            $id = $this->uri->segment(4);
            $data['hasil_kuis'] = $this->db->get_where('hasil_kuis', array('id_hasil' => $id))->row_Array();
            $this->template->load('template', 'hasilkuisioner/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id_hasil', $id);
        $this->db->delete('hasil_kuis');
        echo $this->session->set_flashdata('Hapus', 'Berhasil Dihapus....');
        redirect('Admin/hasilkuisioner');
    }
    
}

 ?>
