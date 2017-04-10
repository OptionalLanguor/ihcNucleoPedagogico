<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_aluno extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aluno_Model');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    public function Index()
    {
        $this->load->view('alunoCadastrar');
    }
    public function Cadastrar()
    {
    	$aluno = array(
		'nome' => $this->input->post('Nome'),
		'cpf' => $this->input->post('CPF'),
		'email' => $this->input->post('Email'),
		'endereco' => $this->input->post('Endereco'),
		'telefone' => $this->input->post('Telefone'),
		'matricula' => $this->input->post('RA'),
		'curso' => $this->input->post('Curso'),
		'periodo' => $this->input->post('Periodo')
		);
        if ($this->Aluno_Model->cadastra_aluno($aluno)) {
          	$sucesso_msg = array(
            'sucesso_msg' => 'Cadastro realizado');
            $this->load->view('alunoCadastrar',$sucesso_msg);
        }
    }
}
