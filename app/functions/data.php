<?php

require_once __DIR__ . '/database.php';

function get_meals_from_year(string $year)
{ 
  $sql = 'SELECT m.id AS essen_id, m.meal AS mahlzeit, m.grilling AS grillen, m.note AS notiz, m.image_path AS bild,
                 s.id AS day_id, s.kw AS kw, s.sunday_date AS sonntag, s.meal_id
          FROM ' . $year . ' s
          JOIN meals m ON s.meal_id = m.id
          ORDER BY kw ASC';
  $res = get_db()->query($sql);

  if (!$res) {
    return false;
  }

  return $res->fetchAll(PDO::FETCH_ASSOC);
}