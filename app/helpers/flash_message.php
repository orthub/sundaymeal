<?php
// loop through messages
if (isset($_SESSION['error'])) {
  foreach ($_SESSION['error'] as $error) {
    echo '<p class="alert alert-danger text-center">' . $error . '</p><br />';
  }
}

if (isset($_SESSION['success'])) {
  foreach ($_SESSION['success'] as $success) {
    echo '<p class="alert alert-success text-center">' . $success . '</p><br />';
  }
}

// clear variables
unset($error);
unset($success);
unset($_SESSION['error']);
unset($_SESSION['success']);