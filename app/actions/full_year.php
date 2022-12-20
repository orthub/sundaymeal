<?php
require_once __DIR__ . '/../functions/meals.php';

// filter url param 
if (isset($_GET['year'])) {
  $year = htmlspecialchars(filter_input(INPUT_GET, 'year', FILTER_SANITIZE_SPECIAL_CHARS));
}

// if no url param is given, get the current year for the table
if (!isset($year)){
  $current_year = date('Y');
  $db_year = 'sundays_' . $current_year;
} else {
  $db_year = 'sundays_' . $year;
}

// get all meals from choosen year
$meals = get_meals_from_year($db_year);

if (!$meals) {
  $_SESSION['error']['year_dont_exist'] = 'Für dieses Jahr existiert kein Eintrag.';
  header('Location: ' . '/public/views/error.php');
}