<?php

class User extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	function get_user($user)
    {
   		$sql = "SELECT *
 				FROM users
 				LEFT JOIN user_profiles
				ON users.id = user_profiles.user_id
 				WHERE users.id='$user->id'";
 				
		$res = $this->db->query($sql);  
		$items = $res->result();
	    return $items;
    }
    function get_user_by_username($user)
    {
   		$sql = "SELECT *
 				FROM users
 				WHERE username='$user->username'";
 				
		$res = $this->db->query($sql);  
		$items = $res->result();
	    return $items;
    }
    
    
}

?>