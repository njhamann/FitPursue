<?php

class User extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	function get_user($user)
    {
   		$sql = "SELECT *
 				FROM user
 				WHERE id='$user->id'";
 				
		$res = $this->db->query($sql);  
		$items = $res->result();
	    return $items;
    }
    
    
    
}

?>