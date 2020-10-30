<?php
class SubModulemgt  extends CI_Model{
		private $conn='';
		function __construct(){
			$this->load->database();
		} 
		function __destruct() 
		{        
		}  

		public function createsubModule($data){
			if(!$this->db->insert('submodule', $data))
			{
				return false;
			}
			else
			{
				return true;
			}
		}

		
		public function getsubModules(){
			$this->db->where('deleted',0);
			$query=$this->db->get('submodule');
			return $query->result();
		}

		public function getsubModuleData($userId){
			$this->db->where('deleted',0);
			$this->db->where('id',$userId);
			$query=$this->db->get('submodule');
			return $query->result();
		}


		public function updatesubModule($data){
			$insertsubmodule = array();
			$submoduleId = $data['submoduleId'];
			$insertsubmodule = $data;
			unset($insertsubmodule['moduleId']);
			$this->db->where('id',$submoduleId);  
			$this->db->update('submodule', $insertsubmodule);
			if(($this->db->insert_id())){
				return false;
			}else{
				
				return true;
			}
		}

		
}
?>                                                                                                                                              