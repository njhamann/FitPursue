<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}

	function index()
	{
		$this->check_session();
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$this->load->view('settings', $data);
	}
	function check_session()
	{
	
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */