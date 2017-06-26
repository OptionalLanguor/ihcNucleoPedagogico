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
        $registros = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento('');
        $pesquisa_res['resultado'] = $this->registros_formatados($registros);
        $this->load->view('cadastrar_registro_atendimento', $pesquisa_res);
    }
    public function registros_formatados($registros){
        $registros_formatados = Array();
        if(isset($registros)){
            foreach($registros as $row) {
                $row->nome_aluno = $this->Aluno_Model->pesquisa_aluno_id($row->id_Pessoa)->nome;
                $row->nome_categoria = $this->Categoria_Model->pesquisa_categoria_id($row->id_Categoria)->nome;
                $sqldate = new DateTime($row->data_abertura,new DateTimeZone('America/Sao_Paulo'));
                $row->data_abertura = date_format($sqldate, 'd/m/Y H:i');
                $registros_formatados[]=$row;
            }
        }
        return $registros_formatados;
    }
    public function Cadastrar()
    {
        $now = new DateTime(null, new DateTimeZone('America/Sao_Paulo'));
    	$registro_atendimento = array(
		'data_abertura' => date_format($now, 'Y/m/d H:i'),
		'descricao' => $this->input->post('descricao'),
        'observacao' => $this->input->post('observacao'),
		'id_Categoria' => $this->input->post('id_Categoria_Registro'),
		'id_Pessoa' => $this->input->post('id_Pessoa_Registro'),
        //lembrar de quardar a data de abertura automaticamente
		);
        $this->Registro_Atendimento_Model->cadastra_registro_atendimento($registro_atendimento);
        $registros = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento('');
        $pesquisa_res['resultado'] = $this->registros_formatados($registros);
        $this->load->view('cadastrar_registro_atendimento', $pesquisa_res);
    }
    public function PesquisaAluno()
    {
        $pesquisa = $this->input->post('matricula_aluno');
        $pesquisa_res['pesquisaAluno'] = $this->Aluno_Model->pesquisa_aluno($pesquisa,'matricula');

        $id_Categoria = $this->input->post('id_Categoria');
        $pesquisa_res['pesquisaCategoria'] = $this->Categoria_Model->pesquisa_categoria_id($id_Categoria);
        $pesquisa_res['isOpen'] = "yes";
        $this->load->view('cadastrar_registro_atendimento', $pesquisa_res);
        #echo <phpdocument.getElementById("modalCadastrarRegistroAtendimento").style.display = "block";
        #$pesquisa_res['pesquisaAluno'] = $this->Aluno_Model->pesquisa_aluno($pesquisa);
        #return $pesquisa_res
    }
    public function PesquisaCategoria()
    {
        $pesquisa = $this->input->post('nome_categoria');
        $pesquisa_res['pesquisaCategoria'] = $this->Categoria_Model->pesquisa_categoria($pesquisa);

        $id_Pessoa = $this->input->post('id_Pessoa');
        $pesquisa_res['pesquisaAluno'] = $this->Aluno_Model->pesquisa_aluno_id($id_Pessoa);

        $pesquisa_res['isOpen'] = "yes";
        $this->load->view('cadastrar_registro_atendimento', $pesquisa_res);
    }

    public function Pesquisar()
    {
        $pesquisa = $this->input->post('qualquer_atributo');
        $registros = $this->Registro_Atendimento_Model->pesquisa_registro_atendimento($pesquisa);
        $pesquisa_res['resultado'] = $this->registros_formatados($registros);
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
