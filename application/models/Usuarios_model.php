<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function salvaUsuario($usuario) {
        $this->db->insert("pessoa", $usuario);
        $idUsuario = $this->db->insert_id();
        return $idUsuario;
    }

    public function buscaUsuario($login, $senha) {
        try {
            $this->db->where("email", $login);
            $this->db->where("senha", $senha);
            $usuario = $this->db->get("pessoa")->row_array();
            return $usuario;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    /* public function buscaUsuario($login, $senha) {
      try {
      $this->db->where("email", $login);
      $this->db->where("senha", $senha);
      return json_encode($this->db->get("pessoa")->result());
      } catch (Exception $ex) {
      return $ex->getMessage();
      }
      } */
}
