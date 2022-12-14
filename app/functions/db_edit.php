<?php

require_once __DIR__ . '/database.php';

function get_amount_meals()
{
  $sql = 'SELECT COUNT(id)
          FROM meals';
  $res = get_db()->query($sql);

  if (!$res) {
    return false;
  }

  return $res->fetch(PDO::FETCH_COLUMN);
}

function get_all_years()
{
  $sql = "SELECT table_name FROM information_schema.tables
  WHERE table_name LIKE 'sundays%'
  ORDER BY table_name ASC";
  $res = get_db()->query($sql);

  if (!$res) {
    return false;
  }

  return $res->fetchAll(PDO::FETCH_ASSOC);
}

function delete_year_from_database(string $year): bool
{
  $sql = "DROP TABLE sundays_$year";

  $res = get_db()->query($sql);

  if (!$res) {
    return false;
  }

  return true;
}