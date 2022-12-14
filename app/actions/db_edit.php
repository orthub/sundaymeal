<?php
require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../functions/db_edit.php';

$get_year = filter_input(INPUT_GET, 'year', FILTER_SANITIZE_SPECIAL_CHARS);

if (!isset($get_year)) {
  $current_year = date('Y');
}

$amount_meals = get_amount_meals();
//remove default value from meals
$amount_meals = --$amount_meals;

$all_years_in_db = get_all_years();
