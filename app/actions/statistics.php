<?php
require_once __DIR__ . '/../functions/meals.php';

$get_year = filter_input(INPUT_GET, 'year', FILTER_SANITIZE_SPECIAL_CHARS);
$column = filter_input(INPUT_GET, 'column', FILTER_SANITIZE_SPECIAL_CHARS);
$sort = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_SPECIAL_CHARS);

if (!isset($get_year)) {
  $selected_year = 'sundays_' . date('Y');
} else {
  $selected_year = 'sundays_' . $get_year;
}

if (!isset($column)) {
  $column = 'count';
}

if (!isset($sort)) {
  $sort = 'DESC';
}

$statistics = statistic($selected_year, $column, $sort);