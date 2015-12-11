<?php
/**
 * Created by IntelliJ IDEA.
 * User: nicol
 * Date: 12/8/2015
 * Time: 3:54 PM
 */
class Employee_model extends CI_Model
{

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