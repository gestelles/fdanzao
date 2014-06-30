<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class UserModel extends CI_Model {
 
   function new_instance() {
     $obj = new StdClass();
     $obj->id = 0;
     $obj->created = time();
     $obj->username = '';
     $obj->passord = '';
     $obj->status = 'INI';
     $obj->name = '';
     return $obj;
   }

   function checkuser($email) {
      $this->db->from('users');
      $this->db->where('username', $email);
      return ($this->db->count_all_results()>0);
   }

   function login($username, $password) {
      $this -> db -> select('id, username, password');
      $this -> db -> from('users');
      $this -> db -> where('username', $username);
      $this -> db -> where('password', MD5($password));
      $this -> db -> limit(1);
      $query = $this -> db -> get();
      if($query -> num_rows() == 1) {
        return $query->result();
      } else {
        return false;
      }
   }

   function save($user) {
      try {
      $this->db->trans_start();
      $this->db->query("SET @id=NULL;");
      $a_procedure = "CALL user_save (@id,?,?,?,?);";
      $a_result = $this->db->query( $a_procedure, 
            array('_username' =>$user->username,
                  '_password' =>$user->password,
                  '_name'     =>$user->name,
                  '_status'   =>$user->status) );
      $user->id = $this->db->query("SELECT @id");
      

      //echo $outValue;
   } catch (Exception $ex) {
      echo "aaaa";
      echo $ex->error_message();

      throw $ex; 
      return;
   }
      $this->db->trans_complete();
      return $this->db->trans_status();
   }

   function countries() {
      $this -> db -> select('country_iso_code, country_name');
      $this -> db -> from('geocities');
      $this -> db -> group_by ('country_iso_code, country_name');
      return $this -> db -> get() -> result();
   }

   function states($country_iso_code) {
      $this -> db -> select('subdivision_iso_code, subdivision_name');
      $this -> db -> from('geocities');
      $this -> db -> where('country_iso_code', $country_iso_code);
      $this -> db -> group_by ('subdivision_iso_code, subdivision_name');
      return $this -> db -> get() -> result();
   } 

}
?>

