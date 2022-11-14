<?php
require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../functions/meals.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $errors = false;

  $meal_name = filter_input(INPUT_POST, 'new_meal', FILTER_SANITIZE_SPECIAL_CHARS);
  $meal_note = filter_input(INPUT_POST, 'meal_note', FILTER_SANITIZE_SPECIAL_CHARS);

  $target_dir = __DIR__ . '/../../public/images/';
  $target_file = $target_dir . basename($_FILES['image']['name']);
  $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // name for the meal is required
  if((bool)$meal_name === false) {
    $_SESSION['error']['no_meal_name'] = 'Bitte einen Namen eingeben';
    $errors = true;
  }

  // check if image file is a actual image or fake image
  if(isset($_POST['submit'])) {
    $check = getimagesize($_FILES['image']['tmp_name']);
    if($check === false) {
      $_SESSION['error']['no_image_type'] = 'Die Datei ist kein Bild.';
      $errors = true;
    }
  }

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
    $errors = 1;
  }

  if ($errors === false) {

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
      $success_msg = 'Die Datei ' . htmlspecialchars(basename( $_FILES['image']['name'])) . ' wurde hochgeladen.';
      $meal_image = '/public/images/' . htmlspecialchars(basename( $_FILES['image']['name']));
      $image_uploaded = true;
    } else {
      $_SESSION['error']['upload_failed'] = 'Bild konnte nicht hochgeladen werden.';
      $errors = true;
    }

    if ($errors === false) {

      // empty string for note
      if((bool)$meal_note === false) {
        $meal_note = '';
      }

      // set default image if none is uploaded
      if((bool)$image_uploaded === false) {
        $meal_image = '/public/images/default.jpg';
      }
    
      $new_meal = add_new_meal($meal_name, $meal_note, $meal_image);

      if($new_meal) {
        $_SESSION['success']['new_meal'] = 'Neue Mahlzeit wurde hinzugefügt';
        header('Location: ' . '/public/views/index.php');
      }
    }
  } else {
    header('Location: ' . '/public/views/new_meal.php');
    exit();
  }
}