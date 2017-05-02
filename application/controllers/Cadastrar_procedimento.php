<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_procedimento extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('esta_logado'))) {
            redirect('login');
        }
        $this->load->model('Procedimento_Model');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    public function Index()
    {
        $this->load->view('procedimentoCadastrar');
    }
    public function Cadastrar()
    {
    	$procedimento = array(
		'descricao' => $this->input->post('Descricao'),
		);
        if ($this->Procedimento_Model->Cadastrar_procedimento($procedimento)) {
          	$sucesso_msg = array(
            'sucesso_msg' => 'Cadastro realizado');
            $this->load->view('procedimentoCadastrar',$sucesso_msg);
        }
    }
}
