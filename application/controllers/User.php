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

	function userform(){
		$data['universityList'] = $this->Usermgt->universitylist();
		$data['userlist'] = $this->Usermgt->userlist();
		$this->load->view("userIndex",$data);
	}

	function roleForm(){
		$data['universityList'] = $this->Usermgt->universitylist();
		$data['userlist'] = $this->Usermgt->userlist();
		$this->load->view("roleIndex",$data);
	}
	
	function createuser(){
		//echo "<pre>";print_r($_REQUEST);die("Okk");
		 $data = $_POST;
		// $data['first_name']= $data['firstName'];
		// $data['last_name']= $data['lastName'];
		// $data['user_email']= $data['user_email'];
		// $data['user_name']= $data['userName'];
		// $data['password']= $data['password'];

		// $data['gender']= $data['gender'];
		// $data['regDate']= $data['dateOfBirth'];
		// $data['phone_mobile']= $data['mobile'];
		// $data['phone_work']= $data['mobileWork'];


		// $data['regDate']= $data['street'];
		// $data['regDate']= $data['address'];
		// $data['regDate']= $data['pincode'];
		// $data['address_country']= $data['country'];
		// $data['address_state']= $data['state'];



		//$data['dateEntered']= date("Y-m-d h:i:s";
		




		//echo "<pre>";print_r($data);die("Okk");
		$res = $this->Usermgt->createuser($data);
		$operation='';
		if($res==true)
		{
			//$alldata=$this->echouserData("");
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