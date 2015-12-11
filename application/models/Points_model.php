<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 08/12/2015
 * Time: 4:02 PM
 */

class Points_model extends CI_Model
{
  public function addLogPoints($data)
  {
    $this->db->set($data);
    $this->db->insert('log_points', $data);
  }

  public function getAllPoints($limit = 30)
  {
    $this->db->select('id, e.points as epoints, CONCAT (e.firstname, " " ,  e.lastname) as ename,
    log_points.subject,     log_points.timestamp,
    CONCAT (a.firstname, " " ,  a.lastname) as aname,
     log_points.points as apoints');
    $this->db->join('employees e', 'log_points.id_emp = e.id_emp', 'left');
    $this->db->join('employees a', 'log_points.id_admin = a.id_emp', 'left');
    $this->db->order_by('id desc');
    $query = $this->db->get('log_points', $limit, 1);
    return $query->result();
  }


}