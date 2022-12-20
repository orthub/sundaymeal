<?php
require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../functions/db_edit.php';

$new_db_year = filter_input(INPUT_POST, 'new-year', FILTER_SANITIZE_SPECIAL_CHARS);

$year   = $new_db_year;
$check_year = 'sundays_' . $year;

$year_exists = check_year($check_year);

// if the year dont exist, create a new table and add the sundays
if (!$year_exists) {
  $create_new_year = add_new_year($year);

  if ($create_new_year) {
    $created_year = 'sundays_' . $year;
    $insert_sundays = insert_sundays($year, $created_year);

    if (!$insert_sundays) {
      $_SESSION['error']['insert-sundays'] = 'Sonntage konnten nicht eingefügt werden';
      header('Location: ' . '/public/views/add-year.php');
    } else {
      $_SESSION['success']['year-added'] = 'Neues Jahr hinzugef&uumlgt';
      header('Location: ' . '/public/views/db-edit.php');
    }
  }
} else {
  $_SESSION['error']['year-exist'] = 'Das Jahr <b>' . $year . '</b> existiert schon';
  header('Location: ' . '/public/views/add-year.php');
}
