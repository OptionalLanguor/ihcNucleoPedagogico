<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_professor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('esta_logado'))) {
            redirect('login');
        }
        $this->load->model('Professor_Model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $dados['sucesso_cadastro'] = null;
    }
    public function Index()
    {
        $pesquisa_res['resultado'] = $this->Professor_Model->pesquisa_professor('');
        $this->load->view('cadastrarProfessor', $pesquisa_res);
    }
    public function Pesquisar()
    {
        $pesquisa = $this->input->post('Nome_ou_Siape');
        $pesquisa_res['resultado'] = $this->Professor_Model->pesquisa_professor($pesquisa);
        $this->load->view('cadastrarProfessor', $pesquisa_res);
    }

    public function Cadastrar()
    {
            $config = array(
            array(
                    'field' => 'Nome',
                    'label' => 'Nome',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => '*Campo obrigatório.',
                    ),
            ),
            array(
                    'field' => 'Siape',
                    'label' => 'SIAPE',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => '*Campo obrigatório.',
                    ),
            )
      );

      $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == TRUE)
        {
          $professor = array(
            'nome' => $this->input->post('Nome'),
            'siape' => $this->input->post('Siape'),
          );
          $this->Professor_Model->cadastrar_professor($professor);
          $dados['resultado'] = $this->Professor_Model->pesquisa_professor('');
          $dados['sucesso_cadastro'] = "Cadastro realizado com sucesso!";
          $this->load->view('cadastrarProfessor', $dados);
        }
        else {
          $pesquisa = $this->input->post('Nome_ou_Siape');
          $pesquisa_res['resultado'] = $this->Professor_Model->pesquisa_professor($pesquisa);
          $this->load->view('cadastrarProfessor', $pesquisa_res);
        }
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
