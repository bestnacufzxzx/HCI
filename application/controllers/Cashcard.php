<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashcard extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menuhomenotlogandre');
		$this->load->view('home_menu/cashcard/cashcard');
		$this->load->view('home_menu/cashcard/script');
		$this->load->view('template/cashcard');
		$this->load->view('template/js');
		// $this->load->view('template/footer');
	}
}
