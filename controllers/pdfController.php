<?php


class pdfController extends Controller
{

  private $_pdf;

  function __construct()
  {
    parent::__construct();
    $this->getLibrary('pdf');
    $this->_pdf = new PDF();
  }

  public function index()
  {
    # code...
  }

  public function pdf1($nombre,$apellido)
  {

    $this->_pdf->AddPage();
    $this->_pdf->SetFont('Arial','B',16);
    $this->_pdf->Cell(40,10,utf8_decode($nombre.' '.$apellido));
    $this->_pdf->Output();
  }

  public function pdf2()
  {
    require_once ROOT.'public'.DS.'files'.DS.'pdf2.php';
  }
}
 ?>
