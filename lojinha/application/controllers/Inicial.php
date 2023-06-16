<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {

    function index(){
    
        $this->load->model('produtosModel');
		$produtos = $this->produtosModel->Destaques();
		$dados = array("produtos" => $produtos);
		
        $this->load->view("cabecalho");
        $this->load->view('index', $dados);
        $this->load->view("rodape");

    }
    
    function categoria($categoria){

        $this->load->model('produtosModel');
        $produtos = $this->produtosModel->todosCategoria($categoria);
        $dados = array("produtos" => $produtos);

        $this->load->view("cabecalho");
        $this->load->view('index', $dados);
        $this->load->view("rodape");
    }

    function busca(){

        $palavraChave = $this->input->post("palavra");

        $this->load->model('produtosModel');
        $produtos = $this->produtosModel->TodosPalavraChave($palavraChave);
        $dados = array("produtos" => $produtos);

        $this->load->view("cabecalho");
        $this->load->view('produtos', $dados);
        $this->load->view("rodape");
    }



}