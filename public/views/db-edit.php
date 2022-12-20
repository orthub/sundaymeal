<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>

<div class="space"></div>
<div class="container">

  <?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>
  <?php require_once __DIR__ . '/../../app/actions/db_edit.php' ?>

  <div class="row">
    <div class="col-md-6">
      <table class="table">
        <th>Info</th>
        <tr>
          <td><a href="/public/views/statistics.php?year=<?php echo $current_year ?>">Mahlzeit&nbspStatistik&nbspf&uumlr&nbspaktuelles&nbspJahr&nbsp(<?php echo $current_year ?>)</a></td>
        </tr>
        <tr>
          <td>Mahlzeiten&nbspin&nbspDatenbank:&nbsp<b><?php echo $amount_meals ?></b></td>
        </tr>
      </table>  
    </div>
    <div class="col-md-6">
      <table class="table">
        <th>Bearbeiten</th>
        <tr>
          <td><a href="/public/views/new-meal.php"><span class="fa fa-plus-square"></span>&nbspNeue&nbspMahlzeit&nbsphinzuf&uumlgen</a></td>
        </tr>
        <tr>
          <td><a href="/public/views/add-year.php"><span class="fa fa-calendar-plus-o"></span>&nbspNeues&nbspJahr&nbsphinzuf&uumlgen</a></td>
        </tr>
        <tr>
          <td><b>Jahre&nbspin&nbspder&nbspDatenbank:</b><br />
          <?php foreach ($all_years_in_db as $year) : ?>
            <?php echo str_replace('sundays_', '', $year['table_name'])?>&nbsp&nbsp<a href="/app/actions/save_year_to_pdf.php?year=<?php echo str_replace('sundays_', '', $year['table_name']) ?>"><span class="fa fa-document"></span>&nbspPDF&nbspErstellen</a>&nbsp&nbsp|&nbsp&nbsp<a href="/public/views/confirm-delete-year.php?year=<?php echo str_replace('sundays_', '', $year['table_name']) ?>"><span class="fa fa-times text-danger"></span>&nbspJahr&nbspL&oumlschen</a><br />
          <?php endforeach ?>
          </td>
        </tr>
      </table>
    </div>
  </div>

</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>