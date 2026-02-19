<?php

require_once __DIR__ ."/../core/BaseController.php";

class KanbanController extends BaseController{

    public function index(){
        $this->requireAuth();
              $this->render('kanban', 'Etapas');
   
    }

}