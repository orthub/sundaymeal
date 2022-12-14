<?php require_once __DIR__ . '/../../app/actions/menu.php' ?>
<nav class="navbar navbar-custom navbar-expand-md">
  <div class="container">
    <a class="navbar-brand" href="/"><span class="fa fa-home"></span></a>
    <button class="navbar-toggler tgl-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="toggle-icon fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/public/views/new-meal.php"><span class="fa fa-plus-square"></span>&nbspNeue&nbspMahlzeit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/public/views/all-meals.php"><span class="fa fa-fork-awesome"></span>&nbspAlle&nbspMahlzeiten</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span class="fa fa-calendar"></span>&nbspJahresauswahl</a>
          <ul class="dropdown-menu">
            <?php foreach($database_years as $link_year) : ?>
              <li><a class="dropdown-item text-center" href="/public/views/full-year.php?year=<?php echo str_replace('sundays_', '', $link_year['table_name']) ?>"><?php echo str_replace('sundays_', '', $link_year['table_name']) ?></a></li>
              <?php endforeach ?>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/public/views/db-edit.php"><span class="fa fa-database"></span>&nbspDatenbank</a>
          </li>
        </ul>
    </div>
  </div>
</nav>