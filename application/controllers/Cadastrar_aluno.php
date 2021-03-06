<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_aluno extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('esta_logado'))) {
            redirect('login');
        }
        $this->load->model('Aluno_Model');
        $this->load->helper('url');
        $this->load->helper('form');
        $dados['sucesso_cadastro'] = null;
    }
    public function Index()
    {
        $pesquisa_res['resultado'] = $this->Aluno_Model->pesquisa_aluno('');
        $this->load->view('cadastrarAluno', $pesquisa_res);
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
                      'field' => 'CPF',
                      'label' => 'CPF',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'Email',
                      'label' => 'Email',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'Endereco',
                      'label' => 'Endereco',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'Telefone',
                      'label' => 'Telefone',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'RA',
                      'label' => 'RA',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'Curso',
                      'label' => 'Curso',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'Periodo',
                      'label' => 'Periodo',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              )
        );

        $this->form_validation->set_rules($config);

              if ($this->form_validation->run() == TRUE)
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
              $this->Aluno_Model->cadastra_aluno($aluno);
              $dados['resultado'] = $this->Aluno_Model->pesquisa_aluno('');
              $dados['sucesso_cadastro'] = "Cadastro realizado com sucesso!";
              $this->load->view('cadastrarAluno', $dados);
            }
            else {
              $pesquisa_res['resultado'] = $this->Aluno_Model->pesquisa_aluno('');
              $this->load->view('cadastrarAluno', $pesquisa_res);
            }


    }
    public function Pesquisar()
    {
        $pesquisa = $this->input->post('qualquer_atributo');
        $pesquisa_res['resultado'] = $this->Aluno_Model->pesquisa_aluno($pesquisa);
        $this->load->view('cadastrarAluno', $pesquisa_res);
    }
    public function dados_aluno()
    {
        $id_Pessoa = $this->input->post("id_Pessoa");

        $consulta = $this->Aluno_Model->pesquisa_aluno_id($id_Pessoa);

        $array_aluno = array(

          "id_Pessoa" => $consulta[0]->id_Pessoa,
            "nome" => $consulta[0]->nome,
            'cpf' => $consulta[0]->cpf,
            'email' => $consulta[0]->email,
            'endereco' => $consulta[0]->endereco,
            'telefone' => $consulta[0]->telefone,
            'matricula' => $consulta[0]->matricula,
            'curso' => $consulta[0]->curso,
            'periodo' => $consulta[0]->periodo

        );

        echo json_encode($array_aluno);
    }
    public function salvar_edicao()
    {
        $dados_atualizados = array(

          "id_Pessoa" => $this->input->post("id_Pessoa"),
            'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'email' => $this->input->post('email'),
            'endereco' => $this->input->post('endereco'),
            'telefone' => $this->input->post('telefone'),
            'matricula' => $this->input->post('matricula'),
            'curso' => $this->input->post('curso'),
            'periodo' => $this->input->post('periodo')
          );

        if ($this->Aluno_Model->update_aluno($dados_atualizados["id_Pessoa"], $dados_atualizados)) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function excluir()
    {
        $id_Pessoa = $this->input->post("id_Pessoa_exclusao");

        if ($this->Aluno_Model->delete_aluno($id_Pessoa))
            echo 1;
        else
            echo 0;
    }
}
