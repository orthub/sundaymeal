<?php require_once __DIR__ . '/../../app/actions/menu.php' ?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/"><i class="fa fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/public/views/new_meal.php"><i class="fa fa-plus-square"></i>&nbspNeue&nbspMahlzeit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/public/views/all_meals.php"><i class="fa fa-fork-awesome"></i>&nbspAlle&nbspMahlzeiten</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-bar-chart"></i>&nbspStatistik</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-calendar"></i>&nbspJahresauswahl</a>
          <ul class="dropdown-menu">
            <?php foreach($database_years as $year) : ?>
            <li><a class="dropdown-item text-center" href="/public/views/full_year.php?year=<?php echo str_replace('sundays_', '', $year['table_name']) ?>"><?php echo str_replace('sundays_', '', $year['table_name']) ?></a></li>
            <?php endforeach ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>