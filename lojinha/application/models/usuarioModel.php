<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model{

    public function buscaUsuario($login, $senha){

        $consulta = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
        $usuarios = $this->db->query($consulta)->result_array();
        return $usuarios;

    }
    
}