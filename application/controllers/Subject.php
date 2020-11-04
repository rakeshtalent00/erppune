<?php
class Subject extends MY_Controller{
	function __construct()
	{
	    parent::__construct();
	}
	
	
	
	function index(){
		$this->page = "Subject/subjectForm";
		$this->title = "Dashboard";
		$this->layout();
		//$this->load->view("userIndex");
	}
}
?>