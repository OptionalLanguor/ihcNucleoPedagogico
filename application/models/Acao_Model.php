<?php

defined('BASEPATH')    or    exit('No   direct  script  access  allowed');
class Acao_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aluno_Model');
        $this->load->model('Categoria_Model');
        $this->load->model('Registro_Atendimento_Model');
        $this->load->model('Procedimento_Model');
    }

 public function pesquisa_acao($pesquisa)
    {    
            $this->db->select('RegistAtendimento.*,Procedimento.descricao as p_descricao,Acao.descricao as a_descricao, DATE_FORMAT(Acao.data,"%m-%d-%Y") as data_acao');
            $this->db->from('RegistAtendimento');
            $this->db->join('Procedimento', 'RegistAtendimento.id_Categoria = Procedimento.id_CategoriaProcedimento');
            $this->db->join('Acao', 'Procedimento.id_Procedimento = Acao.id_ProcedimentoAcao');

            return $this->db->get()->result();
    }


    public function cadastrar_acao($acao)
    {
      $this->db->from('Acao');
      $this->db->insert('Acao', $acao);
    }


 public function pesquisa_acao_id($id)
    {
        $this->db->from('Acao');
        $this->db->where('id_Acao', $id);
        return $this->db->get()->result();
    }
    public function update_acao($id_Acao=null,$dados_atualizados=null)
    {
      $this->db->where('id_Acao', $id_Acao);

      if($this->db->update('Acao', $dados_atualizados))
        return true;
      else
        return false;
    }
    public function delete_acao($id_Acao=null)
    {
      $this->db->where('id_Acao', $id_Acao);

      if($this->db->delete('Acao'))
        return true;
      else
        return false;
    }

     public function pesquisa_registro_atendimento($filtro_categoria)
        {
          if($filtro_categoria == "")
              {$this->db->select('RegistAtendimento.*, DATE_FORMAT(RegistAtendimento.data_abertura,"%m-%d-%Y") as data_formatada, Aluno.nome as nome_aluno, Aluno.matricula, Categoria.nome as nome_categoria');
              $this->db->from('RegistAtendimento');
              $this->db->join('Aluno', 'RegistAtendimento.id_Pessoa = Aluno.id_Pessoa');
              $this->db->join('Categoria', 'RegistAtendimento.id_Categoria = Categoria.id_Categoria');
              return $this->db->get()->result();}

              else {

                $this->db->select('RegistAtendimento.*, DATE_FORMAT(RegistAtendimento.data_abertura,"%m-%d-%Y") as data_formatada, Aluno.nome as nome_aluno, Aluno.matricula, Categoria.nome as nome_categoria');
                $this->db->from('RegistAtendimento');
                $this->db->join('Aluno', 'RegistAtendimento.id_Pessoa = Aluno.id_Pessoa');
                $this->db->join('Categoria', 'RegistAtendimento.id_Categoria = Categoria.id_Categoria');
                $this->db->where('RegistAtendimento.id_Categoria', $filtro_categoria);
                return $this->db->get()->result();

              }

        }

        public function pesquisa_registro_atendimento_filtro($filtro_categoria)
           {
                 $this->db->select('RegistAtendimento.*, DATE_FORMAT(RegistAtendimento.data_abertura,"%m-%d-%Y") as data_formatada, Aluno.nome as nome_aluno, Aluno.matricula, Categoria.nome as nome_categoria');
                 $this->db->from('RegistAtendimento');
                 $this->db->join('Aluno', 'RegistAtendimento.id_Pessoa = Aluno.id_Pessoa');
                 $this->db->join('Categoria', 'RegistAtendimento.id_Categoria = Categoria.id_Categoria');
                 $this->db->where('RegistAtendimento.id_Categoria', $filtro_categoria);
                 return $this->db->get()->result();

           }

}
