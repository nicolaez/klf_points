<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class Admin extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->model("Employee_model");
    $this->load->model("Points_model");
    $this->load->model("Common_model");
   // $data['nav_state'] = $this->Common_model->getNavBarState();
  }

  public function index()
  {

    if ($this->session->userdata('logged_in'))
    {
      $this->manageemployees();
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
      $this->manageemployees();
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
    $data['nav_state'] = $this->getMenuState('addpoints');
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('header');
      $this->load->view('add_points', $data);
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
    if ($this->check_logged())
    {
      $data['nav_state'] = $this->getMenuState('removepoints');
      $this->load->view('remove_points', $data);
    }
  }

  public function managepoints()
  {
    if ($this->check_logged())
    {
      $data['nav_state'] = $this->getMenuState('managepoints');
      $data['rows'] = $this->Employee_model->getAllEmployees();
      $this->load->view('manage_points', $data);
    }
  }

  public function logpoints()
  {
    if ($this->check_logged())
    {
      $data['nav_state'] = $this->getMenuState('logpoints');
      $data['rows'] = $this->Points_model->getAllPoints();
      $this->load->view('log_points', $data);
    }
  }


  public function addemployee()
  {
    if ($this->check_logged()) {
      $data['nav_state'] = $this->getMenuState('addemployee');
      $this->load->view('add_employee', $data);
    }
  }


  public function check_logged()
  {
    if ($this->session->userdata('logged_in'))
    {
     return true;
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }

  public function editemployee()
  {
    $data['nav_state'] = $this->getMenuState('editemployee');
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('header');
      $this->load->view('edit_employee', $data);
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
    $data['nav_state'] = $this->getMenuState('removeemployee');
    $id = $this->uri->segment(3);
    if($id != '')
      $data = $id;
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('header');
      $this->load->view('remove_employee', $data);
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

    $data['nav_state'] = $this->getMenuState('manageemployees');

    if ($this->session->userdata('logged_in'))
    {
      $data['rows'] = $this->Employee_model->getAllEmployees();
      $this->load->view('manage_employees', $data);
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }


  public function settings()
  {

    $data['nav_state'] = $this->getMenuState('settings');
    if ($this->session->userdata('logged_in'))
    {
      $this->load->view('settings', $data);
    }
    else
    {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }

  public function getMenuState($menu)
  {
    $nav_state = $this->Common_model->getNavBarState();
    $nav_state[$menu] = 'active';
    return $nav_state;
  }

  public function pagination_demo($page=1){
    $this->load->model("Employee_model");
    $this->load->library('pagination');
    $this->load->library('app/paginationlib');

    try
    {
      $pagingConfig   = $this->paginationlib->initPagination("/admin/pagination-demo",$this->Employee_model->get_count
      ());

      $this->data["pagination_helper"]   = $this->pagination;
      $this->data["employees"] = $this->Employee_model->get_by_range((($page-1) * $pagingConfig['per_page']),
          $pagingConfig['per_page']);

      return $this->view();
    }
    catch (Exception $err)
    {
      log_message("error", $err->getEmployee());
      return show_error($err->getEmployee());
    }
  }
}
