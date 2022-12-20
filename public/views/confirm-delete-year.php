<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/actions/confirm_delete_year.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>
<div class="space"></div>
<div class="container">

  <?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>

  <form action="/app/actions/confirm_delete_year.php?year=<?php echo $get_year ?>" method="POST">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Jahr&nbsp<?php echo $get_year ?>&nbspaus&nbspder&nbspDatenbank&nbspL&oumlschen?</h3>
      </div>
      <div class="card-body">
          <div class="space"></div>
      </div>
      <div class="card-footer">
        <a class="btn btn-success" href="/public/views/db-edit.php">Abbrechen</a>
        <div class="float-right">
          <button type="submit" class="btn btn-danger">L&oumlschen</button>
        </div>
      </div>
    </div>
  </form>

</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>