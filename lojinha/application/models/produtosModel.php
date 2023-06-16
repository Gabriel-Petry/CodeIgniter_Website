<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produtosModel extends CI_Model{

    function todos(){

        $consulta = "SELECT * FROM produto";
        $produtos = $this->db->query($consulta)->result_array();
        return $produtos;

    }

    function todosCategoria($categoria){

        $consulta = "SELECT * FROM produto WHERE categoria = '$categoria'";
        $produtos = $this->db->query($consulta)->result_array();
        return $produtos;

    }

    function TodosPalavraChave($palavraChave){

        $consulta = "SELECT * FROM produto WHERE descricao LIKE '%$palavraChave%' OR nome LIKE '%$palavraChave%'";
        $produtos = $this->db->query($consulta)->result_array();
        return $produtos;

    }

    function PPID($id){

        $consulta = "SELECT * FROM produto WHERE idProduto = '$id'";
        $produtos = $this->db->query($consulta)->result_array();
        return $produtos;

    }

    function Destaques(){

        $consulta = "SELECT * FROM produto WHERE destaque = 1";
        $produtos = $this->db->query($consulta)->result_array();
        return $produtos;

    }

}