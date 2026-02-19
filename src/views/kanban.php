<?php
require_once __DIR__ . '/../components/CardKanban.php';

/* Datos de ejemplo */
$columnas = [
    'Nuevos' => [
        [
            'id' => 101,
            'nombre' => 'Carlos Ruiz',
            'asunto' => 'Problema con factura',
            'canal' => 'WhatsApp',
            'fecha' => '2026-02-18'
        ],
        [
            'id' => 102,
            'nombre' => 'Ana Mora',
            'asunto' => 'Consulta de precios',
            'canal' => 'Web',
            'fecha' => '2026-02-18'
        ]
    ],
    'En Atención' => [
        [
            'id' => 103,
            'nombre' => 'Luis Gómez',
            'asunto' => 'Seguimiento de pedido',
            'canal' => 'Instagram',
            'fecha' => '2026-02-17'
        ]
    ],
    'Cerrados' => []
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Kanban Atención</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .kanban-column {
            background: #e9ecef;
            border-radius: 10px;
            padding: 15px;
            min-height: 500px;
        }

        .kanban-title {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .kanban-card {
            cursor: pointer;
            transition: 0.2s;
        }

        .kanban-card:hover {
            transform: scale(1.02);
        }
    </style>
</head>

<body>

<div class="container-fluid py-4">
    <div class="row">

        <?php foreach ($columnas as $estado => $tickets): ?>
            <div class="col-md-4">
                <div class="kanban-column">

                    <div class="kanban-title">
                        <?= $estado ?>
                        <span class="badge bg-dark">
                            <?= count($tickets) ?>
                        </span>
                    </div>

                    <?php
                    if (empty($tickets)) {
                        echo '<p class="text-muted small">Sin tickets</p>';
                    } else {
                        foreach ($tickets as $ticket) {
                            renderKanbanCard($ticket);
                        }
                    }
                    ?>

                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

</body>
</html>
