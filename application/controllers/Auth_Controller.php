<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Employee_model','',TRUE);
    $this->load->model('Auth','',TRUE);
  }

  function index()
  {
    //This method will have the credentials validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');

    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->view('login');
    }
    else
    {
      //Go to private area
      redirect('/admin/adminpage/', 'refresh');
    }
  }

  function check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $email = $this->input->post('email');

    //query the database
    $result = $this->Auth->login($email, $password);

    if($result)
    {
      foreach($result as $row)
      {
        $sess_array = array(
            'id_emp' => $row->id_emp,
            'firstname' => $row->firstname
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }
}