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
	}

	function create()
	{
		$this->page = "subject/createSubject";
		$this->title = "Create Subject";
		$this->layout();
		
	}
}
?>