<?php

require_once __DIR__ ."/../core/BaseController.php";

class SettingsController extends BaseController{

public function index(){
    $this->requireAuth();
    $this->render("settings","Configuración");
}
}