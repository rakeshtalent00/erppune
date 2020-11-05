<?php
class Login extends MY_Controller{
	function __construct()
	{
	 parent::__construct();
	$this->load->model('Login_Modal');
	}
	
	function index(){
		$this->page = "login/login";
		$this->title = "Login";
		$this->layout();
	}
	

	function login(){
		$data = $this->input->post();
		$res=$this->Usermgt->login($data);
		echo $res;
	}
	
	
	// function logout(){
	// 	$userid = $this->session->userdata("userid");
	// 	session_destroy();
	// 	session_unset();
	// 	session_regenerate_id(true);
	// 	$this->Usermgt->logout($userid);
	// 	$this->load->view("login");
	// }
    
}
?>