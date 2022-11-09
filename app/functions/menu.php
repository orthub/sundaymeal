<?php

require_once __DIR__ . '/database.php';

function get_all_sunday_tables()
{ 
  $sql = "SELECT table_name FROM information_schema.tables
          WHERE table_name LIKE 'sundays%'
          ORDER BY table_name DESC";
  $res = get_db()->query($sql);

  if (!$res) {
    return false;
  }

  return $res->fetchAll(PDO::FETCH_ASSOC);
}