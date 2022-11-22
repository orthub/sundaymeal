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

  <table class="table" style="text-align: center">
    <th>Jahr:&nbsp<?php echo $get_year ?></th>
    <th>Mahlzeit&nbsp&nbsp<a href="/public/views/statistics.php?year=<?php echo $get_year ?>&column=meal&sort=asc"><i class="fa fa-angle-up"></i></a>&nbsp<a href="/public/views/statistics.php?year=<?php echo $get_year ?>&column=meal&sort=desc"><i class="fa fa-angle-down"></i></a></th>
    <th>H&aumlufigkeit&nbsp&nbsp<a href="/public/views/statistics.php?year=<?php echo $get_year ?>&column=count&sort=asc"><i class="fa fa-angle-up"></i></a>&nbsp<a href="/public/views/statistics.php?year=<?php echo $get_year ?>&column=count&sort=desc"><i class="fa fa-angle-down"></i></a></th>

    <?php foreach ($statistics as $statistic) : ?>

    <tr style="<?php echo ($statistic['meal_id'] == '1') ? 'background-color: #dc1d1d; font-weight: bold;' : ''; ?>">
      <td></td>
      <td><?php echo $statistic['mahlzeit']; ?></td>
      <td><?php echo $statistic['count']; ?></td>
    </tr>

    <?php endforeach ?>

  </table>

</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>