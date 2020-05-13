<?php

Class Teskuisioner extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_tes');
    }
    function index(){
        $data['tes'] = $this->db->query("SELECT t.id_tes,s.nis,g.nama,m.nama_matkul,t.tanggal,t.id_tes as teskuisioner FROM tes as t,siswa as s, guru as g,matkul as m WHERE t.id_tes and t.nis=s.nis")->result();
        $this->template->load('template', 'hasilkuisioner/teskuis', $data);
    }

    function add (){
        if (isset($_POST['submit'])) {
            $this->Model_tes->add();
            redirect('Admin/teskuisioner/tampil/?nik='.$this->input->post('nama'));
        }
        else {
            $this->template->load('template', 'hasilkuisioner/teskuis', $data);
        }
    }
    function tampil(){
        $data['kuisioner'] = $this->db->query("SELECT k.idkuisioner,k.soalkuisioner,k.A,k.B,k.C,k.D,k.E,p.id_paket as paket FROM kuisioner as k,paket as p WHERE k.id_paket=p.id_paket")->result();
        $this->template->load('template', 'kuisioner/tampilsoal', $data);
    }
    function hitung(){
        // $data['kuisioner'] = $this->db->query("SELECT k.idkuisioner,k.soalkuisioner,k.A,k.B,k.C,k.D,k.E,p.id_paket as paket FROM kuisioner as k,paket as p WHERE k.id_paket=p.id_paket")->result();
        // print_r($this->input->post('jawaban'));die;
        $arrKehad = array();
        $arrPerku = array();
        $arrMarku = array();
        $arrSilu = array();
        for ($i=0; $i < count($this->input->post('jawaban')); $i++) {
            $temp_id = explode("-", $this->input->post('jawaban')[$i]);    
            if ($temp_id[1] == 10) {
                array_push($arrKehad, $temp_id[0]);
            }
            else if ($temp_id[1] == 20) {
                array_push($arrPerku, $temp_id[0]);
            }
            else if ($temp_id[1] == 30) {
                array_push($arrMarku, $temp_id[0]);
            }
            else if ($temp_id[1] == 40) {
                array_push($arrSilu, $temp_id[0]);
            }
            // print_r($temp_id[1]);
        }
        print_r($arrKehad); echo"<br>";
        print_r($arrPerku); echo"<br>";
        print_r($arrMarku); echo"<br>";
        print_r($arrSilu); echo"<br>";
        
        $totalKehad = 0;
        $totalPerku = 0;
        $totalMarku = 0;
        $totalSilu = 0;

        for ($i=0; $i < count($arrKehad); $i++) {
            $nilaiSatuan = 100/count($arrKehad)/4;
            if ($arrKehad[$i] == 'A') {
                $totalKehad = $totalKehad + ($nilaiSatuan*4);
            }
            else if ($arrKehad[$i] == 'B') {
                $totalKehad = $totalKehad + ($nilaiSatuan*3);
            }
            else if ($arrKehad[$i] == 'C') {
                $totalKehad = $totalKehad + ($nilaiSatuan*2);
            }
            else if ($arrKehad[$i] == 'D') {
                $totalKehad = $totalKehad + ($nilaiSatuan*1);
            }
        }
        for ($i=0; $i < count($arrPerku); $i++) {
            $nilaiSatuan = 100/count($arrPerku)/4;
            if ($arrPerku[$i] == 'A') {
                $totalPerku = $totalPerku + ($nilaiSatuan*4);
            }
            else if ($arrPerku[$i] == 'B') {
                $totalPerku = $totalPerku + ($nilaiSatuan*3);
            }
            else if ($arrPerku[$i] == 'C') {
                $totalPerku = $totalPerku + ($nilaiSatuan*2);
            }
            else if ($arrPerku[$i] == 'D') {
                $totalPerku = $totalPerku + ($nilaiSatuan*1);
            }
        }
        for ($i=0; $i < count($arrMarku); $i++) {
            $nilaiSatuan = 100/count($arrMarku)/4;
            if ($arrMarku[$i] == 'A') {
                $totalMarku = $totalMarku + ($nilaiSatuan*4);
            }
            else if ($arrMarku[$i] == 'B') {
                $totalMarku = $totalMarku + ($nilaiSatuan*3);
            }
            else if ($arrMarku[$i] == 'C') {
                $totalMarku = $totalMarku + ($nilaiSatuan*2);
            }
            else if ($arrMarku[$i] == 'D') {
                $totalMarku = $totalMarku + ($nilaiSatuan*1);
            }
        }
        for ($i=0; $i < count($arrSilu); $i++) {
            $nilaiSatuan = 100/count($arrSilu)/4;
            if ($arrSilu[$i] == 'A') {
                $totalSilu = $totalSilu + ($nilaiSatuan*4);
            }
            else if ($arrSilu[$i] == 'B') {
                $totalSilu = $totalSilu + ($nilaiSatuan*3);
            }
            else if ($arrSilu[$i] == 'C') {
                $totalSilu = $totalSilu + ($nilaiSatuan*2);
            }
            else if ($arrSilu[$i] == 'D') {
                $totalSilu = $totalSilu + ($nilaiSatuan*1);
            }
        }
        
        if ($totalKehad >= 0 && $totalKehad < 25) {
            $bakuKehad = 'D';
        }
        else if ($totalKehad >= 25 && $totalKehad < 50) {
            $bakuKehad = 'C';
        }
        else if ($totalKehad >= 50 && $totalKehad < 75) {
            $bakuKehad = 'B';
        }
        else if ($totalKehad >= 75) {
            $bakuKehad = 'A';
        }
        
        if ($totalPerku >= 0 && $totalPerku < 25) {
            $bakuPerku = 'D';
        }
        else if ($totalPerku >= 25 && $totalPerku < 50) {
            $bakuPerku = 'C';
        }
        else if ($totalPerku >= 50 && $totalPerku < 75) {
            $bakuPerku = 'B';
        }
        else if ($totalPerku >= 75) {
            $bakuPerku = 'A';
        }
        
        if ($totalMarku >= 0 && $totalMarku < 25) {
            $bakuMarku = 'D';
        }
        else if ($totalMarku >= 25 && $totalMarku < 50) {
            $bakuMarku = 'C';
        }
        else if ($totalMarku >= 50 && $totalMarku < 75) {
            $bakuMarku = 'B';
        }
        else if ($totalMarku >= 75) {
            $bakuMarku = 'A';
        }
        
        if ($totalSilu >= 0 && $totalSilu < 25) {
            $bakuSilu = 'D';
        }
        else if ($totalSilu >= 25 && $totalSilu < 50) {
            $bakuSilu = 'C';
        }
        else if ($totalSilu >= 50 && $totalSilu < 75) {
            $bakuSilu = 'B';
        }
        else if ($totalSilu >= 75) {
            $bakuSilu = 'A';
        }
        echo "total kehad = ".$bakuKehad."<br>";
        echo "total perku = ".$bakuPerku."<br>";
        echo "total perku = ".$bakuMarku."<br>";
        echo "total perku = ".$bakuSilu."<br>";
        $this->Model_tes->add_hasil_kuis($bakuKehad, $bakuPerku, $bakuMarku, $bakuSilu);
        redirect('Admin/teskuisioner');
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
