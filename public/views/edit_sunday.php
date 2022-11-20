<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/actions/edit_sunday.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>

<div class="space"></div>
<div class="container">

  <?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>
  <h4>Aktuell geplante Mahlzeit</h4>
  <div class="row">
    <div class="col-md-4">
      <td><img style="width:100%" src="<?php echo $sunday_and_meal['bild'] ?>" alt="Vorschaubild von <?php echo $sunday_and_meal['mahlzeit'] ?>"></img></td>
    </div>
    <div class="col-md-3">
      <br />
      <h3 class="text-center"><?php echo $sunday_and_meal['mahlzeit'] ?></h3>
    </div>
    <div class="col-md-3">
      <br />
      <p><?php echo $sunday_and_meal['notiz'] ?></p>
    </div>
    <div class="col-md-2">
      <br />

    </div>
    <div class="space"></div>
    <hr />
  </div>

  <div class="row">
    <form action="/app/actions/save_new_sunday_meal.php" method="POST">
      <h4><label for="mahlzeit-dropdown" class="form-label">Neue Mahlzeit auswählen:</label></h4>
      <select class="form-select" id="mahlzeit-dropdown" name="neue-mahlzeit">
        <?php foreach ($all_meals as $meal) : ?>
        <option value="<?php echo $meal['id'] ?>"><?php echo $meal['meal'] ?></option>
        <?php endforeach ?>
      </select>
      <input type="hidden" name="table" value="<?php echo $table ?>" />
      <input type="hidden" name="day-id" value="<?php echo $sunday_and_meal['day_id'] ?>" />
      <br />
      <div class="text-center">
        <input class="btn btn-success" type="submit" value="Speichern" />
      </div>
    </form>
  </div>



</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>