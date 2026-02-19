<?php
// components/CardKanban.php

function renderKanbanCard($ticket)
{
    /*
        $ticket = [
            'id' => 1,
            'nombre' => 'Juan Pérez',
            'asunto' => 'Consulta sobre servicio',
            'canal' => 'WhatsApp',
            'fecha' => '2026-02-18'
        ];
    */
?>
    <div class="card shadow-sm mb-3 kanban-card">
        <div class="card-body p-3">

            <div class="d-flex justify-content-between align-items-start">
                <h6 class="card-title mb-1 fw-bold">
                    #<?= $ticket['id'] ?> - <?= htmlspecialchars($ticket['nombre']) ?>
                </h6>
                <span class="badge bg-secondary">
                    <?= htmlspecialchars($ticket['canal']) ?>
                </span>
            </div>

            <p class="card-text small text-muted mb-2">
                <?= htmlspecialchars($ticket['asunto']) ?>
            </p>

            <div class="text-end">
                <small class="text-muted">
                    <?= $ticket['fecha'] ?>
                </small>
            </div>

        </div>
    </div>
<?php
}
