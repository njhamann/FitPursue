<?php

class Logout extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$session_items = array('loggedIn' => '', 'id' => '', 'username' => '');
		$this->session->unset_userdata($session_items);
		redirect('/home');
	}
}


/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */

?>