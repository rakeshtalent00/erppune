<?php
class Login extends MY_Controller{
	function __construct()
	{
	 	parent::__construct();
		$this->load->model('Login_Modal');

		if($this->session->userdata('authenticated'))
		{
			redirect('userform');
		}
		
	}
	
	function index(){
		// $this->page = "login/login";
		// $this->title = "Login";
		// $this->layout();
		
		redirect('user/secure_login');
		//$this->load->view("login/login");
	}

	
	

	function loginCheck(){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$res=$this->Login_Modal->login($username,$password);
		echo $res;
	}
	
	function logout()
	{
		# code...
		if($this->input->method() == 'post')
		{
			$this->session->sess_destroy();
			redirect('user/secure_login');
		}
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