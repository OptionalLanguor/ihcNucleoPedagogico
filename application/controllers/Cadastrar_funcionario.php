<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_funcionario extends CI_Controller
{
    public function Index()
    {    
            $this->load->view('cadastrarFuncionario');
    }
   
}
