<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
    
    public function salvaUsuario($usuario) {
        $this->db->insert("pessoa", $usuario);
        $teste = $this->db->insert_id();
        return $teste;       
    }
    
    public function salvaTime($time) {
        $this->db->insert("timecartola", $time);        
    }
    
    public function buscaUsuario($login, $senha) {
        $this->db->where("email", $login);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("pessoa")->row_array();
        return $usuario;
    }
    
}
