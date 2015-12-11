<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Employee_model");
    $this->load->model("Points_model");
    $this->load->model("Common_model");
  }

  public function index()
  {
    if ($this->check_logged()) {
      $this->manageemployees();
    }
  }

  public function adminpage()
  {
    if ($this->check_logged()) {
      $this->manageemployees();
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

    if ($this->check_logged()) {
      $data['nav_state'] = $this->getMenuState('addpoints');
      $this->load->view('add_points', $data);
    }
  }

  public function removepoints()
  {
    if ($this->check_logged()) {
      $data['nav_state'] = $this->getMenuState('removepoints');
      $this->load->view('remove_points', $data);
    }
  }

  public function managepoints()
  {
    if ($this->check_logged()) {
      $data['nav_state'] = $this->getMenuState('managepoints');
      $data['rows'] = $this->Employee_model->getAllEmployees();
      $this->load->view('manage_points', $data);
    }
  }

  public function logpoints()
  {
    if ($this->check_logged()) {
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
    if ($this->session->userdata('logged_in')) {
      return true;
    } else {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }

  public function editemployee()
  {

    $this->editEmployeeProfile();
  }


  public function editEmployeeProfile()
  {
    if ($this->check_logged()) {
      $id = $_GET['id_rem'];
      $data['nav_state'] = $this->getMenuState('editemployee');
      $employees = $this->Employee_model->getEmployeeById($id);
      $data['emp'] = $employees[0];
      $this->load->view('edit_employee', $data);
    }

  }

  public function updateEmployeeProfile()
  {
    $id = $_POST['emp_id'];
    $data = array(
        'firstname' => $this->input->post('fname'),
        'lastname' => $this->input->post('lname'),
        'emp_position' => $this->input->post('emp_position'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'avatar_blob' => $this->input->post('avatar_blob'),
        'birthday' => $this->input->post('birthday'),
        'hire_date' => $this->input->post('hire_date'),
        'points' => $this->input->post('points'),
        'emp_type' => $this->input->post('emp_type'),
        'timestamp' => date("Y-m-d")
    );
    $this->Employee_model->updateEmployee($id, $data);
    redirect('admin/manageemployees/');

  }

  public function removeemployee()
  {
    if ($this->check_logged()) {
    $data['nav_state'] = $this->getMenuState('removeemployee');
    $id = $this->uri->segment(3);
    if ($id != '')
      $data = $id;
      $this->load->view('remove_employee', $data);
    }
  }


  public function manageemployees()
  {

    $data['nav_state'] = $this->getMenuState('manageemployees');

    if ($this->session->userdata('logged_in')) {
      $data['rows'] = $this->Employee_model->getAllEmployees();
      $this->load->view('manage_employees', $data);
    } else {
      //If no session, redirect to login page
      $this->load->view('login');
    }
  }


  public function settings()
  {

    $data['nav_state'] = $this->getMenuState('settings');
    if ($this->session->userdata('logged_in')) {
      $this->load->view('settings', $data);
    } else {
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

  public function pagination_demo($page = 1)
  {
    $this->load->model("Employee_model");
    $this->load->library('pagination');
    $this->load->library('app/paginationlib');

    try {
      $pagingConfig = $this->paginationlib->initPagination("/admin/pagination-demo", $this->Employee_model->get_count
      ());

      $this->data["pagination_helper"] = $this->pagination;
      $this->data["employees"] = $this->Employee_model->get_by_range((($page - 1) * $pagingConfig['per_page']),
          $pagingConfig['per_page']);

      return $this->view();
    } catch (Exception $err) {
      log_message("error", $err->getEmployee());
      return show_error($err->getEmployee());
    }
  }
}
