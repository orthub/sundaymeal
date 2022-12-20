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

  unset($year);

  if (!$res) {
    return false;
  }

  return true;
}

// returns true if the table exist
function check_year(string $year)
{
  $sql = "SELECT table_name FROM information_schema.tables
          WHERE table_name LIKE '$year'";
  $res = get_db()->query($sql);
  $stmt = $res->fetchAll();

  unset($year);

  if (empty($stmt)) {
    return false;
  }

  return true;
}

function get_all_sundays_from_year(string $start_date, string $end_date, string $week_number)
{
    $start_date = strtotime($start_date);
    $end_date = strtotime($end_date);
    $sundays = array();
    do
    {
      if(date("w", $start_date) != $week_number) {
          $start_date += (24 * 3600); // add 1 day
      }
    } while(date("w", $start_date) != $week_number);
    
    while($start_date <= $end_date) {
        $sundays[] = date('Y-m-d', $start_date);
        $start_date += (7 * 24 * 3600); // add 7 days
    }

    unset($start_date);
    unset($end_date);
    unset($week_number);

    return($sundays);
}

function add_new_year(string $year)
{
  $sql = "CREATE TABLE sundays_$year (
          id SERIAL PRIMARY KEY NOT NULL,
          kw INT NOT NULL,
          sunday_note TEXT,
          sunday_date DATE NOT NULL,
          meal_id INTEGER REFERENCES meals (id) DEFAULT 1
  )";
  $res = get_db()->query($sql);

  unset($year);

  if ($res) {
    return true;
  }

  return false;
}

function insert_sundays(string $year, string $table)
{
  $sql = '';
  $variable = '';
  $sundays = get_all_sundays_from_year($year . '-01-01', $year . '-12-31', 0);

  foreach($sundays as $week_number => $sunday) {
    $kw = $week_number + 1;
    $variable .= "($kw, '$sunday'),";
  }

  $sql = "INSERT INTO $table (kw, sunday_date) VALUES $variable";
  $sql = substr($sql, 0, -1);
  $stmt = get_db()->query($sql);

  unset($year);
  unset($table);

  if (!$stmt) {
    return false;
  }

  return true;
}