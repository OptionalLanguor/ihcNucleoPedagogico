<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_acao extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('esta_logado'))) {
            redirect('login');
        }
        $this->load->model('Acao_Model');
        $this->load->model('Categoria_Model');
        $this->load->model('Registro_Atendimento_Model');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function Index()
    {
            $dados['categoria'] = $this->Categoria_Model->pesquisa_categoria("");
            $dados['r_atendimento'] = $this->Acao_Model->pesquisa_registro_atendimento("");
            $this->load->view('cadastrar_acao',$dados);
    }


    public function Pesquisar()
    {
        $pesquisa = $this->input->post('option_RA');
        $pesquisa_res['resultado'] = $this->Acao_Model->pesquisa_acao($pesquisa);
        $this->load->view('cadastrar_acao', $pesquisa_res);
    }




    public function Inserir()
    {
    		$nome=$this->input->post('descricao');
    		$this->Acao_Model->cadastrar_acao($descricao);
        $this->load->view('cadastrar_acao');
    }

    public function categoria_selecionada()
    {
      $id = $this->input->post('option_categoria');
      $categoria = $this->Categoria_Model->pesquisa_categoria("")[$id-1]->id_Categoria;
      $dados['categoria'] = $this->Categoria_Model->pesquisa_categoria("");

      $dados['r_atendimento'] = $this->Acao_Model->pesquisa_registro_atendimento($categoria);

      $this->load->view('cadastrar_acao',$dados);
          $dados['categoria_id'] = $categoria;

    }

    public function Cadastrar()
    {
              $config = array(
              array(
                      'field' => 'data',
                      'label' => 'Data',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),
              array(
                      'field' => 'descricao',
                      'label' => 'Descricao',
                      'rules' => 'required',
                      'errors' => array(
                              'required' => '*Campo obrigatório.',
                      ),
              ),

        );

          $this->form_validation->set_rules($config);

          if ($this->form_validation->run() == TRUE)
          {
            $acao = array(
              'data' => $this->input->post('data'),
              'descricao' => $this->input->post('descricao'),

            );
            $this->Acao_Model->cadastrar_acao($acao);
            $dados['resultado'] = $this->Acao_Model->pesquisa_acao('');
            $dados['sucesso_cadastro'] = "Cadastro realizado com sucesso!";
            $this->load->view('cadastrarAcao', $dados);
         }
         else {
           $pesquisa_res['resultado'] = $this->Acao_Model->pesquisa_acao('');
           $this->load->view('cadastrarAcao', $pesquisa_res);
         }
    }


    public function excluir()
    {
        $id_Acao = $this->input->post("id_Acao_exclusao");

        if ($this->Acao_Model->delete_acao($id_Acao))
            echo 1;
        else
            echo 0;
    }

}
