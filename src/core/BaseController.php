<?php

class BaseController
{
    protected function render($viewName, $title, $data = [])
    {
        extract($data);

        $brand = "Mecsa Pro";

        $links = [
            ['name' => 'Dashboard', 'url' => '/dashboard'],
            ['name' => 'Chats', 'url' => '/chats'],
            ['name' => 'Kanban', 'url' => '/kanban'],
            ['name' => 'Settings', 'url' => '/settings']
        ];

        $active = ucfirst($viewName);

        ob_start();
        require __DIR__ . "/../views/$viewName.php";
        $content = ob_get_clean();

        require __DIR__ . "/../layouts/main.php";
    }

    protected function requireAuth()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }
    }
}
