<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller
{

  /*
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

  public function login()
  {

  }
  */


  function __construct()
  {
    parent::__construct();
    $this->load->model('Employee_model','',TRUE);
  }

  function index()
  {
    //This method will have the credentials validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', '');
    $this->form_validation->set_rules('password', 'Password', '');

    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->view('login');
    }
    else
    {
      //Go to private area
      redirect('default', 'refresh');
    }

  }

  function check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $email = $this->input->post('email');

    //query the database
    $result = $this->user->login($email, $password);

    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
            'id' => $row->id,
            'firstname' => $row->username
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