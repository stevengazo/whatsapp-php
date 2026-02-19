<?php
require_once __DIR__ . "/Database.php";

try {
    $db = Database::getInstance();

    // ======================
    // Roles
    // ======================
    $db->exec("
        CREATE TABLE IF NOT EXISTS roles (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            description VARCHAR(255) DEFAULT NULL
        );
    ");

    $stmt = $db->query("SELECT COUNT(*) as count FROM roles");
    if ($stmt->fetch()['count'] == 0) {
        $db->exec("
            INSERT INTO roles (name, description) VALUES
            ('Administrador', 'Acceso total'),
            ('Usuario', 'Acceso limitado');
        ");
    }

    // ======================
    // Users
    // ======================
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

    // ======================
    // WhatsApp API Connections
    // ======================
    $db->exec("
        CREATE TABLE IF NOT EXISTS whatsapp_connections (
            id INT AUTO_INCREMENT PRIMARY KEY,
            alias VARCHAR(50) NOT NULL,
            phone_number_id VARCHAR(50) NOT NULL,
            access_token VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // ======================
    // Chat States Catalog
    // ======================
    $db->exec("
        CREATE TABLE IF NOT EXISTS chat_states (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            description VARCHAR(255) DEFAULT NULL
        );
    ");

    // Insertar estados iniciales si no existen
    $stmt = $db->query("SELECT COUNT(*) as count FROM chat_states");
    if ($stmt->fetch()['count'] == 0) {
        $db->exec("
            INSERT INTO chat_states (name, description) VALUES
            ('Nuevo', 'Chat recién creado'),
            ('En Proceso', 'Chat en atención'),
            ('Finalizado', 'Chat cerrado');
        ");
    }

    // ======================
    // Chats
    // ======================
    $db->exec("
        CREATE TABLE IF NOT EXISTS chats (
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT DEFAULT NULL,
            whatsapp_connection_id INT NOT NULL,
            state_id INT DEFAULT 1,
            contact_name VARCHAR(100) NOT NULL,
            contact_phone VARCHAR(50),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id),
            FOREIGN KEY (whatsapp_connection_id) REFERENCES whatsapp_connections(id),
            FOREIGN KEY (state_id) REFERENCES chat_states(id)
        );
    ");

    // ======================
    // Messages
    // ======================
    $db->exec("
        CREATE TABLE IF NOT EXISTS messages (
            id INT AUTO_INCREMENT PRIMARY KEY,
            chat_id INT NOT NULL,
            sender ENUM('user','contact') NOT NULL,
            content TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (chat_id) REFERENCES chats(id)
        );
    ");

    // ======================
    // Chat CRM links
    // ======================
    $db->exec("
        CREATE TABLE IF NOT EXISTS chat_crm_links (
            id INT AUTO_INCREMENT PRIMARY KEY,
            chat_id INT NOT NULL,
            entity VARCHAR(50) NOT NULL,
            entity_id INT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (chat_id) REFERENCES chats(id)
        );
    ");


    $db->exec("
      CREATE TABLE IF NOT EXISTS whatsapp_webhooks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    whatsapp_connection_id INT NOT NULL,
    url VARCHAR(255) NOT NULL,
    secret_token VARCHAR(100) DEFAULT NULL,
    active TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (whatsapp_connection_id) REFERENCES whatsapp_connections(id)
);

        );
    ");

    echo "✅ Todas las tablas de usuarios, WhatsApp, chats, mensajes y CRM se crearon correctamente.\n";

} catch (\PDOException $e) {
    echo "❌ Error al crear las tablas: " . $e->getMessage() . "\n";
}
