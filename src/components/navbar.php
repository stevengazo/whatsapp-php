<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/dashboard">
      <i class="fa-solid fa-cube text-primary"></i> <?= $brand ?>
    </a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <?php foreach ($links as $link): ?>
          <li class="nav-item">
            <a class="nav-link <?= $active === $link['name'] ? 'active' : '' ?>"
               href="<?= $link['url'] ?>">
               <?= $link['name'] ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
