<?php

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function index() {        
        //$this->load->view("includes/header");
        $this->load->template("login/login_view");
    }
    
    public function novo_login(){
        $this->load->template("login/novologin_view");
    }
    
    public function novo_cadastro() {
        $this->load->model("Usuarios_model");
        $usuario = array(
            "nome" => $this->input->post("nomeUsuario"),
            "email" => $this->input->post("emailUsuario"),            
            "celular" => $this->input->post("celularUsuario"),
            "senha" => base64_encode($this->input->post("senhaUsuario"))   
        );
        $this->Usuarios_model->salvaUsuario($usuario);
        //this->load->template("time_view");
    }
}
