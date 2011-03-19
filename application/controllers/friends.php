<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friends extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
	}

	function index()
	{
		$this->check_session();
		$this->load->model('Workout', 'workout');
		$user->id = $this->tank_auth->get_user_id();
		$result['workouts'] = $this->workout->get_friend_workouts($user);


		for($i=0; $i<count($result['workouts']); $i++)
		{
			$post_time = $result['workouts'][$i]->workout_date;
			
			$post_date = human_to_unix($post_time);
			$post_date = timespan($post_date);
			
			$post_time_array = explode(", ", $post_date);
			$post_time_count = count($post_time_array);
			switch ($post_time_count) 
			{
			    case 0:
			        break;
			    case 1:
			        $post_date = strtolower($post_time_array[0])." ago";
			        break;
			    case 2:
			    	$post_date = strtolower($post_time_array[1])." ago";
			        break;
			    case 3:
			    	$post_date = strtolower($post_time_array[2])." ago";
			        break;
			    default:
					$post_date = date("j \of M y", $post_time);
			}
			$result['workouts'][$i]->workout_date = $post_date;
		}
		$this->load->view('friends', $result);
	}
	function check_session()
	{
	
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/home');
		}
	/*
		$loggedIn = $this->session->userdata('loggedIn');
		$userId = $this->session->userdata('id');
		
		if(!$loggedIn || $userId == ''){
			$session_items = array('loggedIn' => '', 'id' => '', 'username' => '');
			$this->session->unset_userdata($session_items);
			redirect('/home');
		}
		*/
	}
	
}





?>
