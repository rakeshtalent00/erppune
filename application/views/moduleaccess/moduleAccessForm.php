<div class="te-container">
<form name="moduleaccessform" method="" enctype="multipart/form-data">
				<div class="access-control">
					<div class="user-role form-group">
						<label>Select User Role</label>
						<select id="userRole" name="userRole">
							<option value="">Select</option>
                            <?php
                            if(!empty($roleList)){
                            foreach($roleList as $roleListData) { ?>
                            <option value="<?php echo $roleListData->id?>"><?php echo $roleListData->name?></option>
                            <?php  }} ?>
                            
						</select>
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
				                        <input name = "<?php echo $moduleListData->id; ?>_1" id ="<?php echo $moduleListData->id; ?>_1" type="checkbox">
				                        <span class="slider round shifted ver-changed"></span>
				                    </label>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "<?php echo $moduleListData->id; ?>_2" id ="<?php echo $moduleListData->id; ?>_2" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "<?php echo $moduleListData->id; ?>_3" id ="<?php echo $moduleListData->id; ?>_3" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "<?php echo $moduleListData->id; ?>_4" id ="<?php echo $moduleListData->id; ?>_4" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
                                <td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "<?php echo $moduleListData->id; ?>_5" id ="<?php echo $moduleListData->id; ?>_5" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
                            </tr>

                            <?php  }} ?>

                            <tr class="sub-access">
								<td colspan='6'>
									<table>
										<tr>
											<td>XYZ</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input name = "access" id ="access" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input name = "access" id ="access" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input name = "access" id ="access" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td></td>
											<td></td>
										</tr>

                             </tbody>
                            
                            <tbody id = "dynamicLoad">
                            </tbody>

                           
							<!-- <tr>
								<td><?php echo $moduleListData->name ?></td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "access" id ="access" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "access" id ="access" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input name = "access" id ="access" type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
								<td></td>
								<td></td>
							</tr> -->
							<!-- <tr class="sub-access">
								<td colspan='6'>
									<table>
										<tr>
											<td>XYZ</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input name = "access" id ="access" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input name = "access" id ="access" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input name = "access" id ="access" type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>XYZ</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td></td>
											<td></td>
										</tr> -->
                                       
										<!-- <tr>
                                        
											<td>XYZ</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td>
												<div class="perm-switch">
							                    <label class="switch">
							                        <input type="checkbox">
							                        <span class="slider round"></span>
							                    </label>
											</td>
											<td></td>
											<td></td>
										</tr>
									</table>
								</td>
							</tr> -->
							<!-- <tr>
								<td>LMNO</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
				                </div>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
				                </div>
								</td>
								<td>
									<div class="perm-switch">
				                    <label class="switch">
				                        <input type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
								</td>
								<td></td>
								<td></td>
							</tr> -->
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
	}
    var formdata = new FormData(moduleaccessform);
	var url= "<?php echo _ROOT; ?>createModuleAccess";
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
    //alert(userRole);
	var url= "<?php echo _ROOT; ?>moduleAccessChecked";
    $.post(url ,{userRole : userRole},function(data){
        $("#defaultLoad").hide();
       $("#dynamicLoad").html(data);
    });
});
</script>