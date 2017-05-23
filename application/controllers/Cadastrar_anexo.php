<?php
defined('BASEPATH') or exit('No    direct    script    access    allowed');
class Cadastrar_anexo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Anexo_Model');
        $this->load->helper('url');
        $this->load->helper('form');
    }


    public function Index()
    {
            $this->load->view('cadastrar_anexo');
    }

    public function Inserir()
    {
    		$nome=$this->input->post('nome');
    		$this->load->view('cadastrar_anexo');
    }

    public function Upload()
    {

      $config['upload_path']= '/var/www/html/ihcNucleoPedagogico/includes/anexos';
      $config['allowed_types']='jpg|png|jpeg|pdf';
      $config['max_size']             = 10240;
      $this->load->library('upload',$config);

      if (! $this->upload->do_upload('userfile'))
               {
                       $error = array('error' => $this->upload->display_errors());

                       $this->load->view('cadastrar_anexo', $error);
               }
               else
               {
                 $data = array(
                   'msg_sucesso' => 'Anexo Carregado com sucesso!');


                       $this->load->view('cadastrar_anexo', $data);
               }

    }

}
