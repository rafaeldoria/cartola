<?php

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function index() {
        
    }
    
    public function lista_dados() {
        //$idPessoa = $usuario['IdPessoa'];
        echo $this->Usuarios_model->listaDadosUsuario();
    }

}
