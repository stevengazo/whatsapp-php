<?php

require_once __DIR__ . "/../core/BaseController.php";

class SettingsController extends BaseController {

    public function index() {
        echo "index running";
     //   $this->requireAuth();
        $this->render("settings/index", "Configuración");
    }

    public function crm() {
        $this->requireAuth();
        $this->render("settings/crm", "Configuración CRM");
    }

    public function users() {
        $this->requireAuth();
        $this->render("settings/users", "Usuarios");
    }

    public function channels() {
        $this->requireAuth();
        $this->render("settings/channels", "Canales");
    }
}
