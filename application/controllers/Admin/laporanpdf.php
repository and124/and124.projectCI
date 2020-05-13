<?php
Class Laporanpdf extends CI_Controller{
    
	function __construct() {
		parent::__construct();
		$this->load->library('fpdf');
	
        
    }

    function index() {
		
		$this->load->view('hasilkuisioner/cetak');
    }
}
?>