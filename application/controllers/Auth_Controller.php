<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $CI = &get_instance();
    $CI->load->library('session');
    $CI->load->helper('url');
    if (!$this->session->userdata('logged_in')) {
      redirect('login');
    }
  }
}