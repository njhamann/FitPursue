<?php

class Connection extends CI_Model {

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
 				FROM connection
 				WHERE user_id='$connection->user_id'
 				AND connection_id='$connection->connection_id'";
 				
		$res = $this->db->query($sql);  
		$items = $res->result();
	    return $items; 


    }
    
    function insert_connection($connection)
    {

    	$sql = "INSERT INTO connection
 				(user_id
 				,connection_id)
 				VALUES 
 				('$connection->user_id'
 				,'$connection->connection_id')";
 				
		$res = $this->db->query($sql);  


    }
    
    function delete_connection($connection)
    {

    	$sql = "DELETE FROM connection 
    			WHERE user_id='$connection->user_id'
 				AND connection_id='$connection->connection_id'";
 				
		$res = $this->db->query($sql);  


    }
    
    
}

?>