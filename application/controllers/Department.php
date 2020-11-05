<?php
class Department extends MY_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('Departmentmgt');
	}
	
	
	
	function index(){
		$this->data = $data;
		$this->page = "user/listUser";
		$this->title = "Users List";
		$this->layout();
		$this->load->view("departmentIndex");
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
		$this->load->view("departmentListIndex.php",$data);
	}

	function updateDepartmentForm(){
		$userId = $this->uri->segment(3);
		$data['departmentList'] = $this->Departmentmgt->getDepartmentsData($userId);
		//echo "<pre>";print_r($data);die("Okkk");
		$this->load->view("updateDepartmentFormIndex",$data);
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