<?php
defined('BASEPATH')    or    exit('No	direct	script	access	allowed');
class Funcionario_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function pesquisa_funcionario($pesquisa)
    {
        if($pesquisa == "")
            return $this->db->get('Funcionario')->result();

        $this->db->from('Funcionario');
        $this->db->like('login', $pesquisa);
        $this->db->or_like('nome', $pesquisa);
        $this->db->or_like('cpf', $pesquisa);
        $this->db->or_like('email', $pesquisa);
        return $this->db->get()->result();
    }

    public function cadastrar_funcionario($funcionario)
    {
        $this->db->from('Funcionario');
        $this->db->insert('Funcionario', $funcionario);
    }

    public function pesquisa_funcionario_id($id)
    {
        $this->db->from('Funcionario');
        $this->db->where('id_Funcionario', $id);
        return $this->db->get()->result();
    }
    public function update_funcionario($id_Funcionario=null,$dados_atualizados=null)
    {
      $this->db->where('id_Funcionario', $id_Funcionario);

      if($this->db->update('Funcionario', $dados_atualizados))
        return true;
      else
        return false;
    }
    public function delete_funcionario($id_Funcionario=null)
    {
      $this->db->where('id_Funcionario', $id_Funcionario);

      if($this->db->delete('Funcionario'))
        return true;
      else
        return false;
    }
}
