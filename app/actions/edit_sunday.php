<?php
require_once __DIR__ . '/../functions/meals.php';

$year= filter_input(INPUT_GET, 'year', FILTER_SANITIZE_SPECIAL_CHARS);
$day_id = filter_input(INPUT_GET, 'day-id', FILTER_SANITIZE_SPECIAL_CHARS);
$back = filter_input(INPUT_GET, 'back', FILTER_SANITIZE_SPECIAL_CHARS);

$table = 'sundays_' . $year;

// current meal
$sunday_and_meal = get_meal_for_sunday($day_id, $table);

// for dropdown
$all_meals = get_all_meals();