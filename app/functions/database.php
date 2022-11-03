<?php

function get_db()
{
  static $db;
  if ($db instanceof PDO) {
    return $db;
  }

  require_once __DIR__ . '/../config/config.php';

  try {
    $conn = 'pgsql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';user=' . DB_USER . ';password=' . DB_PASS;
    // $user = DB_USER;
    // $password = DB_PASS;
    $db = new PDO($conn);
  } catch (PDOException $pdo_err) {
    $_SESSION['error']['db-connection'] = 'Keine Verbindung zur Datenbank <br />' . $pdo_err;
  }
  return $db;
}