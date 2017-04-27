<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Times_model extends CI_Model{
    public function buscaTimesDoBrasileiro(){
        $this->db->order_by('idTime','asc');
        return json_encode($this->db->get('timesbrasileiros')->result());
    }
}
