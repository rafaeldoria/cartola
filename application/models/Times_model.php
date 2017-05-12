<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Times_model extends CI_Model {

    public function salvaTime($time) {
        $this->db->insert("timecartola", $time);
    }

}
