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
    public function cmp_date($a, $b)
    {
        if ($a->dias_restantes == $b->dias_restantes) 
        {
           return 0;
        }
        return ($a->dias_restantes < $b->dias_restantes) ? -1 : 1;
    }
    public function seleciona_categoria_id($lista_categoria, $id)
    {
        foreach($lista_categoria as $categoria) {
            if($categoria->id_Categoria==$id)
                return $categoria;
        }
    }
    public function atendimentos_deadline()
    {
        $registros = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento('');
        $categorias = $this->Categoria_Model->pesquisa_categoria('');
        $registros_proximos = Array();
        if(isset($registros)){
            foreach($registros as $row) {
                $deadline = $this->seleciona_categoria_id($categorias,$row->id_Categoria)->prazo_deadline;
                $sqldate = new DateTime($row->data_abertura,new DateTimeZone('America/Sao_Paulo'));
                $now = new DateTime(null, new DateTimeZone('America/Sao_Paulo'));
                $sqldate->add(new DateInterval(sprintf('P%dD', $deadline)));
                $now->add(new DateInterval('P30D'));
                if($sqldate->getTimestamp() < $now->getTimestamp()){
                    $row->nome_aluno = $this->Aluno_Model->pesquisa_aluno_id($row->id_Pessoa)->nome;
                    $row->nome_categoria = $this->Categoria_Model->pesquisa_categoria_id($row->id_Categoria)->nome;
                    $now = new DateTime(null, new DateTimeZone('America/Sao_Paulo'));
                    $row->dias_restantes = ($sqldate->getTimestamp()-$now->getTimestamp())/(60*60*24);
                    $sqldate = new DateTime($row->data_abertura,new DateTimeZone('America/Sao_Paulo'));
                    $row->data_abertura = date_format($sqldate, 'd/m/Y');
                    $row->hora_abertura = date_format($sqldate, 'H:i');
                    $dias=floor($row->dias_restantes);
                    if($dias>0){
                        if($dias<7)
                            $row->dias_restantes_texto = sprintf('Tempo restante: %d dias.', $dias);
                        elseif($dias>=7 && $dias%7==0)
                            $row->dias_restantes_texto = sprintf('Tempo restante:</br>%d semanas.', $dias/7);
                        else
                            $row->dias_restantes_texto = sprintf('Tempo restante:</br>%d semanas e %d dias.', $dias/7, $dias%7);
                    }
                    else if($dias==0){
                        $row->dias_restantes_texto = 'Entrega é para hoje.';
                    }
                    else {
                        $row->dias_restantes_texto = 'Entrega está atrasada';
                    }
                    #$row->dias_restantes_texto=sprintf('%d',$dias);
                    $registros_proximos[]=$row;
                }
            }
        }

        usort($registros_proximos, array($this, "cmp_date"));

        return $registros_proximos;
    }
}
