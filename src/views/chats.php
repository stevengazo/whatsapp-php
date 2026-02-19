<div class="container-fluid p-0 vh-100">
  <div class="row g-0 h-100">

    <!-- Sidebar Chats -->
    <div class="col-12 col-md-4 col-lg-3 border-end bg-white d-flex flex-column">

      <!-- Header -->
      <div class="px-3 py-2 border-bottom bg-light fw-semibold small">
        Chats
      </div>

      <!-- Lista de chats -->
      <div class="list-group list-group-flush overflow-auto flex-grow-1">

        <!-- WhatsApp -->
        <a href="#" class="list-group-item list-group-item-action py-2 px-3 d-flex align-items-center gap-2">
          <img src="https://i.pravatar.cc/40?img=1" class="rounded-circle flex-shrink-0" width="36" height="36">
          <div class="flex-grow-1 min-width-0">
            <div class="d-flex justify-content-between">
              <span class="fw-semibold small">Juan Pérez</span>
              <small class="text-muted" style="font-size:11px;">10:30</small>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted text-truncate" style="font-size:12px;">
                Último mensaje...
              </small>
              <i class="bi bi-whatsapp text-success ms-2"></i>
            </div>
          </div>
        </a>

        <!-- Instagram -->
        <a href="#" class="list-group-item list-group-item-action py-2 px-3 d-flex align-items-center gap-2">
          <img src="https://i.pravatar.cc/40?img=2" class="rounded-circle flex-shrink-0" width="36" height="36">
          <div class="flex-grow-1 min-width-0">
            <div class="d-flex justify-content-between">
              <span class="fw-semibold small">María López</span>
              <small class="text-muted" style="font-size:11px;">09:12</small>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted text-truncate" style="font-size:12px;">
                Hola 👋
              </small>
              <i class="bi bi-instagram text-danger ms-2"></i>
            </div>
          </div>
        </a>

      </div>
    </div>

    <!-- Chat Area -->
    <div class="col-12 col-md-8 col-lg-9 d-flex flex-column p-0">

      <!-- Chat Header -->
      <div class="px-3 py-2 border-bottom bg-light d-flex align-items-center gap-2">
        <img src="https://i.pravatar.cc/40?img=1" class="rounded-circle" width="36" height="36">
        <div class="flex-grow-1">
          <div class="fw-semibold small">Juan Pérez</div>
          <small class="text-success" style="font-size:11px;">En línea</small>
        </div>
        <i class="bi bi-whatsapp text-success fs-5"></i>
      </div>

      <!-- Mensajes -->
      <div class="flex-grow-1 p-3 overflow-auto" style="background:#efeae2;">
        <!-- Recibido -->
        <div class="d-flex mb-2">
          <div class="bg-white px-3 py-2 rounded shadow-sm small" style="max-width: 70%;">
            Hola, ¿cómo estás?
          </div>
        </div>
        <!-- Enviado -->
        <div class="d-flex justify-content-end mb-2">
          <div class="bg-success text-white px-3 py-2 rounded shadow-sm small" style="max-width: 70%;">
            Todo bien 👍 ¿y vos?
          </div>
        </div>
      </div>

      <!-- Input -->
      <div class="px-3 py-2 border-top bg-light">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" placeholder="Escribe un mensaje...">
          <button class="btn btn-success">
            <i class="bi bi-send"></i>
          </button>
        </div>
      </div>

    </div>
  </div>
</div>
