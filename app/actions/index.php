<?php
require_once __DIR__ . '/../functions/meals.php';

// used to highlight the current week
$current_week = date('W');

// TODO add the last or next year if the result is less than five weeks before or after the current week
$week = $current_week - 6;

// help variable for highlight the actual year
if (isset($_GET['current-year'])) {
  $active_year = htmlspecialchars(filter_input(INPUT_GET, 'current-year', FILTER_SANITIZE_SPECIAL_CHARS));
}

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

// for startpage get the last and next five weeks from the current week
$meals = get_index_meals($year, (string)$week);

if (!$meals) {
  $_SESSION['error']['year_dont_exist'] = 'Für dieses Jahr existiert kein Eintrag.';
  header('Location: ' . '/public/views/error.php');
}