<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('template/headerlogin');
		$this->load->view('template/headregister');
		$this->load->view('template/menulogin');
		$this->load->view('home_menu/login/login');
		$this->load->view('home_menu/login/script');
		$this->load->view('template/footerlogin');
	
	}

}
