<?php
require_once __DIR__ . '/../core/Database.php';

header('Content-Type: application/json');

// Verificar que sea POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido']);
    exit;
}

// Leer el body JSON
$body = file_get_contents('php://input');
$data = json_decode($body, true);

// Opcional: validar token de seguridad
$headers = getallheaders();
$token = $headers['X-WhatsApp-Token'] ?? null;

if (!$token) {
    http_response_code(401);
    echo json_encode(['error' => 'Token faltante']);
    exit;
}

// TODO: validar que el token coincida con el secret_token de la conexión

try {
    $db = Database::getInstance();

    // Ejemplo: procesar mensajes entrantes
    if (isset($data['messages']) && is_array($data['messages'])) {
        foreach ($data['messages'] as $msg) {
            $chat_id = $msg['chat_id'] ?? null; // dependerá de tu mapeo
            $content = $msg['text'] ?? '';
            $sender  = $msg['from'] ?? 'contact';

            if ($chat_id && $content) {
                $stmt = $db->prepare("
                    INSERT INTO messages (chat_id, sender, content)
                    VALUES (:chat_id, :sender, :content)
                ");
                $stmt->execute([
                    ':chat_id' => $chat_id,
                    ':sender'  => $sender === 'user' ? 'user' : 'contact',
                    ':content' => $content
                ]);
            }
        }
    }

    echo json_encode(['status' => 'ok']);

} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
