<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/actions/index.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>
<div class="space"></div>
<div class="container">

  <?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>

  <table class="table" style="text-align: center">
    <th>KW</th>
    <th>Datum</th>
    <th>Vorschau</th>
    <th>Mahlzeit</th>

    <?php foreach ($meals as $meal) : ?>

    <tr style="<?php echo ($current_week == $meal['kw'] && $active_year == true) ? 'background-color: #aaff80; font-weight: bold;' : ''; ?>">
      <td>
        <p class="p-table"><?php echo $meal['kw']; ?></p>
      </td>
      <!-- change date output to dd.mm.yyyy -->
      <td>
        <p class="p-table"><?php echo preg_replace('#^(\d{4})-(\d{2})-(\d{2})$#', '\3.\2.\1', $meal['sonntag']); ?></p>
      </td>
      <td><a href="/public/views/edit_meal.php?meal-id=<?php echo $meal['essen_id'] ?>"><?php echo '<img class="img-fluid" alt="Vorschaubild von ' . $meal['mahlzeit'] . '" src="' . $meal['bild'] . '" style="max-height:100px"></img>' ?></a></td>
      <td>
        <p class="p-table"><?php echo $meal['mahlzeit']; ?></p>
        <p class="edit-icon"><a href="/public/views/edit_sunday.php?day-id=<?php echo $meal['day_id']?>&year=<?php echo $get_year ?>"><i class="fa fa-pencil-square-o"></i></a></p>
      </td>
    </tr>

    <?php endforeach ?>

  </table>

</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>