<?php
class Modulemgt  extends CI_Model{
		private $conn='';
		function __construct(){
			$this->load->database();
		} 
		function __destruct() 
		{        
		}  

		public function createModule($data){
			if(!$this->db->insert('module', $data))
			{
				return false;
			}
			else
			{
				return true;
			}
		}

		
		public function getModules(){
			$this->db->where('deleted',0);
			$query=$this->db->get('module');
			return $query->result();
		}

		public function getModuleData($userId){
			$this->db->where('deleted',0);
			$this->db->where('id',$userId);
			$query=$this->db->get('module');
			return $query->result();
		}


		public function updateModule($data){
			$insertmodule = array();
			$moduleId = $data['moduleId'];
			$insertModule = $data;
			unset($insertModule['moduleId']);
			$this->db->where('id',$moduleId);  
			$this->db->update('module', $insertModule);
			if(($this->db->insert_id())){
				return false;
			}else{
				
				return true;
			}
		}

		
}
?>                                                                                                                                              