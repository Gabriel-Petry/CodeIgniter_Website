<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function Login(){
    
        $this->load->view("cabecalho");
        $this->load->view("usuario");
        $this->load->view("rodape");

    }
}