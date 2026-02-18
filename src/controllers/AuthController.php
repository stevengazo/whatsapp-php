<?php
require_once __DIR__ . '/../core/BaseController.php';

class AuthController extends BaseController
{
    public function login()
    {
        if (isset($_SESSION['user'])) {
            header("Location: /dashboard");
            exit;
        }

        $error = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($username === 'admin@grupomecsa.com' && $password === '123456') {

                session_regenerate_id(true);

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

        $this->render('login', 'Login', [
            'error' => $error
        ]);
    }

    public function logout()
    {
        session_destroy();
        header("Location: /login");
        exit;
    }
}
