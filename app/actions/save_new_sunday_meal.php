<?php
require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../functions/meals.php';

$table = filter_input(INPUT_POST, 'table', FILTER_SANITIZE_SPECIAL_CHARS);
$day_id = filter_input(INPUT_POST, 'day-id', FILTER_SANITIZE_SPECIAL_CHARS);
$new_meal_id = filter_input(INPUT_POST, 'neue-mahlzeit', FILTER_SANITIZE_SPECIAL_CHARS);
$current_year = date('Y');

$save_new_meal = update_sunday_meal($table, $day_id, $new_meal_id);

if ($save_new_meal) {
  $_SESSION['success']['meal_changed'] = 'Neue Mahlzeit wurde gespeichert';
  header('Location: ' . '/public/views/index.php?year=' . $current_year . '&current-year=true');
}

if (!$save_new_meal) {
  $_SESSION['error']['meal_not_changed'] = 'Mahlzeit konnte nicht geändert werden';
  header('Location: ' . '/public/views/edit_sunday.php');
}