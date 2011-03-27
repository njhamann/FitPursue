<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workouts extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		
		$this->load->model('User', 'user');
		$user->id = $this->tank_auth->get_user_id();
		$workout_result = $this->user->get_user($user);
		$result['user'] = $workout_result[0];       
		

		$this->load->view('add_workout', $result);
	}
	function add_workout()
	{
		$this->load->model('User', 'user');
		$user->id = $this->tank_auth->get_user_id();
		$workout_result = $this->user->get_user($user);
		$result['user'] = $workout_result[0]; 
		$this->load->view('add_workout', $result);

	}
	function submit()
	{
	
		$this->load->database();
        
		$this->load->model('Workout', 'workout');
		
		
		$this->load->model('User', 'user');
		$user->id = $this->tank_auth->get_user_id();
		$workout_result = $this->user->get_user($user);
		$result['user'] = $workout_result[0]; 
		
		$workout->user_id = $this->tank_auth->get_user_id();
		$workout->type = $this->input->post('type');
		$workout->amount = $this->input->post('amount');
		$workout->amount_unit = $this->input->post('amount_unit');
		$workout->amount_2 = $this->input->post('amount_2');
		$workout->amount_2_unit = $this->input->post('amount_2_unit');
		$workout->notes = $this->input->post('notes');
		$workout->workout_date = date( 'Y-m-d H:i:s');
		$this->workout->insert_workout($workout);
		redirect('/workouts/add_workout');
		//$this->load->view('add_workout', $result);	
		
	}
	
	function details()
	{
		$this->load->model('Workout', 'workout');
		$this->load->model('Comment', 'comment');

		$workout->id = $this->uri->segment(3, 0);
		$workout_result = $this->workout->get_workout($workout);
		$comment_result = $this->comment->get_comments($workout);

		$result['workout'] = $workout_result[0];
		$result['comments'] = $comment_result;
		//print_r($result['workout']);

		//print_r($result['comments']);

		$this->load->view('workout_details', $result);
	}
	
	function submit_comment()
	{
		$this->load->database();
        
		$this->load->model('Comment', 'comment');
		$comment->poster_id = $this->tank_auth->get_user_id();
		$comment->owner_id = $this->input->post('owner_id');
		$comment->workout_id = $this->uri->segment(3, 0);
		$comment->comment = $this->input->post('comment');
		$comment->posted_date = date( 'Y-m-d H:i:s');
		$this->comment->insert_comment($comment);
		redirect('/workouts/details/'.$this->uri->segment(3, 0));


	}
	
}
?>
