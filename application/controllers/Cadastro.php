<?php

class cadastro extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
        $this->load->model("Times_model");
    }

    public function index() {        
        $this->load->telaInicial("cadastro/cadastro_view");
    }

    public function novo_cadastro() {        
        $usuario = array(
            "nome" => $this->input->post("nomeUsuario"),
            "email" => $this->input->post("emailUsuario"),
            "celular" => $this->input->post("celularUsuario"),
            "senha" => base64_encode($this->input->post("senhaUsuario"))
        );
        $idUsuario = $this->Usuarios_model->salvaUsuario($usuario);
        $time = array(
            "nomeTime" => $this->input->post("timesBuscados"),
            "idPessoa" => $idUsuario
        );
        $this->Times_model->salvaTime($time);
        redirect("Login");
    }
    
    public function edita_cadastro(){
        $usuario = array(
            "nome" => $this->input->post("nomeUsuario"),
            "email" => $this->input->post("emailUsuario"),
            "celular" => $this->input->post("celularUsuario")            
        );   
        $this->Usuarios_model->editaUsuario($usuario);
        redirect("home");
    }
}
