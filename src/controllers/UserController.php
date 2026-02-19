<?php
require_once __DIR__ . "/../core/BaseController.php";
require_once __DIR__ . "/../models/User.php";

class UserController extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
        $this->requireAuth(); // asegurarse que el usuario está logueado
    }

    // Listado de usuarios
   public function index() {
        $db = Database::getInstance();
        
        $stmt = $db->query("
            SELECT u.*, r.name AS role_name
            FROM users u
            LEFT JOIN roles r ON u.role_id = r.id
            ORDER BY u.id DESC
        ");
        $users = $stmt->fetchAll();

        $this->render('settings/users', 'Gestión de Usuarios', ['users' => $users]);
    }

    // Crear nuevo usuario
  public function create()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = [
            'username' => $_POST['username'],
            'name'     => $_POST['name'],
            'email'    => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), // Encriptar contraseña
            'photo'    => $_FILES['photo']['name'] ?? null,
            'role_id'  => $_POST['role_id'] ?? 2
        ];

        // Subir foto si existe
        if (isset($_FILES['photo']) && $_FILES['photo']['tmp_name']) {
            $targetDir = __DIR__ . "/../uploads/users/";
            if (!is_dir($targetDir)) mkdir($targetDir, 0755, true);
            move_uploaded_file($_FILES['photo']['tmp_name'], $targetDir . $_FILES['photo']['name']);
        }

        // ✅ Guardar usuario en la base de datos
        $this->userModel->create($data);

        // Redirigir a la lista de usuarios
        header("Location: /settings/users");
        exit;
    }
}


    // Editar usuario
    public function edit($id)
    {
        $user = $this->userModel->find($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'username' => $_POST['username'],
                'name'     => $_POST['name'],
                'email'    => $_POST['email'],
                'password' => $_POST['password'] ?? $user['password'], // si no cambia, deja el anterior
                'photo'    => $user['photo'], // mantener la foto si no hay nueva
                'role_id'  => $_POST['role_id'] ?? $user['role_id']
            ];

            // Subir nueva foto si existe
            if (isset($_FILES['photo']) && $_FILES['photo']['tmp_name']) {
                $targetDir = __DIR__ . "/../uploads/users/";
                if (!is_dir($targetDir)) mkdir($targetDir, 0755, true);
                move_uploaded_file($_FILES['photo']['tmp_name'], $targetDir . $_FILES['photo']['name']);
                $data['photo'] = $_FILES['photo']['name'];
            }

            $this->userModel->update($id, $data);

            header("Location: /settings/users");
            exit;
        }

        // Mostrar formulario con datos existentes
        $this->render("settings/edit_user", "Editar Usuario", ['user' => $user]);
    }
}
