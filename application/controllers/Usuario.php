<?php

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function index() {
        $this->load->template("usuario/usuario_view");
    }
    
    public function lista_dados() {        
        echo $this->Usuarios_model->listaDadosUsuario();
    }

}
