<?php
require_once __DIR__ . '/../functions/data.php';

$connection = get_db();

$current_week = date('W');

$meals = get_meals_from_current_year();