<?php

class PageController
{
    private function render($viewName, $title)
    {
        $brand = "Mecsa Pro";

        $links = [
            ['name' => 'Login', 'url' => '/login'],
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

    public function login()
    {
        $this->render('login', 'Login');
    }

    public function dashboard()
    {
        $this->render('dashboard', 'Dashboard');
    }

    public function chats()
    {
        $this->render('chats', 'Chats');
    }

    public function kanban()
    {
        $this->render('kanban', 'Kanban');
    }

    public function settings()
    {
        $this->render('settings', 'Settings');
    }
}
