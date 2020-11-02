<?php
class UserModuleAccess extends CI_Controller{
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
		//echo "<pre>";print_r($data);die("Okkkk");
		$this->load->view("useraccessListIndex",$data);
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

	function userModuleAccessChecked(){
		$data = $this->input->post();
		$userRole = $data['userRole'];
		$res = $this->UserModuleAccessmgt->userModuleAccessChecked($userRole);
		echo $res;
	}
	
}
?>