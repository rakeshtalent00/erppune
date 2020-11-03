<?php
class User extends CI_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('Subjectmgt');
	}
	
	
	function index(){
		$this->load->view("subject.php");
	}
}
?>