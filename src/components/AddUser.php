<!-- Modal -->
<div class="modal fade" id="modalAddUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">

      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title">Agregar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form action="/settings/users/create" method="POST" enctype="multipart/form-data">
          <input type="text" name="username" placeholder="Username" class="form-control mb-2" required>
          <input type="text" name="name" placeholder="Nombre completo" class="form-control mb-2" required>
          <input type="email" name="email" placeholder="Correo electrónico" class="form-control mb-2" required>
          <input type="password" name="password" placeholder="Contraseña" class="form-control mb-2" required>
          <input type="file" name="photo" class="form-control mb-2">
          <div class="d-flex justify-content-end mt-2">
            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
