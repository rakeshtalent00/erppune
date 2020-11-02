<?php
class ModuleAccess extends CI_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('ModuleAccessmgt');
	$this->load->model('Usermgt');
	$this->load->model('Modulemgt');
	}
	
	
	
	function index(){
		$data['roleList'] = $this->Usermgt->getRoles();
		$data['moduleList'] = $this->Modulemgt->getModules();
		$data['accessList'] = $this->ModuleAccessmgt->accessList();
		//echo "<pre>";print_r($data);die("Okkkk");
		$this->load->view("accessListIndex",$data);
	}

	function createModuleAccess(){
		$data = $this->input->post();
		$res = $this->ModuleAccessmgt->createModuleAccess($data);
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

	function moduleAccessChecked(){
		$data = $this->input->post();
		$userRole = $data['userRole'];
		$res = $this->ModuleAccessmgt->moduleAccessChecked($userRole);
		echo $res;
	}
	
}
?>