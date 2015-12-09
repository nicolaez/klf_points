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
    $this->load->model('Employee_model');
      $data = array(
          'name'=> 'Vasea Pupkin',
          'email'=>'a@a.com',
          'position'=>'boss',
          'points'=>100,
          'type'=>'admin',
          'passwd'=>'123456'
      );
    $emp = new Employee_model();
    $emp->add($data);
  }



  public function removeEmployee()
  {
    $this->Employee_model->removeEmployee($this->input->post('emp_id'));
    redirect('admin/manageemployees/');
  }



}