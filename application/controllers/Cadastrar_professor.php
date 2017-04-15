<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_professor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Professor_Model');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    public function Index()
    {
        $this->load->view('cadastrarProfessor');
    }
    public function Pesquisar()
    {
        $pesquisa = $this->input->post('Nome_ou_Siape');
        $pesquisa_res['resultado'] = $this->Professor_Model->pesquisa_professor($pesquisa);
        $this->load->view('cadastrarProfessor', $pesquisa_res);
    }

    public function Cadastrar()
    {
        $professor = array(
          'nome' => $this->input->post('Nome'),
          'siape' => $this->input->post('Siape'),
        );
        $this->Professor_Model->cadastrar_professor($professor);
        $this->load->view('cadastrarProfessor');
    }

    public function dados_professor()
    {
        $id_Professor = $this->input->post("id_Professor");

        $consulta = $this->Professor_Model->pesquisa_professor_id($id_Professor);

        $array_professor = array(

          "id_Professor" => $consulta[0]->id_Professor,
          "nome" => $consulta[0]->nome,
          "siape" => $consulta[0]->siape

        );

        echo json_encode($array_professor);
    }
    public function salvar_edicao()
    {
        $id_Professor = $this->input->post("id_Professor");
        $nome= $this->input->post("nome");
        $siape = $this->input->post("siape");

        $dados_atualizados = array(
            "id_Professor" =>$id_Professor,
            "nome" => $nome,
            "siape" => $siape
          );

        if ($this->Professor_Model->update_professor($id_Professor, $dados_atualizados)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function excluir()
    {
        $id_Professor = $this->input->post("id_Professor_exclusao");

        if ($this->Professor_Model->delete_professor($id_Professor))
            echo 1;
        else
            echo 0;
    }
}
