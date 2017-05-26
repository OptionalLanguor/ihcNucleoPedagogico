<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_principal extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			if (!($this->session->userdata('esta_logado'))) {
					redirect('login');
			}
	}

	public function Index()
	{
		if ($this->session->userdata('esta_logado') && $this->session->userdata('adm')=="n") {
				$this->load->view('menu_principal');
		}
		elseif ($this->session->userdata('esta_logado') && $this->session->userdata('adm')=="s")
		{
				$this->load->view('menu_principal_adm');
		}
		else{
				$this->load->view('login');
		}
	}
}
