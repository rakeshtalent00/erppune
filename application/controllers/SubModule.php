<?php
class SubModule extends CI_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('SubModulemgt');
	}
	
	
	
	function index(){
		$this->load->view("submoduleIndex");
	}

	
	function createsubModule(){
		$data = $this->input->post();
		$res = $this->SubModulemgt->createsubModule($data);
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

	function submoduleList(){
		$data['submoduleList'] = $this->SubModulemgt->getModules();
		$this->load->view("submoduleListIndex.php",$data);
	}

	function updatesubModuleForm(){
		$userId = $this->uri->segment(3);
		$data['submoduleList'] = $this->SubModulemgt->getsubModuleData($userId);
		//echo "<pre>";print_r($data);die("Okkk");
		$this->load->view("updatesubModuleFormIndex",$data);
	}

	function updatesubModule(){
		//echo "<pre>";print_r($this->input->post());die("Okk");
		 $data = $this->input->post();
		$res = $this->SubModulemgt->updatesubModule($data);
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