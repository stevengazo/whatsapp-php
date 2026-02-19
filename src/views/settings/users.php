<?php
require_once __DIR__ . "/../../components/AddUser.php";
?>

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
            <tr>
              <td>Admin</td>
              <td>admin@email.com</td>
              <td>Administrador</td>
              <td>
                <button class="btn btn-sm btn-outline-primary">
                  Editar
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>

</div>

<!-- Aquí se renderiza el modal -->
<?php include __DIR__ . "/../../components/AddUser.php"; ?>
