<?php
// get the existing tables for all years
require_once __DIR__ . '/../functions/menu.php';

$current_year = date('Y');

$database_years = get_all_sunday_tables();