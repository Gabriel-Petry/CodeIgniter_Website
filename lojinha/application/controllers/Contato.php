<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function index(){
    
        $this->load->view("cabecalho");
        $this->load->view("contato");
        $this->load->view("rodape");

    }
}