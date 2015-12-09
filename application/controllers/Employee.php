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
      $this->load->library('upload');
    }

  public function index()
  {
      $this->load->view('add_employee');
  }

  public function add_emp()
  {

      $data = array(
          'firstname'     => $this->input->post('fname'),
          'lastname'      => $this->input->post('lname'),
          'emp_position'  => $this->input->post('emp_position'),
          'email'         => $this->input->post('email'),
          'password'      => ' ',
          //'avatar_blob'   ,
        //  'avatar_url'    ,
          'birthday'      => $this->input->post('birthday'),
          'hire_date'     => $this->input->post('hire_date'),
          'points'        => $this->input->post('points'),
          'emp_type'      => $this->input->post('emp_type')
      );

    $this->Employee_model->add($data);
    redirect('admin/manageemployees/');
  }



  public function removeEmployee()
  {
    $this->Employee_model->removeEmployee($this->input->post('emp_id'));
    redirect('admin/manageemployees/');
  }



}