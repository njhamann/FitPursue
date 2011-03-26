<?php

class Friend extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    function insert_account($account)
    {

    	$sql = "INSERT INTO account
 				(id
 				,isactive)
 				VALUES 
 				('$account->id'
 				,'$account->isActive')";
 				
		$res = $this->db->query($sql);  


    }
    
    function get_connection($connection)
    {

   		$sql = "SELECT *
 				FROM friend
 				WHERE user_id='$connection->user_id'
 				AND friend_id='$connection->friend_id'";
 				
		$res = $this->db->query($sql);  
		$items = $res->result();
	    return $items; 


    }
    
    function insert_connection($connection)
    {

    	$sql = "INSERT INTO friend
 				(user_id
 				,friend_id)
 				VALUES 
 				('$connection->user_id'
 				,'$connection->friend_id')";
 				
		$res = $this->db->query($sql);  


    }
    
    function delete_connection($connection)
    {

    	$sql = "DELETE FROM friend 
    			WHERE user_id='$connection->user_id'
 				AND friend_id='$connection->friend_id'";
 				
		$res = $this->db->query($sql);  


    }
    
    
}

?>