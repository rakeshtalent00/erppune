<?php
class Designation extends MY_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('Designationmgt');
	}
	
	
	
	function index(){
		$this->page = "designation/createDesignationForm";
		$this->title = "Create Designation";
		$this->layout();
	}

	
	function createDesignation(){
		$data = $this->input->post();
		$res = $this->Designationmgt->createDesignation($data);
		$operation='';
		if($res==true)
		{
			$operation=array("success"=>true,"data"=>"success","error"=>"No Error");
			echo json_encode($operation);
		}
		else
		{
			$operation=array("success"=>false,"data"=>"","error"=>"User Creation Failed");
			echo json_encode($operation);
		}
	}

	function designationList(){
		$data['designationList'] = $this->Designationmgt->getDesignation();
		$this->data = $data;
		$this->page = "designation/designationList";
		$this->title = "Designation List";
		$this->layout();
	}

	function updateDesignationForm(){
		$userId = $this->uri->segment(3);
		$data['designationList'] = $this->Designationmgt->getDesignationData($userId);
		$this->data = $data;
		$this->page = "designation/updateDesignationForm";
		$this->title = "Update Designation";
		$this->layout();
		//$this->load->view("updateDesignationFormIndex",$data);
	}

	function updateDesignation(){
		//echo "<pre>";print_r($this->input->post());die("Okk");
		 $data = $this->input->post();
		$res = $this->designationIndex->updateDesignation($data);
		$operation='';
		if($res==true)
		{
			$operation=array("success"=>true,"data"=>"success","error"=>"No Error");
			echo json_encode($operation);
		}
		else
		{
			$operation=array("success"=>false,"data"=>"","error"=>"Designation Updation Failed");
			echo json_encode($operation);
		}
	}

	
	
}
?>