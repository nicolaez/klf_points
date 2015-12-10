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
      $this->load->library('form_validation');
    }

  public function index()
  {
      $this->load->view('add_employee');
  }

  public function add_emp()
  {
    /*$add_emp_rules = array(
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

    $this->form_validation->set_rules($add_emp_rules); */

    //if($this->form_validation->run()) {

     /* $config['upload_path'] = base_url().'assets/img/';
      $config['allowed_types'] = 'jpg|jpeg|png|bmp|gif';
      //$config['max_size']             = '100';
      $this->load->library('upload', $config);

      if(!$this->upload->do_upload())
      {
        echo 'alert(ERROR)';
      }
    else
      $data = $this->upload->data();


    $this->config =  array(
        'upload_path'     => base_url().'./',
        //'upload_url'      => base_url().'./',
        'allowed_types'   => "gif|jpg|png|jpeg|pdf|doc|xml",
        'overwrite'       => TRUE,
        'max_size'        => "1000KB",
        'max_height'      => "768",
        'max_width'       => "1024"
    );

    $this->load->library('upload', $this->config);
    if($this->upload->do_upload())
    {
      echo "file upload success";
    }
    else
    {
      echo "file upload failed";
    }
    */
      $data = array(
          'firstname' => $this->input->post('fname'),
          'lastname' => $this->input->post('lname'),
          'emp_position' => $this->input->post('emp_position'),
          'email' => $this->input->post('email'),
          'password' => ' ',
        //    'avatar_blob'   => $this->input->post('image_blob'),
        //  'avatar_url'    ,
          'birthday' => $this->input->post('birthday'),
          'hire_date' => $this->input->post('hire_date'),
          'points' => $this->input->post('points'),
          'emp_type' => $this->input->post('emp_type'),
          'timestamp' => date("Y-m-d")
      );

      $this->Employee_model->add($data);
      redirect('admin/manageemployees/');
//    }
//    else
//      redirect('admin/addemployee/');
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