<?php





class usuariosController {

    public function index() {
        require_once 'views/usuarios/index.php';
    }

    public function create() {
        require_once 'views/login/register.php';
    }

}

?>