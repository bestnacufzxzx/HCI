<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		$this->load->view('template/headerlogin');
		$this->load->view('template/headregister');
		$this->load->view('template/meunregister');
		$this->load->view('home_menu/register/register');
		$this->load->view('home_menu/register/script');
		$this->load->view('template/footerlogin');

	}
}