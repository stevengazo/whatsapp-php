<?php
require_once __DIR__ . "/../core/BaseController.php";

class WebhookController extends BaseController
{
    public function __construct()
    {
        $this->requireAuth();
    }

    // Obtener todos los webhooks para una conexión
    public function index($whatsapp_id)
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("
            SELECT *
            FROM whatsapp_webhooks
            WHERE whatsapp_connection_id = ?
            ORDER BY id DESC
        ");
        $stmt->execute([$whatsapp_id]);
        $webhooks = $stmt->fetchAll();

        header('Content-Type: application/json');
        echo json_encode($webhooks);
    }

    // Crear un nuevo webhook
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);

            $db = Database::getInstance();
            $stmt = $db->prepare("
                INSERT INTO whatsapp_webhooks (whatsapp_connection_id, url, description)
                VALUES (:connection_id, :url, :description)
            ");
            $stmt->execute([
                ':connection_id' => $data['whatsapp_connection_id'],
                ':url' => $data['url'],
                ':description' => $data['description'] ?? null
            ]);

            http_response_code(201);
            echo json_encode(['success' => true]);
        }
    }
}
