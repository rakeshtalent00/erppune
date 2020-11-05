<?php
class Designation extends CI_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('Designationmgt');
	}
	
	
	
	function index(){
		$this->load->view("designationIndex");
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
		$this->load->view("designationListIndex.php",$data);
	}

	function updateDesignationForm(){
		$userId = $this->uri->segment(3);
		$data['designationList'] = $this->Designationmgt->getDesignationData($userId);
		//echo "<pre>";print_r($data);die("Okkk");
		$this->load->view("updateDesignationFormIndex",$data);
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