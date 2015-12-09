<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class Admin extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if ($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['firstname'] = $session_data['firstname'];
      $this->load->view('header');
      $this->load->view('add_employee');
      $this->load->view('footer');
     // $this->load->view('template', $data);
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
      //redirect('login', 'refresh');
    }
  }

  public function adminpage()
  {
    if ($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['firstname'] = $session_data['firstname'];
      $this->load->view('header');
      $this->load->view('add_employee');
      $this->load->view('footer');
      // $this->load->view('template', $data);
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
    redirect('/admin/', 'refresh');
  }


  public function addpoints()
  {
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('header');
      $this->load->view('add_points');
      $this->load->view('footer');
      // $this->load->view('template', $data);
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
      //redirect('login', 'refresh');
    }
  }

  public function removepoints()
  {
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('header');
      $this->load->view('remove_points');
      $this->load->view('footer');
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }

  public function managepoints()
  {
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('header');
      $this->load->view('manage_points');
      $this->load->view('footer');
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }

  public function addemployee()
  {
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('header');
      $this->load->view('add_employee');
      $this->load->view('footer');
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }

  public function removeemployee()
  {
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('header');
      $this->load->view('remove_employee');
      $this->load->view('footer');
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }

  public function manageemployees()
  {
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('header');
      $this->load->view('manage_employees');
      $this->load->view('footer');
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }

  public function settings()
  {
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('settings');
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }
}
