<?php

class Friend extends Model {

    function Friend()
    {
        parent::Model();
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
}

?>