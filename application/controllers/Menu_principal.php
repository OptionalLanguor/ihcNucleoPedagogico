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
		$this->load->view('menu_principal');
	}
}
