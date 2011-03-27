<?php

class Comment extends CI_Model {

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
	function get_comments($comment)
	{
		$sql = "SELECT *
				FROM comment
				LEFT JOIN user_profiles
				ON comment.poster_id = user_profiles.user_id
				WHERE workout_id='$comment->id'";
 				
		$res = $this->db->query($sql);
		$items = $res->result();
		return $items;
	}
    function insert_comment($comment)
    {
    	$sql = "INSERT INTO comment
 				(poster_id
				,owner_id
				,workout_id
				,comment
				,posted_date)
 				VALUES 
 				('$comment->poster_id'
				,'$comment->owner_id'
				,'$comment->workout_id'
				,'$comment->comment'
				,'$comment->posted_date')";
 				
		$res = $this->db->query($sql);
		return $res;

    }
}

?>