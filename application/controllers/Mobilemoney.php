<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobilemoney extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home_menu/mobilemoney/mobilemoney');
		$this->load->view('home_menu/mobilemoney/script');
		$this->load->view('template/js');
    }
}
