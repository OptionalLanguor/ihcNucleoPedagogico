<?php
defined('BASEPATH')    or    exit('No   direct  script  access  allowed');
class Aluno_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function pesquisa_registro($pesquisa)
    {
        if($pesquisa == "")
            return $this->db->get('registatendimento')->result();
        
        $this->db->from('registatendimento');
        $this->db->where('data_abertura', $pesquisa);
        $this->db->or_like('descricao', $pesquisa);
        $this->db->or_where('id_Categoria', $pesquisa);
        $this->db->or_where('id_Pessoa', $pesquisa);
        $this->db->or_where('id_Registro', $pesquisa);
        $this->db->or_like('observacao', $pesquisa);
        
        return $this->db->get()->result();
    }
    public function cadastra_aluno($aluno)
    {
        $this->db->insert('Aluno', $aluno);
    }
    public function pesquisa_aluno_id($id)
    {
        $this->db->from('Aluno');
        $this->db->where('id_Pessoa', $id);
        return $this->db->get()->result();
    }
    public function update_aluno($id_Pessoa=null,$dados_atualizados=null)
    {
      $this->db->where('id_Pessoa', $id_Pessoa);

      if($this->db->update('Aluno', $dados_atualizados))
        return true;
      else
        return false;
    }
    public function delete_aluno($id_Pessoa=null)
    {
      $this->db->where('id_Pessoa', $id_Pessoa);

      if($this->db->delete('Aluno'))
        return true;
      else
        return false;
    }
}
