<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{

 function login($username, $password)
 {
   $this -> db -> select('username, password,level,nama,foto');
   $this -> db -> from('tb_user');
   $this -> db -> where('username', $username);
   $this -> db -> where('password',$password);
  
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