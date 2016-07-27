<?php
// Creación del objeto de la clase heredada

$this->_pdf->AliasNbPages();
$this->_pdf->AddPage();
$this->_pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $this->_pdf->Cell(0,10,utf8_decode('Imprimiendo línea número ').$i,0,1);
$this->_pdf->Output();
 ?>
