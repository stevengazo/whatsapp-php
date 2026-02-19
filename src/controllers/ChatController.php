<?php

require_once __DIR__ . '/../core/BaseController.php';

class ChatController extends BaseController
{

    public function index()
    {
        $this->requireAuth();
        $this->render('chats', 'Chats');
    }
}