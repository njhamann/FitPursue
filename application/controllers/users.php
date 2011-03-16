<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		echo "made it here";
	}

	function user()
	{
		$user = $this->uri->segment(1,0);
		echo "made it here ".$user;


		
	}
	
}
?>
