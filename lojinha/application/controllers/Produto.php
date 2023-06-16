<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

    function detalhe($id){

        //$id = $this->input->post("id");
    
        $this->load->model('produtosModel');
        $produtos = $this->produtosModel->PPID($id);
        $dados = array("produto" => $produtos[0]);
        
        $this->load->view("cabecalho");
        $this->load->view("produto-detalhe", $dados);
        $this->load->view("rodape");
    }

    function todos(){
    
        $this->load->view("cabecalho");
        $this->load->view("produtos");
        $this->load->view("rodape");

    }
}