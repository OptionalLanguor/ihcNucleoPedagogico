<?php
defined('BASEPATH')    or    exit('No	direct	script	access	allowed');
class Professor_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function pesquisa_professor($pesquisa)
    {
        if($pesquisa == "")
            return $this->db->get('Professor')->result();

        $this->db->from('Professor');
        $this->db->like('siape', $pesquisa);
        $this->db->or_like('nome', $pesquisa);
        return $this->db->get()->result();
    }

    public function cadastrar_professor($professor)
    {
        $this->db->from('Professor');
        $this->db->insert('Professor', $professor);
    }

    public function pesquisa_professor_id($id)
    {
        $this->db->from('Professor');
        $this->db->where('id_Professor', $id);
        return $this->db->get()->result();
    }
    public function update_professor($id_Professor=null,$dados_atualizados=null)
    {
      $this->db->where('id_Professor', $id_Professor);

      if($this->db->update('Professor', $dados_atualizados))
        return true;
      else
        return false;
    }
    public function delete_professor($id_Professor=null)
    {
      $this->db->where('id_Professor', $id_Professor);

      if($this->db->delete('Professor'))
        return true;
      else
        return false;
    }
}
