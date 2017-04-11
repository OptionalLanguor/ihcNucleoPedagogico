<?php

defined('BASEPATH')    or    exit('No	direct	script	access	allowed');
class Aluno_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function pesquisa_aluno($matricula)
    {
        $this->db->from('Aluno');
        $this->db->where('matricula', $matricula);
        $res = $this->db->get()->result();
        return (!empty($res))?$res[0]:false;
    }
    public function cadastra_aluno($aluno)
    {
        $this->db->from('Aluno');
        $this->db->where('matricula', $aluno['matricula']);
        $res = $this->db->get()->result();
        if(empty($res) && strlen($aluno['cpf']) == 11){
            $this->db->insert('Aluno', $aluno);
            return true;
        }
        else{
            return false;
        }
    }
}
