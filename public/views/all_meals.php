<?php
require_once __DIR__ . '/../../app/helpers/session.php';
require_once __DIR__ . '/../../app/actions/index.php';
require_once __DIR__ . '/../parts/head.php';
require_once __DIR__ . '/../parts/menu.php';
?>

<div class="space"></div>
<div class="container">

  <?php require_once __DIR__ . '/../../app/helpers/flash_message.php'; ?>
  <?php require_once __DIR__ . '/../../app/actions/all_meals.php' ?>

  <?php foreach ($meals as $meal) : ?>

  <div class="row">
    <div class="col-md-4">
      <td><img style="width:100%" src="<?php echo $meal['image_path'] ?>" alt="<?php echo $meal['meal'] ?>"></img></td>
    </div>
    <div class="col-md-3">
      <br />
      <h3 class="text-center"><?php echo $meal['meal'] ?></h3>
    </div>
    <div class="col-md-3">
      <br />
      <p><?php echo $meal['note'] ?></p>
    </div>
    <div class="col-md-2">
      <br />
      <div class="text-center">
        <a class="btn btn-success" href="/public/views/edit_meal.php?meal-id=<?php echo $meal['id'] ?>">Bearbeiten</a>
      </div>
    </div>
    <div class="space"></div>
    <hr />
  </div>

  <?php endforeach ?>

</div>

<?php require_once __DIR__ . '/../parts/footer.php' ?>