<?php
class User extends CI_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('Usermgt');
	}
	
	
	
	function index(){
		$this->load->view("user");
	}

	
	function userList(){
		//$data['universityList'] = $this->Usermgt->universitylist();
		$data['userlist'] = $this->Usermgt->userlist();
		$data['getCountries'] = $this->Usermgt->getCountries();
		$data['getStates'] = $this->Usermgt->getStates();
		$data['getCities'] = $this->Usermgt->getCities();
		$this->load->view("userListIndex.php",$data);
	}

	function roleList(){
		$data['roleList'] = $this->Usermgt->getRoles();
		$this->load->view("roleListIndex.php",$data);
	}


	function updateRoleForm(){
		$userId = $this->uri->segment(3);
		$data['roleList'] = $this->Usermgt->getRoles($userId);
		$this->load->view("updateRoleFormIndex",$data);
	}

	

	function userform(){
		$data['getCountries'] = $this->Usermgt->getCountries();
		$data['getStates'] = $this->Usermgt->getStates();
		$data['getCities'] = $this->Usermgt->getCities();
		$data['universityList'] = $this->Usermgt->universitylist();
		$data['userlist'] = $this->Usermgt->userlist();
		$data['getRoles']  = $this->Usermgt->getRoles();
		$this->load->view("userIndex",$data);
	}

	function updateUserForm(){
		$userId = $this->uri->segment(3);
		$data['getCountries'] = $this->Usermgt->getCountries();
		$data['getStates'] = $this->Usermgt->getStates();
		$data['getCities'] = $this->Usermgt->getCities();
		$data['universityList'] = $this->Usermgt->universitylist();
		$data['userlist'] = $this->Usermgt->userlist();
		$data['getUserData']  = $this->Usermgt->getUserData($userId);
		$data['getUserUniversity']  = $this->Usermgt->getUserUniversity($userId);
		$data['getRoles']  = $this->Usermgt->getRoles();
		$data['getRolesUser']  = $this->Usermgt->getRolesUsers($userId);
		//echo "<pre>";print_r($data); die("Okkkk");
		$this->load->view("updateUserFormIndex",$data);
	}

	function roleForm(){
		$this->load->view("roleIndex");
	}
	
	function createuser(){
		//echo "<pre>";print_r($this->input->post());die("Okk");
		 $data = $this->input->post();
		$res = $this->Usermgt->createuser($data);
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

	function updateuser(){
		//echo "<pre>";print_r($this->input->post());die("Okk");
		 $data = $this->input->post();
		$res = $this->Usermgt->updateuser($data);
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


	function updateRole(){
		//echo "<pre>";print_r($this->input->post());die("Okk");
		 $data = $this->input->post();
		$res = $this->Usermgt->updateRole($data);
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


	

	function createRole(){
		$data = $this->input->post();
		$res = $this->Usermgt->createRole($data);
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
}
?>