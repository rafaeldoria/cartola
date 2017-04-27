<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TimesDoBrasileiro extends CI_Controller{
    
    public function lista_times() {
        $this->load->model("Times_model");
        echo $this->Times_model->buscaTimesDoBrasileiro();
    }
    
}
