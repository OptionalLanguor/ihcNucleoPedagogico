<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_categoria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categoria_Model');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    public function Index()
    {
        $this->load->view('categoriaCadastrar');
    }
    public function Cadastrar()
    {
    	$categoria = array(
		'nome' => $this->input->post('Nome'),
        'data_criacao' => date('m/d/Y h:i:s a', time()),
		);
        if ($this->Categoria_Model->cadastra_categoria($categoria)) {
          	$sucesso_msg = array(
            'sucesso_msg' => 'Cadastro realizado');
            $this->load->view('categoriaCadastrar',$sucesso_msg);
        }
    }
}
