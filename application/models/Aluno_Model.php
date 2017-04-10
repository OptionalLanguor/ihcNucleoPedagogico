<?php

defined('BASEPATH')    or    exit('No	direct	script	access	allowed');
class Aluno_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function cadastra_aluno($aluno)
    {
        $this->db->insert('Aluno', $aluno);
        return true;
    }
    public function pesquisa_aluno($matricula)
    {
        $this->db->from('Aluno');
        $this->db->where('matricula', $matricula);
        $res = $this->db->get()->result();
        return (!empty($res))?$res[0]:false;
    }
}
