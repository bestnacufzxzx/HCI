<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlineshopping extends CI_Controller {


	public function index()
	{
		$this->load->view('template/buttonbarcode');
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home_menu/onlineshopping/onlineshopping');
		$this->load->view('template/js');
		// $this->load->view('template/footer');
	}
}
