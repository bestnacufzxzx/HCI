<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kfc extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menuhomenotlogandre');
		$this->load->view('home_menu/kfc/kfc');
		$this->load->view('template/js');
		// $this->load->view('template/footer');
	}
}
