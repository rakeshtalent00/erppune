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
		$userId = $this->session->userdata('userId');
		$insertUser = $data;
		$insertUser['created_by']  = $userId;
		unset($insertUser['universityId']); 
		unset($insertUser['roleId']);
		if(!$this->db->insert('users', $insertUser))
		{
			return false;
		}
		else
		{
			$universityId = $data['universityId'];
			$universityData = array();
			$lastInsertedId = $this->db->insert_id();
			foreach ($universityId as $valueUniversity){
				$universityData = array('universityId' => $valueUniversity,'userId' => $lastInsertedId);
				$this->db->insert('user_university', $universityData);
			}
		
			$roleData = array();
			$roleData = array('userId' => $lastInsertedId,'roleId' => $data['roleId']);
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

	public function updateRole($data){
		$insertUser = array();
		$roleId = $data['roleId'];
		$insertRole = $data;
		unset($insertRole['roleId']);
		$this->db->where('id',$roleId);  
		$this->db->update('acl_roles', $insertRole);
		if(($this->db->insert_id())){
			return false;
		}else{
			
			return true;
		}
	}

	public function updateuser($data){
		$userId = $data['userId'];
		$insertUser = $data;
		unset($insertUser['universityId']); 
		unset($insertUser['roleId']);
		unset($insertUser['userId']);
		$this->db->where('id',$userId);  
		if(!$this->db->update('users', $insertUser))
		{
			return false;
		}
		else
		{
			$universityId = $data['universityId'];
			$query = $this->db->query("select * from user_university where userId = '$userId' and deleted='0'");
			$num_rows=$query->num_rows();
			$result=$query->result();
			$dataArray = array();
			if($num_rows > 0){
				foreach($result as $value){
					$dataArray[$value->universityId."_".$value->userId] = 0;
				}
			}else{
				foreach ($universityId as $valueUniversity){
					$universityData = array('universityId' => $valueUniversity,'userId' => $lastInsertedId);
					$this->db->insert('user_university', $universityData);
				}
			}


			
			



			


			$arrayDataSave = array();
			foreach ($insertUser as $key=> $value){
				
				$submitDataKey = $roleId."_".$moduleId."_".$subModuleId."_".$accessId;
				$arrayDataSave[$submitDataKey] = 0;
				if(!array_key_exists($submitDataKey,$dataArray)){
					$insertArray = array("role_id" => $roleId,"module_id" => $moduleId,"sub_module_id"=>$subModuleId , "access_id" => $accessId);
					$this->db->insert('role_access', $insertArray);
				}
			 }


			//  $universityData = array();
			//  foreach ($universityId as $valueUniversity){				
			// 	$universityData = array('universityId' => $valueUniversity,'userId' => $userId,"deleted" => 1);
			// 	$this->db->where('userId',$userId);
			// 	$this->db->update('user_university', $universityData);
			//  }

			//  $universityId = $data['universityId'];
			//  $oldUnversityData =  self :: getUserUniversity($userId);
			//  foreach ($oldUnversityData as $oldUnversityval){
			// 	$oldUnversityvalArray[$oldUnversityval->]
			//  }
			//  echo "<pre>";print_r($oldUnversityData);die("Okkk");



			//  $universityData = array();
			//  foreach ($universityId as $valueUniversity){				
			// 	$universityData = array('universityId' => $valueUniversity,'userId' => $userId,"deleted" => 1);
			// 	$this->db->where('userId',$userId);
			// 	$this->db->update('user_university', $universityData);
			//  }
			


			 foreach ($universityId as $valueUniversity){
				$universityData = array('universityId' => $valueUniversity,'userId' => $userId,"deleted" => 0);
				$this->db->where('id',$valueUniversity);
			 	$this->db->update('user_university', $universityData);
			 }
		
			$roleData = array();
			$roleData = array('userId' => $userId,'roleId' => $data['roleId']);
			$this->db->where('id',$data['roleId']);
			if(!$this->db->update('acl_roles_users', $roleData))
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
		$this->db->where('deleted',0);
        $query=$this->db->get('users');
        return $query->result();
	}

	public function getUserUniversity($userId){
		$this->db->where('userId',$userId);
		$this->db->where('deleted',0);
        $query=$this->db->get('user_university');
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
	public function getRoles(){
		$this->db->where('deleted',0);
        $query=$this->db->get('acl_roles');
        return $query->result();
	}

	public function getRolesUsers($userId = ''){
		$this->db->where('userId',$userId);
		$this->db->where('deleted',0);
        $query=$this->db->get('acl_roles_users');
        return $query->result();
	}

	// public function roleList($userId = ''){
	// 	$this->db->where('userId',$userId);
    //     $query=$this->db->get('acl_roles_users');
    //     return $query->result();
	// }

	
}
?>                                                                                                                                              