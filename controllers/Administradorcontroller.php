<?php

class AdministradorController {

    public function index(){
       require_once('views/components/layout/head.php');
       require_once('views/administrador/index.php');
       require_once('views/components/layout/footer.php');
    }

    public function show(){
        require_once('views/components/layout/head.php');
        require_once('views/administrador/show.php');
        require_once('views/components/layout/footer.php');
       }
    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/administrador/edit.php');
        require_once('views/components/layout/footer.php');
    }
    public function create(){
        require_once('views/components/layout/head.php');
        require_once('views/administrador/create.php');
        require_once('views/components/layout/footer.php');
       
    }
    public function destroy(){
        require_once('views/components/layout/head.php');
        require_once('views/administrador/destroy.php');
        require_once('views/components/layout/footer.php');
    }
    
}