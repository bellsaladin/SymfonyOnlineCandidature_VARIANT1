<?php

namespace Bse\CandidatureBundle\TCPDF;

use \TCPDF;

class CandidaturePDF extends TCPDF {

    public $headerImagePath;
    public $nomFaculte;

    //Page header
    public function Header() {
        // Logo
        $image_file = $this->headerImagePath;
        $this->Image($image_file, 'C', 5, 20, '', 'JPG', false, 'C', false, 300, 'C', false, false, 0, false, false, false);
        // Set font        
        $this->SetFont('helvetica', null, 9);        
        // Title
        //$this->Cell(0, 10, 'Université Ibn Tofail', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->writeHTML('<br/><br/><br/><br/><br/><br/><div style="text-align:center">'.$this->nomFaculte.'<br/>KENITRA</div> <hr/>', true, 0, true, 0);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }

    public function setHeaderImagePath($path){
        $this->headerImagePath = $path;
    }

    public function setNomFaculte($nomFaculte){
        $this->nomFaculte = $nomFaculte;
    }
}