<div class="container-fluid">

  <h1 class="h4 mb-4">Gestión de Usuarios</h1>

  <div class="card shadow-sm">
    <div class="card-body">

      <!-- Botón abrir modal -->
      <button 
        class="btn btn-success btn-sm mb-3"
        data-bs-toggle="modal"
        data-bs-target="#modalAddUser">
        <i class="bi bi-person-plus"></i> Nuevo Usuario
      </button>

      <?php if (!empty($users)): ?>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>Nombre</th>
              <th>Email</th>
              <th>Rol</th>
              <th width="120"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
              <td><?= htmlspecialchars($user['name']) ?></td>
              <td><?= htmlspecialchars($user['email']) ?></td>
              <td><?= htmlspecialchars($user['role_name']) ?></td>
              <td>
                <button class="btn btn-sm btn-outline-primary">
                  Editar
                </button>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php else: ?>
        <div class="alert alert-info small">
          No hay usuarios registrados.
        </div>
      <?php endif; ?>

    </div>
  </div>

</div>

<!-- Modal al final -->
<?php include __DIR__ . "/../../components/AddUser.php"; ?>