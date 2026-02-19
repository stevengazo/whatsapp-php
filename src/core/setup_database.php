<?php
require_once __DIR__ . "/Database.php";

try {
    $db = Database::getInstance();

    // Crear tabla roles
    $db->exec("
        CREATE TABLE IF NOT EXISTS roles (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            description VARCHAR(255) DEFAULT NULL
        );
    ");

    // Insertar roles iniciales si no existen
    $stmt = $db->query("SELECT COUNT(*) as count FROM roles");
    $count = $stmt->fetch()['count'];
    if ($count == 0) {
        $db->exec("
            INSERT INTO roles (name, description) VALUES
            ('Administrador', 'Acceso total'),
            ('Usuario', 'Acceso limitado');
        ");
    }

    // Crear tabla users
    $db->exec("
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            photo VARCHAR(255) DEFAULT NULL,
            role_id INT DEFAULT 2,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (role_id) REFERENCES roles(id)
        );
    ");

    echo "✅ Tablas creadas y roles iniciales insertados correctamente.\n";

} catch (\PDOException $e) {
    echo "❌ Error al crear las tablas: " . $e->getMessage();
}
