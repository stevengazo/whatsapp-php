<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?? 'Sistema' ?></title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            overflow: hidden;
            background-color: #f8f9fa;
        }

        .app-wrapper {
            height: calc(100vh - 56px);
            overflow: hidden;
        }

        .app-content {
            height: 100%;
            overflow-y: auto;
        }
    </style>
</head>

<body>

    <!-- Navbar fija -->
    <header class="fixed-top">
        <?php require __DIR__ . '/../components/navbar.php'; ?>
    </header>

    <!-- Contenido principal -->
    <div class="container-fluid p-4 pt-5 shadow shadow-sm rounded app-wrapper">
        <div class="app-content p-3 pt-5">
            <?= $content ?>
        </div>
    </div>

    <!-- Bootstrap JS (SIEMPRE al final) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>