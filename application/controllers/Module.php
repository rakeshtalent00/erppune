<?php
class Module extends CI_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('Modulemgt');
	}
	
	
	
	function index(){
		$this->load->view("moduleIndex");
	}

	
	function createModule(){
		$data = $this->input->post();
		$res = $this->Modulemgt->createModule($data);
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

	function moduleList(){
		$data['moduleList'] = $this->Modulemgt->getModules();
		$this->load->view("moduleListIndex.php",$data);
	}

	function updateModuleForm(){
		$userId = $this->uri->segment(3);
		$data['moduleList'] = $this->Modulemgt->getModuleData($userId);
		//echo "<pre>";print_r($data);die("Okkk");
		$this->load->view("updateModuleFormIndex",$data);
	}

	function updateModule(){
		//echo "<pre>";print_r($this->input->post());die("Okk");
		 $data = $this->input->post();
		$res = $this->Modulemgt->updateModule($data);
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