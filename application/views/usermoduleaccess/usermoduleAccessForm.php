<div class="te-container">
<form name="usermoduleaccessform" method="" enctype="multipart/form-data">
				<div class="access-control">

				<div class="d-flex">
				<div class="form-group">
				<label>Select User Role</label>
				<select id="userRole" name="userRole">
				<option value="">Select User</option>
				<?php
				if(!empty($roleList)){
				foreach($roleList as $roleListData) { ?>
				<option value="<?php echo $roleListData->id?>"><?php echo $roleListData->name?></option>
				<?php  }} ?>
				</select>
				</div>

				
				<div class="form-group">
				<label>Select User Role</label>
				<select id="userId" name="userId">
				<option value="">Select</option>
				
				</select>
				</div>
				</div>

					<section class="user-table">
						<p class="d-flex expand-ctas">
							<span class="expand-access">Expand All</span>
							<span>/</span>
							<span class="collapse-access">Collapse All</span>
						</p>
					<div class="responsive-table">
						<table class="access-table" id="access-table">
							<thead>
								<th>Module</th>
								<th>Access</th>
								<th>View</th>
								<th>Add</th>
								<th>Edit</th>
								<th>Export</th>
							</thead>
                            <tbody id = "defaultLoad">
                            <?php
                            if(!empty($moduleList)){
                            foreach($moduleList as $moduleListData) { ?>
							<tr class="">
								<td><?php echo $moduleListData->name ?></td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "<?php echo $moduleListData->id; ?>_0_1" id ="<?php echo $moduleListData->id; ?>_0_1" type="checkbox">
				                        <span class="slider round shifted ver-changed"></span>
				                    </label>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "<?php echo $moduleListData->id; ?>_0_2" id ="<?php echo $moduleListData->id; ?>_0_2" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "<?php echo $moduleListData->id; ?>_0_3" id ="<?php echo $moduleListData->id; ?>_0_3" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "<?php echo $moduleListData->id; ?>_0_4" id ="<?php echo $moduleListData->id; ?>_0_4" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
                                <td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "<?php echo $moduleListData->id; ?>_0_5" id ="<?php echo $moduleListData->id; ?>_0_5" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
                            </tr> 
                           <?php if(!empty($subModuleList)){
                            foreach($subModuleList as $subModuleListData) { 
                            if($moduleListData->id == $subModuleListData->moduleId){ ?>
                            <tr class="sub-access">
								<td colspan='6'>
									<table>
										<tr>
											<td><?php echo $subModuleListData->subModule ?></td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
                                                <input name = "<?php echo $moduleListData->id."_".$subModuleListData->id ?>_1" id ="<?php echo $moduleListData->id."_".$subModuleListData->id ?>_1" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
                                                <input name = "<?php echo $moduleListData->id."_".$subModuleListData->id ?>_2" id ="<?php echo $moduleListData->id."_".$subModuleListData->id ?>_2" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
                                                <input name = "<?php echo $moduleListData->id."_".$subModuleListData->id ?>_3" id ="<?php echo $moduleListData->id."_".$subModuleListData->id ?>_3" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
                                                <input name = "<?php echo $moduleListData->id."_".$subModuleListData->id ?>_4" id ="<?php echo $moduleListData->id."_".$subModuleListData->id ?>_4" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
                                                <input name = "<?php echo $moduleListData->id."_".$subModuleListData->id ?>_5" id ="<?php echo $moduleListData->id."_".$subModuleListData->id ?>_5" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
										</tr>
										
									</table>
								</td>
							</tr>
                           
                            <?php  }}} ?>
                            <?php  }} ?>
                        
                             </tbody>
                            
                            <tbody id = "dynamicLoad">
                                
                            </tbody>

                            

						</table>
					</div>
                    <input type="button" id ="createmoduleaccess" value="Submit" />
				</section>
				</div>
                </form>
			</div>

<script>
$(document).on('click','#createmoduleaccess',function(e) {
	e.preventDefault()
	if(($("#userRole").val().trim().length==0))
	{
		alert("Please Select User Role");
		exit;
	}else if(($("#userId").val().trim().length==0)){
		alert("Please Select User");
		exit;
	}
    var formdata = new FormData(usermoduleaccessform);
	var url= "<?php echo _ROOT; ?>createUserModuleAccess";
    $.ajax({
		 url: url, 
		 cache: false,
		 contentType: false,
		 processData: false,
		 data: formdata,                         
		 type: "POST",
		 success: function(data){
			 //console.log("Okkk" + data);
			 var res=JSON.parse(data);
			 if(res.success==true){
				alert("Access Created");	
				//location.reload();	
			 }	 
			 else
				 alert(res.error);
		}
     });
});



$(document).on('change','#userRole',function(e) {
    e.preventDefault()
    var userRole = $(this).val();
	var url= "<?php echo _ROOT; ?>userModuleAccessChecked";
    $.post(url ,{userRole : userRole},function(data){
        // $("#defaultLoad").hide();
       $("#userId").html(data);
    });
})

$(document).on('change','#userId',function(e) {
	e.preventDefault()
	var userRole = $("#userRole").val();
	var userId = $("#userId").val();
	var url= "<?php echo _ROOT; ?>userModuleAccessCheckedUser";
    $.post(url ,{userRole : userRole,userId : userId},function(data){
		console.log(data);
         $("#defaultLoad").hide();
		 $("#dynamicLoad").html(data);
    });
})
</script>