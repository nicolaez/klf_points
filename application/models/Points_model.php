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

  public function getAllPoints($limit = 15)
  {
    //$this->db->where('status = ', 1);
    $this->db->order_by('timestamp desc');
    $query = $this->db->get('log_points', $limit, 1);
    return $query->result();
  }


}