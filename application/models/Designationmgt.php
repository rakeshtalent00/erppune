<?php
class Designationmgt  extends CI_Model{
		private $conn='';
		function __construct(){
			$this->load->database();
		} 
		function __destruct() 
		{        
		}  

		public function createDesignation($data){
			if(!$this->db->insert('department', $data))
			{
				return false;
			}
			else
			{
				return true;
			}
		}

		
		public function getDesignation(){
			$this->db->where('deleted',0);
			$query=$this->db->get('designation');
			return $query->result();
		}

		public function getDesignationData($userId){
			$this->db->where('deleted',0);
			$this->db->where('id',$userId);
			$query=$this->db->get('designation');
			return $query->result();
		}


		public function updateDesignation($data){
			$insertDesignation = array();
			$designationId = $data['designationId'];
			$insertDesignation = $data;
			unset($insertDesignation['designationId']);
			$this->db->where('id',$departmentId);  
			$this->db->update('designation', $insertDesignation);
			if(($this->db->insert_id())){
				return false;
			}else{
				
				return true;
			}
		}

		
}
?>                                                                                                                                              