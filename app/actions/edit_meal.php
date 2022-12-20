<?php
require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../functions/meals.php';

$meal_id = filter_input(INPUT_GET, 'meal-id', FILTER_SANITIZE_SPECIAL_CHARS);
$back = filter_input(INPUT_GET, 'back', FILTER_SANITIZE_SPECIAL_CHARS);

$meal = get_single_meal($meal_id);