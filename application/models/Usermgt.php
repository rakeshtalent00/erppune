<?php
class Usermgt  extends CI_Model{
			
		private $conn='';
		 
		function __construct(){
			$this->load->database();
		} 
		
		function __destruct() 
		{        
		}  

		
	public function createuser($data){
		//die("okkk");
		// $data['createdBy'] = "123"
		// $data['createdOn'] = date("Y/m/d");
		// $data['userType'] = "user";
		//echo "<pre>";print_r($data);die("Okk");
		if(!$this->db->insert('users', $data))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
        
	public function updateuser($userid,$data){
		$this->db->where('userId',$userid);  
		if(!$this->db->update('users', $data)){
			return false;
		}else{
			return true;
		}
	}

	public function universitylist(){
		$res = $this->db->query("SELECT * FROM `university` where status = 0 and deleated = 0");
		return $res;
	}

	public function userlist(){
		$res = $this->db->query("SELECT id,userName FROM `users` where status = 0");
		return $res;
	}

}
?>                                                                                                                                              