<?php
defined('BASEPATH')    or    exit('No	direct	script	access	allowed');
class Disciplina_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function pesquisa_disciplina($pesquisa)
    {
        $this->db->from('Disciplina');
        $this->db->like('sigla', $pesquisa);
        $this->db->or_like('nome', $pesquisa);
        return $this->db->get()->result();
    }

    public function cadastrar_disciplina($disciplina)
    {
        $this->db->from('Disciplina');
        $this->db->insert('Disciplina', $disciplina);
    }

    public function pesquisa_disciplinar_id($id)
    {
        $this->db->from('Disciplina');
        $this->db->where('id_Disciplina', $id);
        return $this->db->get()->result();
    }
    public function update_disciplina($id_Disciplina=null,$dados_atualizados=null)
    {
      $this->db->where('id_Disciplina', $id_Disciplina);

      if($this->db->update('Disciplina', $dados_atualizados))
        return true;
      else
        return false;
    }
}
