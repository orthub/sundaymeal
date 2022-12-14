<?php
require_once __DIR__ . '/../helpers/session.php';

require_once __DIR__ . '/../lib/pdf.php';

// filter url param 
if (isset($_GET['year'])) {
  $get_year = htmlspecialchars(filter_input(INPUT_GET, 'year', FILTER_SANITIZE_SPECIAL_CHARS));
}

$root_path = $_SERVER['DOCUMENT_ROOT'];
$file = '/public/storage/pdf/' . 'Jahresplan_' . $get_year . '.pdf';
$file_path = $root_path . $file;

// Download the file if exists
if (file_exists($file_path)) {
  //Define header information
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="' . basename("Jahresplan_" . $get_year) . '"');
  header('Content-Length: ' . filesize($file_path));
  header('Pragma: public');

  //Clear system output buffer
  flush();

  //Read the size of the file
  readfile($file_path);

  exit();
}

// Create pdf file
if (!file_exists($file_path)) {
  require_once __DIR__ . '/../functions/meals.php';
  $year_meals = get_meals_from_year('sundays_' . $get_year);

  // instantiate and use the FPDF class
  $pdf = new SundayMealPDF('P', 'mm', 'A4');
  $pdf->AddPage();
  $pdf->SetFont('Arial','',12);
  foreach ($year_meals as $meal) {
    $pdf->Cell(0,6, $meal['sonntag'] . ' ' . $meal['mahlzeit'], 0, 1);
  }
  
  // Create the file and download it
  $pdf->Output('F', $file_path, true);
  $pdf->Output('D', 'Jahresplan_ ' . $get_year .'.pdf', true);

  //Clear system output buffer
  flush();

  if (!$pdf) {
    $_SESSION['error']['pdf-not-saved'] = 'Jahresplan konnte nicht gespeichert werden';
  } else {
    $_SESSION['success']['pdf-saved'] = 'Jahresplan wurde gespeichert';
  }
 
  header('Location: ' . '/public/views/db_edit.php');
}