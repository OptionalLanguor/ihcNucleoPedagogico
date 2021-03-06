<?php
defined('BASEPATH')    or    exit('No   direct  script  access  allowed');
class Aluno_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function pesquisa_aluno($pesquisa, $atributo="")
    {
        if($pesquisa == "")
            return $this->db->get('Aluno')->result();
        else if($atributo == "") 
        {  
            $this->db->from('Aluno');
            $this->db->like('nome', $pesquisa);
            $this->db->or_where('cpf', $pesquisa);
            $this->db->or_where('matricula', $pesquisa);
            $this->db->or_where('curso', $pesquisa);
            $this->db->or_where('periodo', (int)$pesquisa);
            return $this->db->get()->result();
        }
        else{
            $this->db->from('Aluno');
            $this->db->where($atributo, $pesquisa);
            $res = $this->db->get()->result();
            return (!empty($res))?$res[0]:false;
        }
    }
    public function cadastra_aluno($aluno)
    {
        $this->db->insert('Aluno', $aluno);
    }
    public function pesquisa_aluno_id($id)
    {
        $this->db->from('Aluno');
        $this->db->where('id_Pessoa', $id);
        $res = $this->db->get()->result();
        return (!empty($res))?$res[0]:false;
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
