<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function telaInicial($nome, $dados = array()) {
        $this->view("includes/header");
        $this->view($nome, $dados);
        $this->view("includes/footer");
    }

    public function template($nome, $dados = array()) {
        $this->view("includes/header");
        $dadosUsuario = $this->session->userdata("usuario_logado");
        $dados['usuario']  = $dadosUsuario;
        $this->view("includes/navbar");
        $this->view($nome, $dados);
        $this->view("includes/footer");
    }

} 