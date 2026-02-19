<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<div class="container py-4">

  <h1 class="h4 mb-4">Pasarela de Canales</h1>

  <!-- CONECTORES -->
  <div class="row g-3">

    <!-- WhatsApp -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">

          <i class="bi bi-whatsapp text-success fs-1 mb-3"></i>
          <h6 class="fw-semibold">WhatsApp API</h6>

          <span class="badge bg-danger mb-3">Desconectado</span>

          <div class="d-grid">
            <button class="btn btn-success btn-sm">
              Conectar
            </button>
          </div>

        </div>
      </div>
    </div>

    <!-- Telegram -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">

          <i class="bi bi-telegram text-primary fs-1 mb-3"></i>
          <h6 class="fw-semibold">Telegram Bot</h6>

          <span class="badge bg-success mb-3">Conectado</span>

          <div class="d-grid">
            <button class="btn btn-outline-danger btn-sm">
              Desconectar
            </button>
          </div>

        </div>
      </div>
    </div>

    <!-- Messenger -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">

          <i class="bi bi-messenger text-primary fs-1 mb-3"></i>
          <h6 class="fw-semibold">Facebook Messenger</h6>

          <span class="badge bg-danger mb-3">Desconectado</span>

          <div class="d-grid">
            <button class="btn btn-primary btn-sm">
              Conectar
            </button>
          </div>

        </div>
      </div>
    </div>

  </div>

  <!-- LISTA DE CONEXIONES ACTIVAS -->
  <div class="card mt-5 shadow-sm">
    <div class="card-body">

      <h6 class="mb-3">Conexiones Activas</h6>

      <div class="list-group list-group-flush">

        <!-- Ejemplo activo -->
        <div class="list-group-item d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-telegram text-primary"></i>
            <div>
              <div class="fw-semibold small">Telegram Bot</div>
              <small class="text-muted">Bot: @miempresa_bot</small>
            </div>
          </div>
          <span class="badge bg-success">Activo</span>
        </div>

        <!-- Ejemplo vacío -->
        <!--
        <div class="text-muted small">
          No hay conexiones activas.
        </div>
        -->

      </div>

    </div>
  </div>

</div>
