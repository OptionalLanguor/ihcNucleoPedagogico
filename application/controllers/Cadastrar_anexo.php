<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_anexo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Anexo_Model');
        $this->load->helper('url');
        $this->load->helper('form');
    }


    public function Index()
    {
            $this->load->view('cadastrar_anexo');
    }

    public function Inserir()
    {
    		$nome=$this->input->post('nome');
    		$this->load->view('cadastrar_anexo');
    }

}
