<?php

require_once __DIR__ . '/database.php';

function get_meals_from_current_year()
{
  $current_year = date('Y');
  $table_year = 'sundays_' . $current_year;
  
  $sql = 'SELECT m.id AS essen_id, m.meal AS mahlzeit, m.grilling AS grillen, m.note AS notiz, m.image_path AS bild,
                 s.id AS day_id, s.kw AS kw, s.sunday_date AS sonntag, s.meal_id
          FROM ' . $table_year . ' s
          JOIN meals m ON s.meal_id = m.id
          ORDER BY kw ASC';
  $res = get_db()->query($sql);

  return $res->fetchAll();
}