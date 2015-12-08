<?php
/**
 * Created by IntelliJ IDEA.
 * User: nicol
 * Date: 12/8/2015
 * Time: 4:10 PM
 */
class Employee extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Employee');
    }

  public function index()
  {
      $this->load->view('index');
  }
}