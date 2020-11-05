<?php
class Department extends MY_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('Departmentmgt');
	}
	
	
	
	function index(){
		$this->page = "department/createDepartmentForm";
		$this->title = "Create Department";
		$this->layout();
	}

	
	function createDepartment(){
		$data = $this->input->post();
		$res = $this->Departmentmgt->createDepartment($data);
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

	function departmentList(){
		$data['departmentList'] = $this->Departmentmgt->getDepartments();
		$this->data = $data;
		$this->page = "department/departmentList";
		$this->title = "Department List";
		$this->layout();
		// $this->load->view("departmentListIndex.php",$data);
	}

	function updateDepartmentForm(){
		$userId = $this->uri->segment(3);
		$data['departmentList'] = $this->Departmentmgt->getDepartmentsData($userId);
		$this->data = $data;
		$this->page = "department/updateDepartmentForm";
		$this->title = "Department Update";
		$this->layout();
		//$this->load->view("updateDepartmentFormIndex",$data);
	}

	function updateDepartment(){
		//echo "<pre>";print_r($this->input->post());die("Okk");
		 $data = $this->input->post();
		$res = $this->Departmentmgt->updateDepartment($data);
		$operation='';
		if($res==true)
		{
			$operation=array("success"=>true,"data"=>"success","error"=>"No Error");
			echo json_encode($operation);
		}
		else
		{
			$operation=array("success"=>false,"data"=>"","error"=>"Department Updation Failed");
			echo json_encode($operation);
		}
	}

	
	
}
?>