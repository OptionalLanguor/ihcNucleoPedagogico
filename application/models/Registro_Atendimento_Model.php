<?php
defined('BASEPATH')    or    exit('No   direct  script  access  allowed');
class Registro_Atendimento_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pesquisa_registro_atendimento($pesquisa)
    {
        if($pesquisa == "")
            return $this->db->get('RegistAtendimento')->result();

        $this->db->from('RegistAtendimento');
        $this->db->where('data_abertura', $pesquisa);
        $this->db->or_like('descricao', $pesquisa);
        $this->db->or_where('id_Categoria', $pesquisa);
        $this->db->or_where('id_Pessoa', $pesquisa);
        $this->db->or_where('id_Registro', $pesquisa);
        $this->db->or_like('observacao', $pesquisa);

        return $this->db->get()->result();
    }
    public function cadastra_registro_atendimento($registro_atendimento)
    {
        $this->db->insert('RegistAtendimento', $registro_atendimento);
    }
    public function pesquisa_registro_atendimento_id($id)
    {
        $this->db->from('RegistAtendimento');
        $this->db->where('id_Registro', $id);
        return $this->db->get()->result();
    }
    public function update_registro_atendimento($id_Registro=null, $dados_atualizados=null)
    {
      $this->db->where('id_Registro', $id_Registro);

      if($this->db->update('RegistAtendimento', $dados_atualizados))
        return true;
      else
        return false;
    }
    public function delete_registro_atendimento($id_Registro=null)
    {
      $this->db->where('id_Registro', $id_Registro);

      if($this->db->delete('RegistAtendimento'))
        return true;
      else
        return false;
    }
}
