<?php
require_once __DIR__ . '/../core/BaseController.php';

class DashboardController extends BaseController
{
    public function index()
    {
        $this->requireAuth();
        $this->render('dashboard', 'Dashboard');
    }
}
