<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homenotlogandre extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/headerlogin');
		$this->load->view('template/menuhomenotlogandre');
		$this->load->view('Homenotlogandre');
		$this->load->view('template/js');
		$this->load->view('template/footer');
	}

	
}