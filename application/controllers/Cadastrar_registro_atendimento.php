<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_registro_atendimento extends CI_Controller
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
        $this->load->helper('form');
    }
    public function Index()
    {
        $pesquisa_res['resultado'] = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento('');
        $this->load->view('cadastrar_registro_atendimento', $pesquisa_res);
    }
    public function Cadastrar()
    {
    	$registro_atendimento = array(
		'data_abertura' => $this->input->post('Data de abertura'),
		'descricao' => $this->input->post('Descricao'),
		'id_Categoria' => $this->input->post('id_Categoria'),
		'id_Pessoa' => $this->input->post('id_Pessoa'),
		'id_Registro' => $this->input->post('id_Registro'),
		'observacao' => $this->input->post('observacao')
        //lembrar de quardar a data de abertura automaticamente
		);
        $this->Registro_Atendimento_Model->cadastra_registro_atendimento($registro_atendimento);
        $pesquisa_res['resultado'] = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento('');
        $this->load->view('cadastrar_registro_atendimento', $pesquisa_res);
    }
    public function PesquisaAluno()
    {
        $pesquisa = $this->input->post('qualquer_atributo');
        $pesquisa_res['pesquisaAluno'] = $this->Aluno_Model->pesquisa_aluno($pesquisa);
        $pesquisa_res['isOpen'] = "yes";
        $this->load->view('cadastrar_registro_atendimento', $pesquisa_res);
        #echo <phpdocument.getElementById("modalCadastrarRegistroAtendimento").style.display = "block";
        #$pesquisa_res['pesquisaAluno'] = $this->Aluno_Model->pesquisa_aluno($pesquisa);
        #return $pesquisa_res
    }

    public function dynamicTableAluno()
    {
      $pesquisa = $this->input->post('qualquer_atributo');
      $pesquisaAluno = $this->Aluno_Model->pesquisa_aluno($pesquisa);


      echo '<div class="w3-container">
            <table class="w3-table-all">
            <thead>
              <tr class="w3-gray">
                <th>Matrícula</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Curso</th>
                <th>Periodo</th>
              </tr>
            </thead>';
            if(isset($pesquisaAluno)){foreach($pesquisaAluno as $row) { 
              echo '<tr>
                        <td>' . $row->matricula . '</td>
                        <td>' . $row->nome . '</td>
                        <td>' . $row->cpf . '</td>
                        <td>' . $row->curso . '</td>
                        <td>' . $row->periodo . '</td>
                    </tr>';
            }}
            echo '</table>
                  </div>
                  ';
    }

    public function PesquisaCategoria()
    {
        $pesquisa = $this->input->post('qualquer_atributo');
        $pesquisa_res['pesquisaCategoria'] = $this->Categoria_Model->pesquisa_categoria($pesquisa);
        $this->load->view('cadastrar_categoria', $pesquisa_res);
    }
    public function Pesquisar()
    {
        $pesquisa = $this->input->post('qualquer_atributo');
        $pesquisa_res['resultado'] = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento($pesquisa);
        $this->load->view('cadastrar_registro_atendimento', $pesquisa_res);
    }

    public function dados_registro_atendimento()
    {
        $id_Registro = $this->input->post("id_Registro");

        $consulta = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento_id($id_Registro);

        $array_registro_atendimento = array(

            'data_abertura' => $consulta[0]->data_abertura,
            'descricao' => $consulta[0]->descricao,
            'id_Categoria' => $consulta[0]->id_Categoria,
            'id_Pessoa' => $consulta[0]->id_Pessoa,
            'id_Registro' => $consulta[0]->id_Registro,
            'observacao' => $consulta[0]->observacao
        );
        echo json_encode($array_registro_atendimento);
    }
    public function salvar_edicao()
    {
        $dados_atualizados = array(

            'data_abertura' => $this->input->post("data_abertura"),
            'descricao' => $this->input->post('descricao'),
            'id_Categoria' => $this->input->post('id_Categoria'),
            'id_Pessoa' => $this->input->post('id_Pessoa'),
            'id_Registro' => $this->input->post('id_Registro'),
            'observacao' => $this->input->post('observacao')
          );

        if ($this->Registro_Atendimento_Model->update_registro_atendimento($dados_atualizados["id_Registro"], $dados_atualizados)) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function excluir()
    {
        $id_Registro = $this->input->post("id_Registro_exclusao");

        if ($this->Registro_Atendimento_Model->delete_registro_atendimento($id_Registro))
            echo 1;
        else
            echo 0;
    }
}
