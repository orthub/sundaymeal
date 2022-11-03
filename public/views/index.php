<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/helpers/flash_message.php';
require_once __DIR__ . '/../../app/actions/index.php';

require_once __DIR__ . '/../parts/head.php';

?>
<div class="container">
  <div class="col-6 col-t-6 offset-3">
    <table style="text-align: center">
      <th>KW</th>
      <th>Datum</th>
      <th>Mahlzeit</th>
      <th>Grillen</th>
      <th></th>
      <?php foreach ($meals as $meal) { ?>
      <tr style="<?php echo ($current_week == $meal['kw']) ? 'background-color: #aaff80; text-style: bold;' : ''; ?>">
        <td><?php echo $meal['kw']; ?></td>
        <!-- change date output to dd.mm.yyyy -->
        <td><?php echo preg_replace('#^(\d{4})-(\d{2})-(\d{2})$#', '\3.\2.\1', $meal['sonntag']); ?></td>
        <td><?php echo $meal['mahlzeit']; ?></td>
        <td><?php echo ($meal['grillen']) ? '<i class="fa fa-gavel text-success"></i>' : '' ?></td>
        <td>
          <form action="./edit.php" method="POST">
            <input type="hidden" value="<?php echo $meal['meal_id']; ?>" name="id"></input>
            <input type="submit" value="Bearbeiten"></input>
          </form>
        </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
<div class="col-3 col-t-3"></div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>