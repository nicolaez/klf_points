<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
}
