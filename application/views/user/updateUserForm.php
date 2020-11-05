<div class="te-container">
	<article class="form-style-1">
    	<form name="updateuserform" method="" enctype="multipart/form-data">
    		<h2>User Management</h2>
    		<!-- <div class="form-group">
	            	<label style="display: none;">User Photo <span class="required">*</span></label>
            		<input type="file" id = "userPhoto" name="userPhoto" placeholder="description" />
            		<figure class="upload-user-bg">
            			<img src="assets/images/upload-user.png">
            			<span>Upload Photo</span>
            		</figure>
            </div> -->
            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "firstName" name="firstName" value= "<?php echo $getUserData[0]->firstName ?>"/>
	            	<label class="floating-label">First Name<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "lastName" name="lastName" value= "<?php echo $getUserData[0]->lastName ?>"/>
	            	<label class="floating-label">Last Name<span class="required">*</span></label>
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "userEmail" name="userEmail" value= "<?php echo $getUserData[0]->userEmail ?>"/>
	            	<label class="floating-label">Email<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "employeeCode" name="employeeCode" value= "<?php echo $getUserData[0]->employeeCode ?>"/>
	            	<label class="floating-label">Employee Code<span class="required">*</span></label>
	            </div>
            </div>

            <div class="d-flex">
            	<div class="form-group">
	            	<input type="text" id = "userName" name="userName" value= "<?php echo $getUserData[0]->userName ?>"/>
	            	<label class="floating-label">User Name <span class="required">*</span></label>
	            </div>
	        </div>
	            

            <div class="d-flex">
	            <div class="form-group">    
	            	<label>Gender <span class="required">*</span></label>
	                <select id = "gender" name="gender" class="field-divided">
	                <option value="">Select Gender</option>
	                <option value="Male" <?php if($getUserData[0]->gender == "Male"){?> selected="selected" <?php }?>>Male</option>
	                <option value="Female" <?php if($getUserData[0]->gender == "Female"){?> selected="selected" <?php }?>>Female</option>
	              </select>
	            </div>
	            <div class="form-group">    
	            	<label>Date Of Birth <span class="required">*</span></label>
	                <input type="date" id = "dateOfBirth" name="dateOfBirth" placeholder="Date Of Joining" value= "<?php echo $getUserData[0]->dateOfBirth ?>"/>
	            </div>
	        </div>

    		<h2>Contact Information</h2>

            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "mobile" name="mobile" value= "<?php echo $getUserData[0]->mobile ?>"/>
	            	<label class="floating-label">Mobile<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "mobileWork" name="mobileWork" value= "<?php echo $getUserData[0]->mobileWork ?>" />
	            	<label class="floating-label">Mobile Work<span class="required">*</span></label>
	            </div>
            </div>
		<!-- <div class="form-group">
	                <label>Address<span class="required">*</span></label>
	                <textarea  id = "address" name="address" class="field-divided"></textarea>
	            </div> -->
	            
            <div class="d-flex">
            	<div class="form-group">
	            	<input type="text" id = "addressStreet" name="addressStreet" value= "<?php echo $getUserData[0]->addressStreet ?>"/>
	            	<label class="floating-label">Street</label>
	            </div>
	            <div class="form-group">
	                <input type="text" id="postalCode" name="postalCode" value= "<?php echo $getUserData[0]->postalCode ?>"/>
	                <label class="floating-label">Postal Code</label>
	            </div>
	        </div>

            <div class="d-flex">
				<div class="form-group">
	            	<label>Country</label>
	                <select id="country" name="country" class="field-divided">
					<option value="">Select Country</option>
						<?php
						foreach ($getCountries as $row){
						?>
		                <option value="<?php echo $row->id ?>" <?php if($getUserData[0]->country == $row->id){?> selected="selected" <?php }?>><?php echo $row->name; ?></option>
		                <?php } ?>
	                </select> 
	            </div>
	            <div class="form-group">
	                <select id="state" name="state" class="field-divided">
	                    <option value="">Select State</option>
						<?php
						foreach ($getStates as $row){
						?>	
	                    <option value="<?php echo $row->id ?>" <?php if($getUserData[0]->state == $row->id){?> selected="selected" <?php }?>><?php echo $row->name; ?></option>
						<?php } ?>
	                    </select> 
	                    <!-- <input type="text" id = "state" name="state" /> -->
	                <label class="floating-label">State</label>
	            </div>
	        </div>
	        <div class="form-group">
                <select id="city" name="city" class="field-divided">
                <option value="">Select City</option>
				<?php
				foreach ($getCities as $row){
				?>	
                <option value="<?php echo $row->id ?>" <?php if($getUserData[0]->city == $row->id){?> selected="selected" <?php }?>><?php echo $row->name; ?></option>
				<?php } ?>
                </select> 
                <label class="floating-label">City</label> 
            </div>

    		<h2>Other Information</h2>

            <div class="d-flex">
	            <div class="form-group">
	                <input id="education" type="text" name="education" value= "<?php echo $getUserData[0]->education ?>"/>
	                <label class="floating-label">Education</label>
	            </div>
	            <div class="form-group">
	                <label>Status<span class="required">*</span></label>
	                <select id="status" name="status" class="field-divided">
		                <option value="">Select Status</option>
		                <option value="1" <?php if($getUserData[0]->status == 1){?> selected="selected" <?php }?>>Active</option>
		                <option value="0" <?php if($getUserData[0]->status == 0){?> selected="selected" <?php }?>>Inactive</option>
	                </select> 
	            </div>
            </div>

            <div class="d-flex">
	            <div class="form-group">
	                <label>Reports To</label>
	                <select id="reportsTo" name="reportsTo" class="field-divided">
	                    <option value="">Select Reporting Manager</option>
	                   <?php
						foreach($data=$userlist->result_array() as $row)
						{ ?>
						 <option value="<?php echo $row['id'];?>" <?php echo ($row['id'] ==  $getUserData[0]->reportsTo) ? ' selected="selected"' : '';?>><?php echo $row['userName']; ?></option>
						<?php } ?>
	                </select> 
	            </div>

		        <div class="form-group">
	                <label>Designation</label>
	                <select id="designation" name="designation" class="field-divided">
	                <option value="">Select Designation</option>
	                <option value="Manager">Manager</option>
	                <option value="TL">TL</option>
	                </select> 
	            </div>
            </div>

            <div class="d-flex">
	            <div class="form-group">
	                <label>Choose Media</label>
	                <select id="media" name="media" class="field-divided">
	                	<option value="Advertise">Select Media</option>
	                </select> 
	            </div>

	            <div class="form-group">
	                <label>Campaign</label>
	                <select id="campaign" name="campaign" class="field-divided">
	                    <option value="">Select Campaign</option>
	                    <option value="Facebook">Facebook</option>
	                    <option value="Google">Google</option>
	                </select>
	            </div>
            </div>
	    <div class="d-flex">
	            <div class="form-group">
	                <label>University</label>
	                <select id="universityId" name="universityId[]" class="field-divided" multiple>
	                	<option value="">Select University</option>
					<?php
					foreach($data=$universityList->result_array() as $row){
						$selected = "";
						foreach($getUserUniversity as $roww){
							if($row['id'] == $roww->universityId){
							$selected='selected="selected"';
							}
						}?>
					<option value="<?php echo $row['id'];?>" <?php echo $selected;?>><?php echo $row['universityName']; ?></option>
					<?php } ?>
	                </select> 
	            </div>

	            <div class="form-group">
	                <label>Department</label>
	                <select id="departmentId" name="departmentId" class="field-divided">
	                    <option value="">Select Department</option>
	                    <option value="1" <?php if($getUserData[0]->departmentId == 1){?> selected="selected" <?php }?>>IT</option>
	                    <option value="2" <?php if($getUserData[0]->departmentId == 2){?> selected="selected" <?php }?>>Salse</option>
	                </select>
                </div>
                <div class="form-group">
	                <label>External Access</label>
	                <select id="externalAccess" name="externalAccess" class="field-divided">
	                    <option value="">Select External Access</option>
	                    <option value="1" <?php if($getUserData[0]->externalAccess == 1){?> selected="selected" <?php }?>>Yes</option>
	                    <option value="0" <?php if($getUserData[0]->externalAccess == 0){?> selected="selected" <?php }?>>No</option>
	                </select>
				</div>
				<div class="form-group">
	                <label>User Role</label>
	                <select id="roleId" name="roleId" class="field-divided">
	                    <option value="">Select Role</option>
						<?php foreach ($getRoles as $row){ ?>
							<?php if(!empty($getRolesUser) ){?>
							<option value="<?php echo $row->id ?>" <?php if($getRolesUser[0]->roleId == $row->id){?> selected="selected" <?php }?>><?php echo $row->name; ?></option>
							<?php }} ?>
	                </select>
	            </div>
			</div>
			<input type="hidden" id="userId" name="userId" value="<?php echo $getUserData[0]->id ?>">
            <div class="form-group cta-submit">
                <input type="button" id ="updateuserbtn" value="Submit" />
            </div>
        </form>
    </article>
</div>
<script>
$(document).on('click','#updateuserbtn',function(e) {
	e.preventDefault()

	if(($("#firstName").val().trim().length==0))
	{
		alert("Please Insert First Name");
		exit;
	}else if(($("#lastName").val().trim().length==0))
	{
		alert("Please Insert Last Name");
		exit;
	}else if(($("#userEmail").val().trim().length==0))
	{
		alert("Please Insert Email");
		exit;
	}else if(($("#employeeCode").val().trim().length==0))
	{
		alert("Please Insert Employee Code");
		exit;
	}else if(($("#gender").val().trim().length==0))
	{
		alert("Please select gender");
		exit;
	}else if(($("#userName").val().trim().length==0))
	{
		alert("Please Insert User Name");
		exit;
	}

    var formdata = new FormData(updateuserform);
	var url= "<?php echo base_url(); ?>updateuser";
	alert(url);
    $.ajax({
		 url: url, 
		 //dataType: "text",
		 cache: false,
		 contentType: false,
		 processData: false,
		 data: formdata,                         
		 type: "POST",
		 success: function(data){
			 console.log("Okkk" + data);
			 var res=JSON.parse(data);
			 if(res.success==true){
				alert("User Updated");	
				location.reload();		
			 }	 
			 else
				 alert(res.error);
		}
     });
});

function checkPasswordMatch(){
	var password = $("#password").val();
	var confirmPassword = $("#repassword").val();
	if (password != confirmPassword)
		return false;
	else
		return true;
}
  
  $(document).ready(function() {
    $("#postalCode").keyup(function() {
        var el = $(this);
        if (el.val().length === 6) {
        	$("#city").val("");
            $("#state").val("");
			$("#country").val("");
			var pincode = el.val();
			var url =  "https://api.postalpincode.in/pincode/" + pincode ;
            $.ajax({
                url: url,
                cache: false,
                dataType: "json",
                type: "GET",
                data: "zip=" + el.val(),
                success: function(result, success) {
                	var data = JSON.stringify(result[0].PostOffice);
                	var data1 = JSON.parse(data);
                	var data2 = data1[0];
                	console.log(data2);
					// alert(data2.District);
					$('#country').val("");
					$('#state').val("");
					$('#city').val("");
                    var city = data2.District;
                    var state = data2.State;
					var country = data2.Country;
					
					$('#country').find('option').each( function() {
					var $this = $(this);
					if ($this.text().trim() == country.trim()) {
					$this.attr('selected','selected');
					return false;
					}
					});

					$('#state').find('option').each( function() {
					var $this = $(this);
					if ($this.text().trim() == state.trim()) {
					$this.attr('selected','selected');
					return false;
					}
					});

					$('#city').find('option').each( function() {
					var $this = $(this);
					if ($this.text().trim() == city.trim()) {
					$this.attr('selected','selected');
					return false;
					}
					});
					$("#country").selectmenu("refresh");
					$('#state').change();
					$('#city').change();
                }
            });
        }
    });
});
</script>