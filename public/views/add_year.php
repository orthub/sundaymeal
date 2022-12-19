<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/actions/index.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>
<div class="space"></div>
<div class="container">

<?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>
  <form action="/app/actions/add_year.php" method="POST">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Neues Jahr in die Datenbank speichern</h3>
      </div>
      <div class="card-body">
        <div class="form-group">

          <div class="space"></div>

          <div class="row">
            <label for="new-year" class="form-label">Jahr generieren:</label>
            <input type="text" class="form-control" id="new-year" name="new-year" required>
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