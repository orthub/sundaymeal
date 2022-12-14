<?php

require_once __DIR__ . '/fpdf.php';

class SundayMealPDF extends FPDF
{
// Page header
  function Header()
  {
      // Arial bold 15
      $this->SetFont('Arial','B',14);
      // Move to the right
      $this->Cell(80);
      // Title
      $this->Cell(30,10,'Jahresplan',1,0,'C');
      // Line break
      $this->Ln(20);
  }
}