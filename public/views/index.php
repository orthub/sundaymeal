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
    <th></th>

    <?php foreach ($meals as $meal) : ?>

    <tr style="<?php echo ($current_week == $meal['kw'] && $active_year == true) ? 'background-color: #aaff80; font-weight: bold;' : ''; ?>">
      <td><?php echo $meal['kw']; ?></td>
      <!-- change date output to dd.mm.yyyy -->
      <td><?php echo preg_replace('#^(\d{4})-(\d{2})-(\d{2})$#', '\3.\2.\1', $meal['sonntag']); ?></td>
      <td><?php echo '<img alt="Vorschaubild von ' . $meal['mahlzeit'] . '" src="' . $meal['bild'] . '" style="max-height:100px"></img>' ?></td>
      <td><?php echo $meal['mahlzeit']; ?></td>
      <td>
        <form action="./edit.php" method="POST">
          <input type="hidden" value="<?php echo $meal['meal_id']; ?>" name="id"></input>
          <input type="submit" value="Bearbeiten"></input>
        </form>
      </td>
    </tr>

    <?php endforeach ?>

  </table>

</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>