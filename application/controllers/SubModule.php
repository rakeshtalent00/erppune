<?php
class SubModule extends MY_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('SubModulemgt');
	$this->load->model('Modulemgt');
	}
	
	
	
	function index(){
		$data['moduleList'] = $this->Modulemgt->getModules();
		$this->data = $data;
		$this->page = "submodule/createsubModuleForm";
		$this->title = "Create SubModule";
		$this->layout();
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
		$this->data = $data;
		$this->page = "submodule/subModuleList";
		$this->title = "SubModule List";
		$this->layout();
	}

	function updatesubModuleForm(){
		$userId = $this->uri->segment(3);
		// echo $userId;die("Okk");
		$data['submoduleList'] = $this->SubModulemgt->getsubModuleData($userId);
		$data['moduleList'] = $this->Modulemgt->getModules();
		$this->data = $data;
		$this->page = "submodule/updatesubModuleForm";
		$this->title = "Update SubModule";
		$this->layout();
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