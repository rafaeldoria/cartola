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
        $id = $this->session->userdata("usuario_logado");
        $this->db->where("pessoa.idPessoa", $id['idPessoa']);
        $this->db->select('pessoa.*, timecartola.NomeTime, contacorrente.Saldo');
        $this->db->from('pessoa');
        $this->db->join('timecartola', 'timecartola.idPessoa=pessoa.idPessoa');
        $this->db->join('contacorrente', 'contacorrente.idContaCorrente=pessoa.ContaCorrente_idContaCorrente');
        $query = $this->db->get()->result();
        return json_encode($query);
    }
    
    //editar dados alterados no modal
    public function editaUsuario($usuario){ 
        $id = $this->session->userdata("usuario_logado");
        $this->db->where('idPessoa', $id['idPessoa']);
        $this->db->update('pessoa',$usuario);    
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
