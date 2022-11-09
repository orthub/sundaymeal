<?php require_once __DIR__ . '/../../app/actions/menu.php' ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><i class="fa fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-plus-square"></i> Neues Essen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-bar-chart"></i> Statistik</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Jahresauswahl</a>
          <ul class="dropdown-menu">
            <?php foreach($database_years as $year) : ?>
            <li><a class="dropdown-item text-center" href="/public/views/index.php?year=<?php echo str_replace('sundays_', '', $year['table_name']) ?>"><?php echo str_replace('sundays_', '', $year['table_name']) ?></a></li>
            <?php endforeach ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>