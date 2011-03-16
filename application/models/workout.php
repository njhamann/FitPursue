<?php

class Workout extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function get_user_workouts($user)
	{
   		$sql = "SELECT *
				FROM workout
				WHERE user_id='$user->id'
				ORDER BY workout.id DESC";
 				
		$res = $this->db->query($sql);  
		$items = $res->result();
	    return $items;
	}
	function get_friend_workouts($user)
	{
		$sql = "SELECT *
				FROM friend
				LEFT JOIN workout
				ON friend.friend_id = workout.user_id
				LEFT JOIN user
				ON friend.friend_id = user.id
				WHERE friend.user_id = '$user->id'
				ORDER BY workout.id DESC";
 				
		$res = $this->db->query($sql);
		$items = $res->result();
		return $items;
	}
    function insert_workout($workout)
    {
    	$sql = "INSERT INTO workout
 				(user_id
				,type
				,notes
				,amount
				,amount_unit
				,amount_2
				,amount_2_unit
				,workout_date)
 				VALUES 
 				('$workout->user_id'
				,'$workout->type'
				,'$workout->notes'
				,'$workout->amount'
				,'$workout->amount_unit'
				,'$workout->amount_2'
				,'$workout->amount_2_unit'
				,'$workout->workout_date')";
 				
		$res = $this->db->query($sql);
		return $res;

    }
}

?>