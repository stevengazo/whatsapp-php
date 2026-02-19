<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
  <div class="container-fluid">
    
    <!-- Brand -->
    <a class="navbar-brand fw-bold" href="/dashboard">
      <i class="fa-solid fa-cube text-primary"></i> <?= $brand ?>
    </a>

    <!-- Botón hamburguesa (IMPORTANTE para mobile) -->
    <button class="navbar-toggler" type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#mainNavbar" 
            aria-controls="mainNavbar" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenido colapsable -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
