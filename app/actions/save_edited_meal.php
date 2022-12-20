<?php
require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../functions/meals.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $errors = false;
  $image_uploaded = false;
  $image = '';

  $meal_id = filter_input(INPUT_POST, 'meal-id', FILTER_SANITIZE_SPECIAL_CHARS);
  // $meal_image = filter_input(INPUT_POST, 'meal-image', FILTER_SANITIZE_SPECIAL_CHARS);
  $no_image_change = filter_input(INPUT_POST, 'no-image-change', FILTER_SANITIZE_SPECIAL_CHARS);
  $meal_name = filter_input(INPUT_POST, 'meal-name', FILTER_SANITIZE_SPECIAL_CHARS);
  $meal_note = filter_input(INPUT_POST, 'meal-note', FILTER_SANITIZE_SPECIAL_CHARS);

  $target_dir = __DIR__ . '/../../public/images/';
  $target_file = $target_dir . basename($_FILES['image']['name']);
  $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // name for the meal is required
  if ((bool)$meal_name === false) {
    $_SESSION['error']['no_meal_name'] = 'Bitte einen Namen eingeben';
    $errors = true;
  }

  // check if an file will be uploaded
  if (!empty($_FILES['image']['name'])) {

    // check if file already exists
    if (file_exists($target_file)) {
      $_SESSION['error']['image_exists'] = 'Ein Bild mit dem Namen existiert bereits.';
      $errors = true;
    }

    // check file size maximum ~ 700kB
    if ($_FILES['image']['size'] > 700000) {
      $_SESSION['error']['image_size'] = 'Das Bild ist zu groß.';
      $errors = true;
    }
    
    // allow only jpg, jpeg or png files
    if($image_file_type != 'jpg' && $image_file_type != 'png' && $image_file_type != 'jpeg') {
      $_SESSION['error']['wrong_image_type'] = 'Nur .jpg, .png oder .jpeg Dateien.';
      $errors = true;
    }
      
    // upload and save image
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
      $success_msg = 'Die Datei ' . htmlspecialchars(basename( $_FILES['image']['name'])) . ' wurde hochgeladen.';
      $meal_image = '/public/images/' . htmlspecialchars(basename( $_FILES['image']['name']));
      $image_uploaded = true;
    } else {
      $_SESSION['error']['upload_failed'] = 'Bild konnte nicht hochgeladen werden.';
      $errors = true;
    }
  }

  if (!$errors) {

    if (!isset($meal_image)) {
      $image = $no_image_change;
    } else {
      $image = $meal_image;
    }

    $save_edited_meal = update_meal($meal_id, $meal_name, $meal_note, $image);

    if ($save_edited_meal) {
      $_SESSION['success']['meal-edit'] = 'Mahlzeit <b>' . $meal_name . '</b> wurde ge&aumlndert';
      header('Location: ' . '/public/views/all-meals.php');
    }

  } else {
      $_SESSION['error']['meal-edit'] = 'Mahlzeit <b>' . $meal_name . '</b> konnte nicht ge&aumlndert werden';
      header('Location: ' . '/public/views/edit-meal.php?meal-id=' . $meal_id);
    }

}