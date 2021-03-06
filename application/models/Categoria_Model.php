<?php

defined('BASEPATH')    or    exit('No	direct	script	access	allowed');
class Categoria_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function cadastra_categoria($categoria)
    {
        $this->db->insert('Categoria', $categoria);
        return true;
    }
    public function pesquisa_categoria($nome)
    {
        if($nome == "")
            return $this->db->get('Categoria')->result();

        $this->db->from('Categoria');
        $this->db->where('nome', $nome);
        $res = $this->db->get()->result();
        return (!empty($res))?$res[0]:false;
    }
    public function pesquisa_categoria_id($id)
    {
        $this->db->from('Categoria');
        $this->db->where('id_Categoria', $id);
        $res = $this->db->get()->result();
        return (!empty($res))?$res[0]:false;
    }
}
