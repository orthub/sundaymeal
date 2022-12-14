<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/actions/index.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>

<div class="space"></div>
<div class="container">

  <?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>
  <?php require_once __DIR__ . '/../../app/actions/statistics.php' ?>

  <div class="row">

    <form action="/public/views/statistics.php?year=<?php echo $get_year ?>column=meal&sort=desc" method="GET">
      <h4><label for="mahlzeit-dropdown" class="form-label">Jahresauswahl:</label></h4>
      <select id="mahlzeit-dropdown" name="year">
        <?php foreach ($database_years as $select_year) : ?>
        <option value="<?php echo str_replace('sundays_', '', $select_year['table_name']) ?>"><?php echo str_replace('sundays_', '', $select_year['table_name']) ?></option>
        <?php endforeach ?>
      </select>
      <input class="btn btn-sm btn-success" type="submit" value="Ansehen" />
    </form>
  </div>

  <div class="space"></div>

  <h4 class="text-center">Jahr:&nbsp<?php echo $get_year ?></h4>
  <table class="table" style="text-align: center">
    <th class="th-statistic">Mahlzeit&nbsp&nbsp&nbsp<a href="/public/views/statistics.php?year=<?php echo $get_year ?>&column=meal&sort=asc"><span class="fa fa-sort-alpha-asc"></span></a>&nbsp&nbsp<a href="/public/views/statistics.php?year=<?php echo $get_year ?>&column=meal&sort=desc"><span class="fa fa-sort-alpha-desc"></span></a></th>
    <th class="th-statistic">H&aumlufigkeit&nbsp&nbsp&nbsp<a href="/public/views/statistics.php?year=<?php echo $get_year ?>&column=count&sort=asc"><span class="fa fa-sort-amount-asc"></span></a>&nbsp&nbsp<a href="/public/views/statistics.php?year=<?php echo $get_year ?>&column=count&sort=desc"><span class="fa fa-sort-amount-desc"></span></a></th>

    <?php foreach ($statistics as $statistic) : ?>

    <!-- highlight not planed meals with a red background -->
    <tr style="<?php echo ($statistic['meal_id'] == '1') ? 'background-color: #dc1d1d; font-weight: bold;' : ''; ?>">
      <td><?php echo $statistic['mahlzeit']; ?></td>
      <td><?php echo $statistic['count']; ?></td>
    </tr>

    <?php endforeach ?>

  </table>

</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>