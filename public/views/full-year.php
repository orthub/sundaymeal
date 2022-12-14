<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/actions/full_year.php';
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
    <th>Notiz</th>
    <th>Mahlzeit</th>

    <?php foreach ($meals as $meal) : ?>

    <tr>
      <td>
        <p class="p-table"><?php echo $meal['kw']; ?></p>
      </td>
      <td>
        <!-- change date output to dd.mm.yyyy -->
        <p class="p-table"><?php echo preg_replace('#^(\d{4})-(\d{2})-(\d{2})$#', '\3.\2.\1', $meal['sonntag']); ?></p>
      </td>
      <td><a href="/public/views/edit-meal.php?meal-id=<?php echo $meal['essen_id'] ?>&back=full-year.php"><?php echo '<img class="img-fluid" alt="Vorschaubild von ' . $meal['mahlzeit'] . '" src="' . $meal['bild'] . '" style="max-height:100px"></img>' ?></a></td>
      <td><p><?php echo $meal['notiz'] ?></p></td>
      <td>
        <p class="p-table"><?php echo $meal['mahlzeit']; ?></p>
        <p class="edit-icon"><a href="/public/views/edit-sunday.php?day-id=<?php echo $meal['day_id']?>&year=<?php echo $year ?>&back=full-year.php"><span class="fa fa-pencil-square-o"></span></a></p>
      </td>
    </tr>

    <?php endforeach ?>

  </table>

</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>