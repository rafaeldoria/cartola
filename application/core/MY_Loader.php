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
        //atribuindo session ao array
        $dadosUsuario = $this->session->userdata("usuario_logado");
        //atribuindo ao indíce todo o array -> para usá-lo: echo $usuario['Nome']; 
        $dados['usuario']  = $dadosUsuario;
        $this->view("includes/navbar", $dados);
        $this->view($nome, $dados);
        $this->view("includes/footer");
        $this->view("includes/modal_edita_cadastro");
    }

} 