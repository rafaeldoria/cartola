<?php

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function index() {
        //$this->load->view("includes/header");
        $this->load->telaInicial("login/login_view");
    }

    public function autenticar() {        
        $login = $this->input->post("email");
        $senha = base64_encode($this->input->post("password"));
        $usuario = $this->Usuarios_model->buscaUsuario($login, $senha);
        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success", "Logado com sucesso");
            redirect("login/home",$usuario);
        } else {
            $this->session->set_flashdata("danger", "Usuário ou senha inválida");
            redirect("/login");
        }
    }

    public function novo_login() {
        $this->load->telaInicial("login/novologin_view");
    }

    public function novo_cadastro() {
        $this->load->model("Usuarios_model");
        $usuario = array(
            "nome" => $this->input->post("nomeUsuario"),
            "email" => $this->input->post("emailUsuario"),
            "celular" => $this->input->post("celularUsuario"),
            "senha" => base64_encode($this->input->post("senhaUsuario"))
        );
        $idTime = $this->Usuarios_model->salvaUsuario($usuario);
        $time = array(
            "nome" => $this->input->post("timesBuscados"),
            "idPessoa" => $idTime
        );
        $this->Usuarios_model->salvaTime($time);
        redirect("Login");
    }
    
    public function home(){
        $this->load->template("home");
    }

}
