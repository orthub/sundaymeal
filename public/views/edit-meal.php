<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>

<div class="space"></div>
<div class="container">

  <?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>
  <?php require_once __DIR__ . '/../../app/actions/edit_meal.php' ?>

  <form action="/app/actions/save_edited_meal.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="meal-id" value="<?php echo $meal['id'] ?>">
    <input type="hidden" name="no-image-change" value="<?php echo $meal['image_path'] ?>">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Mahlzeit <b><?php echo $meal['meal']?></b>&nbspbearbeiten</h3>
      </div>
      <div class="card-body">
        <div class="form-group">

          <div class="row">
            <label for="meal" class="form-label">Name:</label>
            <input type="text" class="form-control" id="meal" name="meal-name" value="<?php echo $meal['meal'] ?>" required>
          </div>
        </div>

        <div class="space"></div>

        <div class="row">
          <label for="note" class="form-label">Notiz:</label>
          <textarea class="form-control" id="note" name="meal-note"><?php echo $meal['note'] ?></textarea>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="space"></div>
            <div class="form-group">
              <label for="image">&nbspBild&nbspausw&aumlhlen&nbsp(4:3&nbsp900x675)</label>
              <br />
              <input lang="en" type="file" name="image" id="meal_image" value="Bild auswählen..." class="form-control-file" />
            </div>
          </div>
          <div class="col-sm text-center">
            <div class="space"></div>
            <h4>Aktuelles Bild</h4>
            <div class="img-width-single">
              <img class="img-fluid" src="<?php echo $meal['image_path'] ?>" alt="Vorschaubild von <?php echo $meal['meal'] ?>">
            </div>
          </div>
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