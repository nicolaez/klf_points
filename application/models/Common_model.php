<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 09/12/2015
 * Time: 12:20 PM
 */

class Common_model extends CI_Model
{
  public function getNavBarState()
  {
    $nav_state = array('addemployee' =>'',
        'manageemployees' =>'',
        'removeemployee' =>'',
        'managepoints' =>'',
        'addpoints' =>'',
        'removepoints' =>'',
        'logpoints' =>'',
        'settings' =>'');
    return $nav_state;
  }

}