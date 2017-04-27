<?php

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function index() {        
        $this->load->view("includes/header");
        $this->load->view("login/login_view");
    }
    
    public function novo_usuario(){
        $this->load->view("login/form_novousuario");
    }
    
    public function novo_cadastro() {
        $this->load->model("Usuarios_model");
        $usuario = array(
            "nomeUsuario" => $this->input->post("nomeUsuario"),
            "emailUsuario" => $this->input->post("emailUsuario"),            
            "loginUsuario" => $this->input->post("loginUsuario"),
            "senhaUsuario" => base64_encode($this->input->post("senhaUsuario")),
            "torcidaUsuario" => $this->input->post("timeUsuario"),          
        );
        $this->Usuarios_model->salvaUsuario($usuario);
        $this->load->template("time_view");
    }
}
