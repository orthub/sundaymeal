<?php
require_once __DIR__ . '/../functions/menu.php';

$connection = get_db();

$database_years = get_all_sunday_tables();
str_replace('sundays_', '', $database_years);