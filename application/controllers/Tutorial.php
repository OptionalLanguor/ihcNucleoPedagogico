<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
	}

	public function Index()
	{
		$this->load->view('tutorial');
	}
}
