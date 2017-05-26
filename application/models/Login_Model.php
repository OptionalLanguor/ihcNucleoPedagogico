<?php

defined('BASEPATH')    or    exit('No	direct	script	access	allowed');
class Login_Model extends CI_Model
{
    public $usuario_info;

    public function __construct()
    {
        parent::__construct();
    }

    public function verifica_usuario($login, $senha)
    {
        // Build a query to retrieve the user's details
        // based on the received username and password
        $this->db->from('Funcionario');
        $this->db->where('login', $login);
        $this->db->where('senha', $senha);
        $usuario = $this->db->get()->result();

        // The results of the query are stored in $login.
        // If a value exists, then the user account exists and is validated
        if (is_array($usuario) && count($usuario) == 1) {
            $this->usuario_info = $usuario[0];

            $this->inicializar_sessao();

            return true;
        }

        return false;
    }
    public function inicializar_sessao()
    {
        $this->session->set_userdata(array(
        'email'  => $this->usuario_info->email,
        'esta_logado' => true,
        'adm' => $this->usuario_info->administrador
        )
      );
    }
}
