<!-- Modal Agregar Usuario -->
<div class="modal fade" id="modalAddUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">

      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title fw-semibold">
          <i class="bi bi-person-plus me-2"></i>
          Agregar Usuario
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">

          <!-- Username -->
          <div class="mb-3">
            <label class="form-label small">Username</label>
            <input type="text" name="username" class="form-control form-control-sm" required>
          </div>

          <!-- Foto -->
          <div class="mb-3">
            <label class="form-label small">Foto de perfil</label>
            <input type="file" name="photo" class="form-control form-control-sm" accept="image/*">
          </div>

          <!-- Nombre -->
          <div class="mb-3">
            <label class="form-label small">Nombre completo</label>
            <input type="text" name="name" class="form-control form-control-sm" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label class="form-label small">Correo electrónico</label>
            <input type="email" name="email" class="form-control form-control-sm" required>
          </div>

          <!-- Password -->
          <div class="mb-3">
            <label class="form-label small">Contraseña</label>
            <input type="password" name="password" class="form-control form-control-sm" required>
          </div>

          <!-- Role -->
          <div class="mb-3">
            <label class="form-label small">Rol</label>
            <select name="role_id" class="form-select form-select-sm">
              <?php
              // Cargar roles desde la base de datos
              $rolesStmt = Database::getInstance()->query("SELECT * FROM roles");
              $roles = $rolesStmt->fetchAll();
              foreach ($roles as $role):
              ?>
              <option value="<?= $role['id'] ?>"><?= htmlspecialchars($role['name']) ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <!-- Footer -->
          <div class="d-flex justify-content-end gap-2 mt-4">
            <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">
              Cancelar
            </button>
            <button type="submit" class="btn btn-success btn-sm">
              Guardar Usuario
            </button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
