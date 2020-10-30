<?php
class Departmentmgt  extends CI_Model{
		private $conn='';
		function __construct(){
			$this->load->database();
		} 
		function __destruct() 
		{        
		}  

		public function createDepartment($data){
			if(!$this->db->insert('department', $data))
			{
				return false;
			}
			else
			{
				return true;
			}
		}

		
		public function getDepartments(){
			$this->db->where('deleted',0);
			$query=$this->db->get('department');
			return $query->result();
		}

		public function getDepartmentsData($userId){
			$this->db->where('deleted',0);
			$this->db->where('id',$userId);
			$query=$this->db->get('department');
			return $query->result();
		}


		public function updateDepartment($data){
			$insertDepartment = array();
			$departmentId = $data['departmentId'];
			$insertDepartment = $data;
			unset($insertDepartment['departmentId']);
			$this->db->where('id',$departmentId);  
			$this->db->update('department', $insertDepartment);
			if(($this->db->insert_id())){
				return false;
			}else{
				
				return true;
			}
		}

		
}
?>                                                                                                                                              