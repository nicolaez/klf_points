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




}