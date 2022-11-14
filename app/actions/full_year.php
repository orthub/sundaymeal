<?php
require_once __DIR__ . '/../functions/meals.php';

// filter url param 
if (isset($_GET['year'])) {
  $get_year = htmlspecialchars(filter_input(INPUT_GET, 'year', FILTER_SANITIZE_SPECIAL_CHARS));
}

// if no url param is given, get the current year for the table
if (!isset($get_year)){
  $current_year = date('Y');
  $year = 'sundays_' . $current_year;
} else {
  $year = 'sundays_' . $get_year;
}

// get all meals from choosen year
$meals = get_meals_from_year($year);

if (!$meals) {
  $_SESSION['error']['year_dont_exist'] = 'Für dieses Jahr existiert kein Eintrag.';
  header('Location: ' . '/public/views/error.php');
}