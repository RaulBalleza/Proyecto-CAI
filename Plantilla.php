<?php
    require './fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
            $this->Image('./assets/img/logoUPV.png', 20, 6, 30 );
			$this->SetFont('Arial','B',20);
			$this->Cell(50);
			$this->Cell(120,10, 'Reporte De Estados',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>