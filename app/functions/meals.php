<?php

require_once __DIR__ . '/database.php';

function get_meals_from_year(string $year)
{ 
  $sql = 'SELECT m.id AS essen_id, m.meal AS mahlzeit, sunday_note AS notiz, m.image_path AS bild,
                 s.id AS day_id, s.kw AS kw, s.sunday_date AS sonntag, s.meal_id
          FROM ' . $year . ' s
          JOIN meals m ON s.meal_id = m.id
          ORDER BY sonntag ASC';
  $res = get_db()->query($sql);

  if (!$res) {
    return false;
  }

  return $res->fetchAll(PDO::FETCH_ASSOC);
}

function get_meal_for_sunday(string $day_id, string $table)
{
  $sql = "SELECT m.id AS essen_id, m.meal AS mahlzeit, sunday_note AS notiz, m.image_path AS bild,
          s.id AS day_id, s.kw AS kw, s.sunday_date AS sonntag, s.meal_id
          FROM $table s
          JOIN meals m ON s.meal_id = m.id
          WHERE s.id = $day_id
          LIMIT 1";
  
  $stmt = get_db()->query($sql);

  if (!$stmt) {
    return false;
  }
        
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function get_index_meals(string $year, string $week)
{
  $sql = 'SELECT m.id AS essen_id, m.meal AS mahlzeit, m.note AS notiz, m.image_path AS bild,
  s.id AS day_id, s.kw AS kw, s.sunday_date AS sonntag, s.meal_id
  FROM ' . $year . ' s
  JOIN meals m ON s.meal_id = m.id
  ORDER BY sonntag ASC
  OFFSET ' . $week . ' LIMIT 11';
  $res = get_db()->query($sql);

  if (!$res) {
    return false;
  }

  return $res->fetchAll(PDO::FETCH_ASSOC);
}

function add_new_meal(string $name, string $note, string $image): bool
{
  $sql = "INSERT INTO meals (meal, note, image_path)
          VALUES (:meal_name, :meal_note, :meal_image);";

  $stmt = get_db()->prepare($sql);
  
  $stmt->execute([':meal_name' => $name,
                  ':meal_note' => $note,
                  ':meal_image' => $image
                ]);

  if (!$stmt) {
    return false;
  }

  return true;
}

function get_all_meals()
{
  $sql = "SELECT m.id, m.meal, m.note, m.image_path
          FROM meals m
          ORDER BY m.meal ASC";
  $res = get_db()->query($sql);
  
  if (!$res) {
    return false;
  }
  
  return $res->fetchAll(PDO::FETCH_ASSOC);
}

function get_single_meal(string $meal_id)
{
  $sql = "SELECT m.id, m.meal, m.note, m.image_path
          FROM meals m
          WHERE m.id = $meal_id";

  $stmt = get_db()->query($sql);

  if (!$stmt) {
    return false;
  }

  return $stmt->fetch(PDO::FETCH_ASSOC);

}

function update_sunday_meal(string $table, string $day_id, string $new_meal): bool
{
  $sql = "UPDATE $table
          SET meal_id = $new_meal
          WHERE id = $day_id";

  $stmt = get_db()->query($sql);

  if (!$stmt) {
    return false;
  }

  return true;
}

function update_meal(string $meal_id, string $meal_name, string $meal_note, string $meal_image): bool
{
  $sql = "UPDATE meals
          SET meal = '$meal_name', note = '$meal_note', image_path = '$meal_image'
          WHERE id = $meal_id";
          
  $stmt = get_db()->query($sql);

  if (!$stmt) {
    return false;
  }

  return true;
}

function statistic(string $year, string $column, string $sort)
{
  $sql = "SELECT s.meal_id, m.meal AS mahlzeit, COUNT( meal_id)
          FROM $year s
          JOIN meals m ON s.meal_id = m.id
          GROUP BY s.meal_id, m.meal 
          ORDER BY $column $sort";
  
$stmt = get_db()->query($sql);

if (!$stmt) {
return false;
}

return $stmt->fetchAll(PDO::FETCH_ASSOC);
}