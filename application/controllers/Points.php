<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 08/12/2015
 * Time: 4:05 PM
 */
class Points extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Points_model');
    $this->load->model('Employee_model');
    $this->load->helper('form');
  }

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->view('welcome_message');
  }

  public function addPoints()
  {
      $data = array(
          'id_emp' => $this->input->post('emp_id'),
          'points' => $this->input->post('points'),
          'subject' => $this->input->post('subject'),
          'description' => $this->input->post('description')
      );
    $this->Points_model->addLogPoints($data);
    $this->Employee_model->addPointsToUser($this->input->post('emp_id'),$this->input->post('points'));
    redirect('admin/manageemployees/');
  }

  public function removePoints()
  {
    $data = array(
        'id_emp' => $this->input->post('emp_id'),
        'points' => $this->input->post('points'),
        'subject' => $this->input->post('subject'),
        'description' => $this->input->post('description')
    );
    $this->Points_model->addLogPoints($data);
    $this->Employee_model->removePointsToUser($this->input->post('emp_id'),$this->input->post('points'));
    redirect('admin/manageemployees/');
  }
}
