<?php
require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../functions/meals.php';

$year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_SPECIAL_CHARS);
$back = filter_input(INPUT_POST, 'back', FILTER_SANITIZE_SPECIAL_CHARS);
$table = filter_input(INPUT_POST, 'table', FILTER_SANITIZE_SPECIAL_CHARS);
$day_id = filter_input(INPUT_POST, 'day-id', FILTER_SANITIZE_SPECIAL_CHARS);
$new_meal_id = filter_input(INPUT_POST, 'neue-mahlzeit', FILTER_SANITIZE_SPECIAL_CHARS);
$note = filter_input(INPUT_POST, 'sunday-note', FILTER_SANITIZE_SPECIAL_CHARS);
$current_year = date('Y');

$save_new_meal = update_sunday_meal($table, $day_id, $new_meal_id, $note);

if ($save_new_meal) {
  $_SESSION['success']['meal_changed'] = 'Neue Mahlzeit wurde gespeichert';
  header('Location: ' . '/public/views/' . $back . '?year=' . $year);
  // header('Location: ' . '/public/views/index.php?year=' . $current_year . '&current-year=true');
}

if (!$save_new_meal) {
  $_SESSION['error']['meal_not_changed'] = 'Mahlzeit konnte nicht geändert werden';
  header('Location: ' . '/public/views/edit-sunday.php');
}