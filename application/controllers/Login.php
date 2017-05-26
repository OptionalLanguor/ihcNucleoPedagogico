<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    public function Index()
    {
        if (($this->session->userdata('esta_logado')) && ($this->session->userdata('adm')=="n")) {
            $this->load->view('menu_principal');
        }
        elseif (($this->session->userdata('esta_logado')) && ($this->session->userdata('adm')=="n"))
        {
            $this->load->view('menu_principal_adm');
        }
        else{
            $this->load->view('login');
        }
    }
    public function Checar_Login()
    {
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        if ($this->Login_Model->verifica_usuario($login, $senha))
        {
            if($this->session->userdata('adm')=="n"){
                $this->load->view('menu_principal');
            }
            else {
                $this->load->view('menu_principal_adm');
            }
        }
        else
        {
          $error_msg = array(
            'error_login_invalido' => 'Usuário ou senha inválidos');
            $this->load->view('login',$error_msg);
        }
    }
}
