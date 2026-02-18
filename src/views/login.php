<?php
session_start();

// Si ya está logueado, redirigir
if (isset($_SESSION['user'])) {
    header("Location: /dashboard");
    exit;
}

$error = null;

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // 🔐 Aquí luego conectaremos a base de datos
    // Por ahora validación simple

    if ($username === 'admin' && $password === 'admin') {

        $_SESSION['user'] = [
            'email' => $username,
            'name' => 'Administrador'
        ];

        header("Location: /dashboard");
        exit;

    } else {
        $error = "Credenciales incorrectas";
    }
}
?>

<div class="login-page" style="min-height: 500px !important;">
   <div class="login-sidebar">
      <img src="/assets/logo.png" class="brand-logo" alt="Logo">
      <p class="brand-quote">"Excelencia técnica en cada solución industrial que entregamos."</p>
   </div>

   <div class="login-content">
      <div class="login-card">
         <div class="login-header">
            <h2>Bienvenido</h2>
            <p>Ingresa tus credenciales para continuar</p>
         </div>

         <?php if ($error): ?>
             <div class="alert alert-danger">
                 <?= $error ?>
             </div>
         <?php endif; ?>

         <form method="POST">
            <div class="mb-3">
               <label class="form-label fw-bold">Usuario / Email</label>
               <input 
                   type="text" 
                   name="username"
                   class="form-control form-control-lg" 
                   placeholder="admin@grupomecsa.com"
                   required>
            </div>

            <div class="mb-4">
               <label class="form-label fw-bold">Contraseña</label>
               <input 
                   type="password" 
                   name="password"
                   class="form-control form-control-lg" 
                   placeholder="••••••••"
                   required>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-3 fw-bold">
                ACCEDER AL SISTEMA
            </button>
         </form>
      </div>
   </div>
</div>
