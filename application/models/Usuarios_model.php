<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    //salva cadastro do usuário
    public function salvaUsuario($usuario) {
        $this->db->insert("pessoa", $usuario);
        $idUsuario = $this->db->insert_id();
        return $idUsuario;
    }

    //busca se login do usuário é ok
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

    //busca todos dados do usuário / join com nomeTime
    public function listaDadosUsuario() {
        $id = $this->session->userdata("usuario_logado"); /*
          $this->db->where("pessoa.idPessoa", $id['idPessoa']);
          $this->db->select('pessoa.*, timecartola.NomeTime', 'contacorrente.*');
          $this->db->from('pessoa');
          $this->db->join('timecartola', 'timecartola.idPessoa=pessoa.idPessoa');
          $this->db->join('contacorrente', 'contacorrente.idContaCorrente=pessoa.ContaCorrente_idContaCorrente');
          $query=$this->db->get(); */
        $SQL = "SELECT P.Nome, T.NomeTime, C.Saldo from pessoa P"
                . " inner join timecartola T on T.idPessoa = P.idPessoa "
                . "inner join contacorrente C on C.idContaCorrente = P.ContaCorrente_idContaCorrente";
        $query = $this->db->query($SQL);
        return json_encode($query->result());
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
