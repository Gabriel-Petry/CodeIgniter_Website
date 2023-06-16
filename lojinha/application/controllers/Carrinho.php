<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller {

    function cesta(){
    
        $this->load->view("cabecalho");
        $this->load->view("carrinho");
        $this->load->view("rodape");

    }

    function adicionar($idProduto){
        
        $this->load->model("produtosModel");
        $produtos = $this->produtosModel->PPID($idProduto);
        $produto = $produtos[0];

        $preco = $produto['preco'];

        if($produto['preco_promo'] != null) { 
            $preco = $produto['preco_promo']; 
        } 

        $data = array(
            "id" => $produto['idProduto'],
            "qty" => 1,
            "price" => $preco,
            "name" => $produto['nome']
        );

        $this->cart->insert($data);

        redirect('/Carrinho/cesta', 'refresh');

    }

    public function atualizar(){

        $data = array(
            'rowid' => $this->input->post('rowid'),
            'qty' => $this->input->post('qty')
        );

        $this->cart->update($data);

        redirect('/carrinho/cesta');

    }

    public function excluir($rowid)
    {

        echo $this->input->post('qty');

        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );

        $this->cart->update($data);

        redirect('/Carrinho/cesta');
    }
}