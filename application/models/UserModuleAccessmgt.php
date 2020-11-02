<?php
class UserModuleAccessmgt  extends CI_Model{
		private $conn='';
		function __construct(){
			$this->load->database();
		} 
		function __destruct() 
		{        
		}  


		public function createUserModuleAccess($data){
			$roleId = $data['userRole'];
			$unsetData = $data;
			unset($unsetData['userRole']); 
			$insertUser = array_filter($unsetData);
			//echo "<pre>";print_r($kamal);die("Okkk");
			$insertArray = array();
			$query = $this->db->query("select * from role_access where role_id = '$roleId' and deleted='0'");
			$num_rows=$query->num_rows();
			$result=$query->result();
			$dataArray = array();
			$dataArraySubmit = array();
			if($num_rows > 0){
				foreach($result as $value){
					$dataArray[$value->role_id."_".$value->module_id."_".$value->sub_module_id."_".$value->access_id] = 0;
				}
			}
			
			$arrayDataSave = array();
			foreach ($insertUser as $key=> $value){
				$keyData = explode("_",$key);
				$moduleId = $keyData[0];
				$subModuleId = $keyData[1];
				$accessId = $keyData[2];
				$submitDataKey = $roleId."_".$moduleId."_".$subModuleId."_".$accessId;
				$arrayDataSave[$submitDataKey] = 0;
				if(!array_key_exists($submitDataKey,$dataArray)){
					$insertArray = array("role_id" => $roleId,"module_id" => $moduleId,"sub_module_id"=>$subModuleId , "access_id" => $accessId);
					$this->db->insert('role_access', $insertArray);
				}
			 }
			foreach($result as $value){
				$resultSave = $value->role_id."_".$value->module_id."_".$value->sub_module_id."_".$value->access_id;
				if(!array_key_exists($resultSave,$arrayDataSave)){
					$query = $this->db->query("update role_access set deleted = '1' where role_id = $value->role_id and module_id = $value->module_id and sub_module_id = $value->sub_module_id and access_id = $value->access_id ");
				}
			}
			return true;
		}


		public function accessList(){
			$this->db->where('deleted',0);
			$query=$this->db->get('role_access');
			return $query->result();
		}


		public function userModuleAccessChecked($userRole){
		$this->db->where('deleted',0);
		$query=$this->db->get('module');
		$moduleList = $query->result();

		$this->db->where('deleted',0);
		$query1=$this->db->get('submodule');
		$subModuleList = $query1->result();



		$this->db->where('deleted',0);
		$this->db->where('role_id',$userRole);
		$query2=$this->db->get('role_access');
		$roleAccess = $query2->result();

		$roleValData = array();
		foreach($roleAccess as $roleVal){
			$roleValData[$roleVal->module_id."_".$roleVal->sub_module_id."_".$roleVal->access_id] = 0;
		}
		//echo "<pre>";print_r($roleValData);die("Okkk");

		$data="";
		foreach($moduleList as $moduleListData) {
			
		$data .= "<tr>
		<td>$moduleListData->name</td>
		<td>
			<div class='perm-switch'>
			<label class='switch'>";
			if(array_key_exists($moduleListData->id.@_0_1, $roleValData)){
			$data .= "<input name = '$moduleListData->id"."_0_1' id ='$moduleListData->id"."_0_1' type='checkbox' checked>";
			}else{
				$data .= "<input name = '$moduleListData->id"."_0_1' id ='$moduleListData->id"."_0_1' type='checkbox'>";	
			}
			$data .= "<span class='slider round shifted ver-changed'></span>
			</label>
		</td>
		<td>
			<div class='perm-switch'>
			<label class='switch'>";
			if(array_key_exists($moduleListData->id.@_0_2, $roleValData)){
				$data .= "<input name = '$moduleListData->id"."_0_2' id ='$moduleListData->id"."_0_2' type='checkbox' checked>";
				}else{
					$data .= "<input name = '$moduleListData->id"."_0_2' id ='$moduleListData->id"."_0_2' type='checkbox'>";	
				}
			$data .= "<span class='slider round'></span>
			</label>
		</td>
		<td>
			<div class='perm-switch'>
			<label class='switch'>";
			if(array_key_exists($moduleListData->id.@_0_3, $roleValData)){
				$data .= "<input name = '$moduleListData->id"."_0_3' id ='$moduleListData->id"."_0_3' type='checkbox' checked>";
				}else{
					$data .= "<input name = '$moduleListData->id"."_0_3' id ='$moduleListData->id"."_0_3' type='checkbox'>";	
				}
				$data .= "<span class='slider round'></span>
			</label>
		</td>
		<td>
			<div class='perm-switch'>
			<label class='switch'>";
			if(array_key_exists($moduleListData->id.@_0_4, $roleValData)){
				$data .= "<input name = '$moduleListData->id"."_0_4' id ='$moduleListData->id"."_0_4' type='checkbox' checked>";
				}else{
					$data .= "<input name = '$moduleListData->id"."_0_4' id ='$moduleListData->id"."_0_4' type='checkbox'>";	
				}
				$data .= "<span class='slider round'></span>
			</label>
		</td>
		<td>
			<div class='perm-switch'>
			<label class='switch'>";
			if(array_key_exists($moduleListData->id.@_0_5, $roleValData)){
				$data .= "<input name = '$moduleListData->id"."_0_5' id ='$moduleListData->id"."_0_5' type='checkbox' checked>";
				}else{
					$data .= "<input name = '$moduleListData->id"."_0_5' id ='$moduleListData->id"."_0_5' type='checkbox'>";	
				}
			$data .= "<span class='slider round'></span>
			</label>
		</td>
	</tr>";

	  if(!empty($subModuleList)){
		foreach($subModuleList as $subModuleListData) { 
		if($moduleListData->id == $subModuleListData->moduleId){ 

	$data .= "<tr class='sub-access'>
	<td colspan='6'>
		<table>
			<tr>
				<td>$subModuleListData->subModule</td>
				<td>
					<div class='perm-switch'>
					<label class='switch'>";
					if(array_key_exists($moduleListData->id."_".$subModuleListData->id."_1", $roleValData)){
						$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_1' id ='$moduleListData->id"."_"."$subModuleListData->id"."_1' type='checkbox' checked>";
						}else{
							$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_1' id ='$moduleListData->id"."_"."$subModuleListData->id"."_1' type='checkbox'>";
						}
				$data .= "<span class='slider round'></span>
					</label>
				</td>
				<td>
					<div class='perm-switch'>
					<label class='switch'>";
					if(array_key_exists($moduleListData->id."_".$subModuleListData->id."_2", $roleValData)){
						$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_2' id ='$moduleListData->id"."_"."$subModuleListData->id"."_2' type='checkbox' checked>";
						}else{
							$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_2' id ='$moduleListData->id"."_"."$subModuleListData->id"."_2' type='checkbox'>";
						}
					$data .="<span class='slider round'></span>
					</label>
				</td>
				<td>
					<div class='perm-switch'>
					<label class='switch'>";
					if(array_key_exists($moduleListData->id."_".$subModuleListData->id."_3", $roleValData)){
						$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_3' id ='$moduleListData->id"."_"."$subModuleListData->id"."_3' type='checkbox' checked>";
						}else{
							$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_3' id ='$moduleListData->id"."_"."$subModuleListData->id"."_3' type='checkbox'>";
						}
					$data .= "<span class='slider round'></span>
					</label>
				</td>
				<td>
					<div class='perm-switch'>
					<label class='switch'>";
					if(array_key_exists($moduleListData->id."_".$subModuleListData->id."_4", $roleValData)){
						$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_4' id ='$moduleListData->id"."_"."$subModuleListData->id"."_4' type='checkbox' checked>";
						}else{
							$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_4' id ='$moduleListData->id"."_"."$subModuleListData->id"."_4' type='checkbox'>";
						}
					$data .= "<span class='slider round'></span>
					</label>
				</td>
				<td>
					<div class='perm-switch'>
					<label class='switch'>";
					if(array_key_exists($moduleListData->id."_".$subModuleListData->id."_5", $roleValData)){
						$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_5' id ='$moduleListData->id"."_"."$subModuleListData->id"."_5' type='checkbox' checked>";
						}else{
							$data .= "<input name = '$moduleListData->id"."_"."$subModuleListData->id"."_5' id ='$moduleListData->id"."_"."$subModuleListData->id"."_5' type='checkbox'>";
						}
					$data .= "<span class='slider round'></span>
					</label>
				</td>
			</tr>
			
		</table>
	</td>
	</tr>";

		}}}
	}
		return $data;
	}


	public function subModuleList(){
		$this->db->where('deleted',0);
		$query=$this->db->get('submodule');
		return $query->result();
	}
	

}
?>                                                                                                                                              