<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_palavra_chave extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Palavra_Chave_Model');
        $this->load->helper('url');
        $this->load->helper('form');
    }


    public function Index()
    {    
            $this->load->view('cadastrar_palavra_chave');
    }

    public function Inserir()
    {    
    		$nome=$this->input->post('nome');
    		$this->Palavra_Chave_Model->cadastrar_palavra_chave($nome);
            $this->load->view('cadastrar_palavra_chave');
    }
   
}
