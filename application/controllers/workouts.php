<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workouts extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		
		$this->load->model('User', 'user');
		$user->id = $this->session->userdata('id');
		$workout_result = $this->user->get_user($user);
		$result['user'] = $workout_result[0];       
		

		$this->load->view('add_workout', $result);
	}

	function submit()
	{
	
		$this->load->database();
        
		$this->load->model('Workout', 'workout');
		
		
		$this->load->model('User', 'user');
		$user->id = $this->session->userdata('id');
		$workout_result = $this->user->get_user($user);
		$result['user'] = $workout_result[0]; 
		
		
		$workout->user_id = $this->session->userdata('id');
		$workout->type = $this->input->post('type');
		$workout->amount = $this->input->post('amount');
		$workout->amount_unit = $this->input->post('amount_unit');
		$workout->amount_2 = $this->input->post('amount_2');
		$workout->amount_2_unit = $this->input->post('amount_2_unit');
		$workout->notes = $this->input->post('notes');
		$workout->workout_date = date( 'Y-m-d H:i:s');
		$this->workout->insert_workout($workout);

		$this->load->view('add_workout', $result);	
		
	}
	
}
?>
