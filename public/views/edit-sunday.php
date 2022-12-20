<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/actions/edit_sunday.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>

<div class="space"></div>
<div class="container">

  <?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>

  <div class="card">

    <div class="card-header">
      <h3 class="text-center">Geplant:&nbsp<b><?php echo $sunday_and_meal['mahlzeit']?></b></h3>
      <h4 class="text-center"><?php echo preg_replace('#^(\d{4})-(\d{2})-(\d{2})$#', '\3.\2.\1', $sunday_and_meal['sonntag']); ?></h4>
    </div>
    
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 text-center">
          <img class="img-width" src="<?php echo $sunday_and_meal['bild'] ?>" alt="Vorschaubild von <?php echo $sunday_and_meal['mahlzeit'] ?>"></img>
        </div>
        <div class="col-md-6">
          <div class="form-group">
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
              <input type="hidden" name="back" value="<?php echo $back ?>" />
              <input type="hidden" name="year" value="<?php echo $year ?>" />
              <br />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <label for="sunday_note">Notiz&nbspf&uumlr&nbspden&nbspTag:</label>
        <textarea name="sunday-note" id="sunday_note"><?php echo $sunday_and_meal['notiz'] ?></textarea>
      </div>
    </div>

          <div class="card-footer">
            <?php if ($back == 'index.php') { ?>
              <a class="btn btn-danger" href="/public/views/<?php echo $back ?>?year=<?php echo $year ?>&current-year=true">Abbrechen</a>
            <?php } else { ?>
              <a class="btn btn-danger" href="/public/views/<?php echo $back ?>?year=<?php echo $year ?>">Abbrechen</a>
            <?php } ?>
          <div class="float-right">
            <button type="submit" class="btn btn-success">Speichern</button>
          </div>
        </form>
    </div>


  </div>


</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>