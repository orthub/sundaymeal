<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/actions/new_meal.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>
<div class="space"></div>
<div class="container">
  <?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>
  <form action="/app/actions/new_meal.php" method="POST" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Neue Mahlzeit zur Datenbank hinzufügen</h3>
      </div>
      <div class="card-body">
        <div class="form-group">

          <div class="space"></div>

          <div class="row">
            <label for="meal" class="form-label">Name:</label>
            <input type="text" class="form-control" id="meal" name="new_meal" required>
          </div>
        </div>

        <div class="space"></div>

        <div class="row">
          <label for="note" class="form-label">Notiz:</label>
          <textarea class="form-control" id="note" name="meal_note"></textarea>
        </div>

        <div class="space"></div>

        <div class="form-group">
          <label for="image">Bild auswählen</label>
          <br />
          <input lang="en" type="file" name="image" id="meal_image" value="Bild auswählen..." class="form-control-file" />
        </div>

        <div class="space"></div>

      </div>
      <div class="card-footer">
        <a class="btn btn-danger" href="/public/views/index.php?year=<?php echo $current_year ?>&current-year=true">Abbrechen</a>
        <div class="float-right">
          <button type="submit" class="btn btn-success">Speichern</button>
        </div>
      </div>
    </div>
  </form>
</div>


<?php require_once __DIR__ . '/../parts/footer.php' ?>