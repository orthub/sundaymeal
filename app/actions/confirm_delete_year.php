<?php
require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../functions/db_edit.php';

$get_year = filter_input(INPUT_GET, 'year', FILTER_SANITIZE_SPECIAL_CHARS);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $delete = delete_year_from_database($get_year);

  if ($delete) {
    $_SESSION['success']['year-deleted'] = 'Jahr ' . $get_year . ' aus der Datenbank gelöscht';
  } else {
    $_SESSION['error']['year-not-deleted'] = 'Jahr ' . $get_year . ' konnte nicht gelöscht werden';
  }
  header('Location: ' . '/public/views/db-edit.php');
}