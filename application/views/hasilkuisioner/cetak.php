<?php	
	$this->fpdf->FPDF('P','cm','A4');
	$this->fpdf->AliasNbPages();
	$this->fpdf->AddPage();

	$this->fpdf->Image('uploads/mandala.jpg',17,0.7,2);

	$this->fpdf->SetFont('courier','B',14);
	$this->fpdf->Cell(1,1,'SEKOLAH TINGGI TEKNOLOGI MANDALA');	
	
	$this->fpdf->SetFont('courier','',9);
	$this->fpdf->Ln(0.5);	
	$this->fpdf->Cell(11,1,'Jl. Soekarno-Hatta No.597 (Terusan Kiaracondong)');
	
	$this->fpdf->Ln(0.5);	
	$this->fpdf->Cell(11,1,'Tlp (022) 7301738 Fax.(002) 7304854 ');

	$this->fpdf->SetFont('courier','B',10);
	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(0,1,'_______________________________________________________________________________________________',0,0,'C');

	$this->fpdf->SetFont('courier','B',10);
	$this->fpdf->Ln(1);
	$this->fpdf->Cell(0,1,'DATA REPORT HASIL KUISIONER',0,0,'C');	
	
	$this->fpdf->SetFont('courier','B',9);
	$this->fpdf->Ln(1);
	$this->fpdf->Cell(1.5,0.5,'NO',1,0,'C');		
	$this->fpdf->Cell(3,0.5,'NIP',1,0,'L');		
	$this->fpdf->Cell(3,0.5,'NAMA DOSEN',1,0,'L');	
	$this->fpdf->Cell(1,0.5,'KHDR',1,0,'L');
	$this->fpdf->Cell(1,0.5,'PKUH',1,0,'L');
	$this->fpdf->Cell(1,0.5,'MTPH',1,0,'L');
	$this->fpdf->Cell(1,0.5,'SILU',1,0,'L');
	$this->fpdf->Cell(8,0.5,'SARAN',1,0,'L');

	$this->fpdf->SetFont('courier','',9);
	$hasil_kuis =$this->db->get('hasil_kuis')->result();
	$no=1;
	foreach ($hasil_kuis as $row) {	
		$this->fpdf->Ln(0.5);
		$this->fpdf->Cell(1.5,0.5,$no,1,0,'C');		
		$this->fpdf->Cell(5,0.5,$row->nik,1,0,'L');	
		$this->fpdf->Cell(5,0.5,$row->nama,1,0,'L');		
		$this->fpdf->Cell(1,0.5,$row->total_kehad,1,0,'L');
		$this->fpdf->Cell(1,0.5,$row->total_perku,1,0,'L');
		$this->fpdf->Cell(1,0.5,$row->total_marku,1,0,'L');
		$this->fpdf->Cell(1,0.5,$row->total_silu,1,0,'L');
		$this->fpdf->Cell(8,0.5,$row->ket,1,0,'L');
		$no++;
	}
	

	$this->fpdf->Output();
?>