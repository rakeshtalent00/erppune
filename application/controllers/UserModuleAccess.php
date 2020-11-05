<?php
class UserModuleAccess extends MY_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('UserModuleAccessmgt');
	$this->load->model('Usermgt');
	$this->load->model('Modulemgt');
	}
	
	
	
	function index(){
		$data['roleList'] = $this->Usermgt->getRoles();
		$data['moduleList'] = $this->Modulemgt->getModules();
		$data['subModuleList'] = $this->UserModuleAccessmgt->subModuleList();
		$data['accessList'] = $this->UserModuleAccessmgt->accessList();
		$this->data = $data;
		$this->page = "usermoduleaccess/usermoduleAccessForm";
		$this->title = "User Module Access";
		$this->layout();
	}

	function createUserModuleAccess(){
		$data = $this->input->post();
		//echo "<pre>";print_r($data);die("Okkk");
		$res = $this->UserModuleAccessmgt->createUserModuleAccess($data);
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

	function userModuleAccessCheckedUser(){
		$data = $this->input->post();
		$userRole = $data['userRole'];
		$userId = $data['userId'];
		$res = $this->UserModuleAccessmgt->userModuleAccessCheckedUser($userRole,$userId);
		echo $res;
	}

	function userModuleAccessChecked(){
		$data = $this->input->post();
		$userRole = $data['userRole'];
		$res = $this->UserModuleAccessmgt->userModuleAccessChecked($userRole);
		echo $res;
	}
	
}
?>