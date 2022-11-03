<?php
require_once __DIR__ . '/../functions/data.php';

$connection = get_db();

// used to highlight the current week
$current_week = date('W');

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

$meals = get_meals_from_year($year);