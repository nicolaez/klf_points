<?php
Class Auth extends CI_Model
{

  function login($email, $password)
  {
    $this -> db -> select('id_emp, email, password');
    $this -> db -> from('employees');
    $this -> db -> where('email', $email);
    $this -> db -> where('password', $password);
    $this -> db -> limit(1);

    $query = $this -> db -> get();

    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }
}
?>