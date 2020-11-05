<?php
class User extends MY_Controller{
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
		$this->data = $data;
		$this->page = "user/listUser";
		$this->title = "Users List";
		$this->layout();
	}

	function roleList(){
		$data['roleList'] = $this->Usermgt->getRoles();
		$this->data = $data;
		$this->page = "user/listRoles";
		$this->title = "Roles List";
		$this->layout();
	}


	function updateRoleForm(){
		$userId = $this->uri->segment(3);
		$data['roleList'] = $this->Usermgt->getRoles($userId);
		$this->data = $data;
		$this->page = "user/updateRoleForm";
		$this->title = "Role Update";
		$this->layout();
	}

	

	function userform(){
		$data['getCountries'] = $this->Usermgt->getCountries();
		$data['getStates'] = $this->Usermgt->getStates();
		$data['getCities'] = $this->Usermgt->getCities();
		$data['universityList'] = $this->Usermgt->universitylist();
		$data['userlist'] = $this->Usermgt->userlist();
		$data['getRoles']  = $this->Usermgt->getRoles();
		$this->data = $data;
		$this->page = "user/createUserForm";
		$this->title = "Users Form";
		$this->layout();
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
		$this->data = $data;
		$this->page = "user/updateUserForm";
		$this->title = "Update Form";
		$this->layout();
		//echo "<pre>";print_r($data); die("Okkkk");
		//$this->load->view("updateUserFormIndex",$data);
	}

	function roleForm(){
		$data = "";
		$this->data = $data;
		$this->page = "user/createRoleForm";
		$this->title = "Role Form";
		$this->layout();
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