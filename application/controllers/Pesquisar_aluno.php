<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Pesquisar_aluno extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }


    public function Index()
    {
            $this->load->view('alunoPesquisar');
    }

}
