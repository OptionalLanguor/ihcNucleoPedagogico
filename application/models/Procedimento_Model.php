<?php

defined('BASEPATH')    or    exit('No	direct	script	access	allowed');
class Procedimento_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function cadastra_procedimento($procedimento)
    {
        $this->db->insert('Procedimento', $procedimento);
        return true;
    }
}
