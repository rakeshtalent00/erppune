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
		$insertUser = $data;
		unset($insertUser['roleId']); 
		if(!$this->db->insert('users', $insertUser))
		{
			return false;
		}
		else
		{
			$roleData = array();
			$roleData = array('userId' => $this->db->insert_id(),'roleId' => $data['roleId']);
			if(!$this->db->insert('acl_roles_users', $roleData))
			{
				return false;
			}
			else
			{
				return true;
			}	
		}
	}

	public function createRole($data){
		if(!$this->db->insert('acl_roles', $data))
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
		$this->db->update('users', $data);
		if(!($this->db->insert_id())){
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
		$res = $this->db->query("SELECT * FROM `users` where status = 1 and deleted =  0");
		return $res;
	}

	public function getUserData($userId){
		$this->db->where('id',$userId);
        $query=$this->db->get('users');
        return $query->result();
	}

	public function getCountries(){
        $query=$this->db->get('countries');
        return $query->result();
	}

	public function getStates(){
        $query=$this->db->get('states');
        return $query->result();
	}

	public function getCities(){
        $query=$this->db->get('cities');
        return $query->result();
	}

}
?>                                                                                                                                              