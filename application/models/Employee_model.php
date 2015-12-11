<?php
/**
 * Created by IntelliJ IDEA.
 * User: nicol
 * Date: 12/8/2015
 * Time: 3:54 PM
 */
class Employee_model extends CI_Model
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

  /**
   * @return mixed
   */
  public function getIdEmp()
  {
    return $this->id_emp;
  }

  /**
   * @param mixed $id_emp
   */
  public function setIdEmp($id_emp)
  {
    $this->id_emp = $id_emp;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @return mixed
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * @param mixed $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }

  /**
   * @return mixed
   */
  public function getPosition()
  {
    return $this->position;
  }

  /**
   * @param mixed $position
   */
  public function setPosition($position)
  {
    $this->position = $position;
  }

  /**
   * @return mixed
   */
  public function getAvatarBlob()
  {
    return $this->avatar_blob;
  }

  /**
   * @param mixed $avatar_blob
   */
  public function setAvatarBlob($avatar_blob)
  {
    $this->avatar_blob = $avatar_blob;
  }

  /**
   * @return mixed
   */
  public function getAvatarUrl()
  {
    return $this->avatar_url;
  }

  /**
   * @param mixed $avatar_url
   */
  public function setAvatarUrl($avatar_url)
  {
    $this->avatar_url = $avatar_url;
  }

  /**
   * @return mixed
   */
  public function getHireDate()
  {
    return $this->hire_date;
  }

  /**
   * @param mixed $hire_date
   */
  public function setHireDate($hire_date)
  {
    $this->hire_date = $hire_date;
  }

  /**
   * @return mixed
   */
  public function getPoints()
  {
    return $this->points;
  }

  /**
   * @param mixed $points
   */
  public function setPoints($points)
  {
    $this->points = $points;
  }

  /**
   * @return mixed
   */
  public function getEmpType()
  {
    return $this->emp_type;
  }

  /**
   * @param mixed $emp_type
   */
  public function setEmpType($emp_type)
  {
    $this->emp_type = $emp_type;
  }

  /**
   * @return mixed
   */
  public function getPasswd()
  {
    return $this->passwd;
  }

  /**
   * @param mixed $passwd
   */
  public function setPasswd($passwd)
  {
    $this->passwd = $passwd;
  }

  /**
   * @return mixed
   */
  public function getActive()
  {
    return $this->active;
  }

  /**
   * @param mixed $active
   */
  public function setActive($active)
  {
    $this->active = $active;
  }


  public function __construct()
  {
    parent::__construct();
  }

  public function add($data)
  {
    $this->db->set($data);
    $this->db->insert('employees', $data);
  }


  public function getAllEmployees()
  {
    $this->db->where('status = ', 1);
    $query = $this->db->get('employees');
    return $query->result();
  }


  public function addPointsToUser($id, $points)
  {
    $this->db->where('id_emp', $id);
    $this->db->select('points');
    $query = $this->db->get('employees');
    $tmp = $query->result();

    $total = (int)$tmp[0]->points + (int)$points;

    $this->db->query('UPDATE employees SET points='.$total.' WHERE id_emp='.$id);
  }

  public function blockEmployee($id)
  {
    $this->db->query('UPDATE employees SET status=0 WHERE id_emp='.$id);
  }

  public function removeEmployee($id)
  {
    $this->db->query('DELETE FROM employees WHERE id_emp='.$id);
  }

  public function removePointsToUser($id, $points)
  {
    $this->db->where('id_emp', $id);
    $this->db->select('points');
    $query = $this->db->get('employees');
    $tmp = $query->result();

    $total = (int)$tmp[0]->points - (int)$points;

    $this->db->query('UPDATE employees SET points='.$total.' WHERE id_emp='.$id);
  }

  public function getEmployeeById($id)
  {
    $this->db->where('id_emp', $id);
    $query = $this->db->get('employees');
    return $query->result();
  }

  public function updateEmployee($id, $data)
  {
    $this->db->where('id_emp', $id);
    $this->db->update('employees', $data);
  }

}