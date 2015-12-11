<?php
/**
 * Created by IntelliJ IDEA.
 * User: nicol
 * Date: 12/8/2015
 * Time: 4:10 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Employee_model');
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->library('upload');
      $this->load->library('form_validation');
    }

  public function index()
  {
      $this->load->view('add_employee');
  }

  public function add_emp()
  {
    $add_emp_rules = array(
        array(
            'email' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'points' => 'points',
            'label' => 'Points',
            'rules' => 'required|integer'
        )
    );

    $this->form_validation->set_rules($add_emp_rules);

    if($this->form_validation->run()) {


      $data = array(
          'firstname' => $this->input->post('fname'),
          'lastname' => $this->input->post('lname'),
          'emp_position' => $this->input->post('emp_position'),
          'email' => $this->input->post('email'),
          'password' => ' ',
          'avatar_blob'   => $this->input->post('avatar_blob'),
        //  'avatar_url'    ,
        //  'avatar_url' => $this->input->post('avatar_url'),
          'birthday' => $this->input->post('birthday'),
          'hire_date' => $this->input->post('hire_date'),
          'points' => $this->input->post('points'),
          'emp_type' => $this->input->post('emp_type'),
          'timestamp' => date("Y-m-d")
      );

      $this->Employee_model->add($data);
      redirect('admin/manageemployees/');
    }
    else
      redirect('admin/addemployee/');

  }

  public function removeEmployee()
  {
    if($_POST['block'])
      $this->Employee_model->blockEmployee($this->input->post('emp_id'));
    if($_POST['remove'])
      $this->Employee_model->removeEmployee($this->input->post('emp_id'));
    redirect('admin/manageemployees/');
  }



}