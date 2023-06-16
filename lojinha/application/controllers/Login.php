<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function Logar(){

        $login = $this->input->post("login");
        $senha = $this->input->post("senha");
        $this->load->model("usuarioModel");
        $usuarios = $this->usuarioModel->buscaUsuario($login, $senha);
        if (count($usuarios) > 0) {
            $dados = array("login"=>$login,
                            "nome"=>$usuarios[0]['nome'] );
            $this->session->set_userdata($dados);                    
            redirect('/Inicial/index', 'refresh');
        }
        else { //ERRO
            
            $this->session->set_flashdata('loginInvalido', true);
            $this->load->view('cabecalho');
            $this->load->view('usuario');
            $this->load->view('rodape');

        }


    }

    public function Deslogar(){

        $this->session->unset_userdata('login');
        $this->session->unset_userdata('nome');

        redirect('/Inicial/index', 'refresh');

    }

}