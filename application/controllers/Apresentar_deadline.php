<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Apresentar_deadline extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('esta_logado'))) {
            redirect('login');
        }
        $this->load->model('Registro_Atendimento_Model');
        $this->load->model('Aluno_Model');
        $this->load->model('Categoria_Model');
        $this->load->helper('url');
    }
    public function Index()
    {
        #$pesquisa_res['resultado'] = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento('');
        $pesquisa_res['resultado'] = $this->atendimentos_deadline();
        $this->load->view('apresentarDeadline', $pesquisa_res);
    }
    public function atendimentos_deadline()
    {
        $registros = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento('');
        $categorias = $this->Categoria_Model->pesquisa_categoria('');
        $registros_proximos = Array();
        if(isset($registros)){
            foreach($registros as $row) {
                $deadline=$categorias[$row->id_Categoria]->prazo_deadline;
                $sqldate=new DateTime($row->data_abertura);
                $now = new DateTime(null, new DateTimeZone('America/Sao_Paulo'));
                $sqldate->add(new DateInterval(sprintf('P%dD', $deadline)));
                $now->add(new DateInterval('P21D'));
                if($sqldate->getTimestamp() < $now->getTimestamp()){
                    $registros_proximos[]=$row;
                }
            }
        }

        return $registros_proximos;
    }
}
