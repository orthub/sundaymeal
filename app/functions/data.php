<?php

require_once __DIR__ . '/database.php';

function get_meals_from_current_year()
{
  $current_year = date('Y');
  $table_year = 'sundays_' . $current_year;
  
  $sql = 'SELECT m.id AS meal_id, m.meal AS mahlzeit, m.grilling AS grillen, m.note AS notiz, m.image_path AS bild,
                 s.id AS day_id, s.kw AS kw, s.sunday_date AS sonntag, s.meal_id AS essen_id
          FROM meals m, ' . $table_year . ' s';
  $res = get_db()->query($sql);

  return $res->fetchAll();
}