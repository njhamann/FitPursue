<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		echo "index page";
	}

	function user()
	{
		$result = null;
		if($this->session->userdata('loggedIn') && $this->uri->segment(1, 0) == $this->session->userdata('username'))
		{
			$result = $this->getWorkoutData();
			$this->load->view('workouts', $result);

		}
		else
		{
			$userData = $this->getUserData();
			
			if(count($userData) == 1)
			{
				$this->createUserSession($userData[0]);
				$result = $this->getWorkoutData();
				$this->load->view('workouts', $result);

			}
			else
			{
				$this->load->view('home');
			}
		}
	}
	
	function createUserSession($results)
	{
		$sessionData = array(
			'loggedIn' => TRUE,
			'username' => $results->username,
			'id'    => $results->id,	
		);
		
		$this->session->set_userdata($sessionData);
	}
	function getUserData()
	{
		$this->load->model('User', 'user');
		$user->username = $this->uri->segment(1, 0);
		$workout_result = $this->user->get_user_by_username($user);
		return $workout_result;
	}
	function getWorkoutData()
	{
		$this->load->model('Workout', 'workout');
		$user->id = $this->session->userdata('id');
		$result['workouts'] = $this->workout->get_user_workouts($user);

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
			    	$post_date = strtolower($post_time_array[0])." ago";
			        break;
			    default:

					$post_date = date("j \of M y", strtotime($post_time));
			}
			
			$result['workouts'][$i]->workout_date = $post_date;
		}
		return $result;
	}
}





?>
