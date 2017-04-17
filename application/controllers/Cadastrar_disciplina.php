<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_disciplina extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Disciplina_Model');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    public function Index()
    {
        $this->load->view('cadastrarDisciplina');
    }
    public function Pesquisar()
    {
        $pesquisa = $this->input->post('Nome_ou_Sigla');
        $pesquisa_res['resultado'] = $this->Disciplina_Model->pesquisa_disciplina($pesquisa);
        $this->load->view('cadastrarDisciplina', $pesquisa_res);
    }

    public function Cadastrar()
    {
        $disciplina = array(
          'nome' => $this->input->post('Nome'),
          'sigla' => $this->input->post('Sigla'),
        );
        $this->Disciplina_Model->Cadastrar_disciplina($disciplina);
        $this->load->view('cadastrarDisciplina');
    }

    public function dados_disciplina()
    {
        $id_Disciplina = $this->input->post("id_Disciplina");

        $consulta = $this->Disciplina_Model->pesquisa_disciplina_id($id_Disciplina);

        $array_disciplina = array(

          "id_Disciplina" => $consulta[0]->id_Disciplina,
          "nome" => $consulta[0]->nome,
          "sigla" => $consulta[0]->sigla

        );

        echo json_encode($array_disciplina);
    }
    public function salvar_edicao()
    {
        $id_Disciplina = $this->input->post("id_Disciplina");
        $nome= $this->input->post("nome");
        $sigla = $this->input->post("sigla");

        $dados_atualizados = array(
            "id_Disciplina" =>$id_Disciplina,
            "nome" => $nome,
            "sigla" => $sigla
          );

        if ($this->Disciplina_Model->update_disciplina($id_Disciplina, $dados_atualizados)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function excluir()
    {
        $id_Disciplina = $this->input->post("id_Disciplina_exclusao");

        if ($this->Disciplina_Model->delete_disciplina($id_Disciplina))
            echo 1;
        else
            echo 0;
    }
}
