<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Pesquisar_aluno extends CI_Controller
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
        $this->load->view('alunoPesquisar');
    }
    public function Pesquisar()
    {
    	$matricula = $this->input->post('RA');

        $pesquisa_res = $this->Aluno_Model->pesquisa_aluno($matricula);

        if($pesquisa_res!=false){
        	$this->load->view('alunoPesquisar',$pesquisa_res);
        }
        else{
        	$this->load->view('alunoPesquisar');
        }
    }
}