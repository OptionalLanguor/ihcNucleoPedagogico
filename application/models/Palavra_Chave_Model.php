<?php

defined('BASEPATH')    or    exit('No   direct  script  access  allowed');
class Palavra_Chave_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function cadastrar_palavra_chave($nome)
    {
        $this->db->insert('PalavraChave', array('nome'=>$nome));
    }
}
