<?php
/**
 * Created by IntelliJ IDEA.
 * User: nicol
 * Date: 12/8/2015
 * Time: 3:54 PM
 */
class Employee extends CI_Model
{
  private $id_emp;
  private $name;
  private $email;
  private $position;
  private $avatar_blob;
  private $avatar_url;
  private $hire_date;
  private $points;
  private $emp_type;
  private $passwd;
  private $active;

  public function __construct()
  {
    parent::__construct();
  }

  public function add($data)
  {
    $this->db->set($data);
    $this->db->insert('employee', $data);
  }
}