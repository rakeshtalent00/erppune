<?php
class SubModule extends CI_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('SubModulemgt');
	$this->load->model('Modulemgt');
	}
	
	
	
	function index(){
		$data['moduleList'] = $this->Modulemgt->getModules();
		//echo "<pre>";print_r($data);die("Okkk");
		$this->load->view("submoduleIndex",$data);
	}

	
	function createsubModule(){
		$data = $this->input->post();
		//echo "<pre>";print_r($data);die("Testttttttt");
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
		$data['submoduleList'] = $this->SubModulemgt->getsubModules();
		$this->load->view("submoduleListIndex.php",$data);
	}

	function updatesubModuleForm(){
		$userId = $this->uri->segment(3);
		// echo $userId;die("Okk");
		$data['submoduleList'] = $this->SubModulemgt->getsubModuleData($userId);
		$data['moduleList'] = $this->Modulemgt->getModules();
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