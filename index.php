<?php
$current_year = date('Y');
require_once __DIR__ . '/app/helpers/session.php';
header('Location:' . '/public/views/index.php?year=' . $current_year);