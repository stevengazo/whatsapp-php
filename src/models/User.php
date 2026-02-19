<?php
require_once __DIR__ . "/../core/Database.php";

class User
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function all()
    {
        $stmt = $this->db->query("SELECT u.*, r.name as role_name FROM users u LEFT JOIN roles r ON u.role_id = r.id");
        return $stmt->fetchAll();
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO users (username, name, email, password, photo, role_id) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data['username'],
            $data['name'],
            $data['email'],
            password_hash($data['password'], PASSWORD_BCRYPT),
            $data['photo'] ?? null,
            $data['role_id'] ?? 2
        ]);
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE users SET username=?, name=?, email=?, password=?, photo=?, role_id=? WHERE id=?");
        return $stmt->execute([
            $data['username'],
            $data['name'],
            $data['email'],
            password_hash($data['password'], PASSWORD_BCRYPT),
            $data['photo'] ?? null,
            $data['role_id'] ?? 2,
            $id
        ]);
    }
}
