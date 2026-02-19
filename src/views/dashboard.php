<div class="container-fluid">

  <!-- Header -->
  <div class="mb-4">
    <h1 class="h4 fw-semibold mb-1">Panel WABA</h1>
    <p class="text-muted mb-0">Resumen de actividad de WhatsApp Business.</p>
  </div>

  <div class="row g-4">

    <!-- Mensajes Enviados -->
    <div class="col-12 col-sm-6 col-xl-3">
      <div class="card waba-card h-100">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <small class="text-muted text-uppercase">Mensajes Enviados</small>
            <h3 class="fw-bold mt-2 mb-1">2,450</h3>
            <span class="text-success small">+15% esta semana</span>
          </div>
          <div class="waba-icon bg-success-subtle text-success">
            <i class="fa-solid fa-paper-plane"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Conversaciones Activas -->
    <div class="col-12 col-sm-6 col-xl-3">
      <div class="card waba-card h-100">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <small class="text-muted text-uppercase">Conversaciones</small>
            <h3 class="fw-bold mt-2 mb-1">320</h3>
            <span class="text-success small">+8% hoy</span>
          </div>
          <div class="waba-icon bg-primary-subtle text-primary">
            <i class="fa-solid fa-comments"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Contactos Nuevos -->
    <div class="col-12 col-sm-6 col-xl-3">
      <div class="card waba-card h-100">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <small class="text-muted text-uppercase">Contactos Nuevos</small>
            <h3 class="fw-bold mt-2 mb-1">58</h3>
            <span class="text-muted small">Últimos 7 días</span>
          </div>
          <div class="waba-icon bg-warning-subtle text-warning">
            <i class="fa-solid fa-user-plus"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Alertas -->
    <div class="col-12 col-sm-6 col-xl-3">
      <div class="card waba-card h-100">
        <div class="card-body d-flex justify-content-between align-items-center">
          <div>
            <small class="text-muted text-uppercase">Errores / Alertas</small>
            <h3 class="fw-bold mt-2 mb-1">7</h3>
            <span class="text-danger small">Requieren revisión</span>
          </div>
          <div class="waba-icon bg-danger-subtle text-danger">
            <i class="fa-solid fa-triangle-exclamation"></i>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>


<style>
body {
  background-color: #f0f2f5;
}

.waba-card {
  border: none;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  transition: all 0.2s ease;
}

.waba-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.waba-icon {
  width: 50px;
  height: 50px;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
}
</style>
