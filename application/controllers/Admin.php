<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class Admin extends CI_Controller {


  public function __construct()
  {
    parent:: __construct();
  }

  public function index()
  {
    if (true)
    {
      //	$this->load->helper('url');
      $this->load->view('header');
      $this->load->view('add_employee');
      $this->load->view('footer');

      //$this->load->view('default');

    }

//    $this->load->helper(array('form'));
 //   $this->load->view('login');

  }


/*
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['firstname'] = $session_data['firstname'];
      $this->load->view('template', $data);
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
      //redirect('login', 'refresh');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('default', 'refresh');
  }
*/
}
