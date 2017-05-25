<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_funcionario extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Funcionario_Model');
        $this->load->helper('url');
        $this->load->helper('form');
        $dados['sucesso_cadastro'] = null;
    }
    public function Index()
    {
        $pesquisa_res['resultado'] = $this->Funcionario_Model->pesquisa_funcionario('');
        $this->load->view('cadastrarFuncionario', $pesquisa_res);
    }
    public function Pesquisar()
    {
        $pesquisa = $this->input->post('variavel_pesquisa');
        $pesquisa_res['resultado'] = $this->Funcionario_Model->pesquisa_funcionario($pesquisa);
        $this->load->view('cadastrarFuncionario', $pesquisa_res);
    }

    public function Cadastrar()
    {
              $config = array(
              array(
                      'field' => 'nome',
                      'label' => 'Nome',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'cpf',
                      'label' => 'cpf',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'telefone',
                      'label' => 'telefone',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'login',
                      'label' => 'login',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'senha',
                      'label' => 'senha',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'email',
                      'label' => 'email',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              )
        );

          $this->form_validation->set_rules($config);

          if ($this->form_validation->run() == TRUE)
          {
            $funcionario = array(
              'nome' => $this->input->post('nome'),
              'cpf' => $this->input->post('cpf'),
              'telefone' => $this->input->post('telefone'),
              'login' => $this->input->post('login'),
              'senha' => $this->input->post('senha'),
              'email' => $this->input->post('email'),
            );
            $this->Funcionario_Model->cadastrar_funcionario($funcionario);
            $dados['resultado'] = $this->Funcionario_Model->pesquisa_funcionario('');
            $dados['sucesso_cadastro'] = "Cadastro realizado com sucesso!";
            $this->load->view('cadastrarFuncionario', $dados);
         }
         else {
           $pesquisa_res['resultado'] = $this->Funcionario_Model->pesquisa_funcionario('');
           $this->load->view('cadastrarFuncionario', $pesquisa_res);
         }
    }

    public function dados_funcionario()
    {
        $id_Funcionario = $this->input->post("id_Funcionario");

        $consulta = $this->Funcionario_Model->pesquisa_funcionario_id($id_Funcionario);

        $array_funcionario = array(

          "id_Funcionario" => $consulta[0]->id_Funcionario,
          "nome" => $consulta[0]->nome,
          "cpf" => $consulta[0]->cpf,
          "telefone" => $consulta[0]->telefone,
          "login" => $consulta[0]->login,
          "senha" => $consulta[0]->senha,
          "email" => $consulta[0]->email

        );

        echo json_encode($array_funcionario);
    }
    public function salvar_edicao()
    {
        $id_Funcionario = $this->input->post("id_Funcionario");
        $nome= $this->input->post("nome");
        $cpf= $this->input->post("cpf");
        $telefone= $this->input->post("telefone");
        $login= $this->input->post("login");
        $senha= $this->input->post("senha");
        $email= $this->input->post("email");

        $dados_atualizados = array(
            "id_Funcionario" =>$id_Funcionario,
            "nome" => $nome,
            "cpf" => $cpf,
            "telefone" => $telefone,
            "login" => $login,
            "senha" => $senha,
            "email" => $email
          );

        if ($this->Funcionario_Model->update_funcionario($id_Funcionario, $dados_atualizados)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function excluir()
    {
        $id_Funcionario = $this->input->post("id_Funcionario_exclusao");

        if ($this->Funcionario_Model->delete_funcionario($id_Funcionario))
            echo 1;
        else
            echo 0;
    }
}
