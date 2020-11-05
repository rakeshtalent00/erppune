<div class="te-container">
	<article class="form-style-1">
    	<form name="createuserform" method="" enctype="multipart/form-data">
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
	            	<input type="text" id = "firstName" name="firstName" />
	            	<label class="floating-label">First Name<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "lastName" name="lastName" />
	            	<label class="floating-label">Last Name<span class="required">*</span></label>
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "userEmail" name="userEmail" />
	            	<label class="floating-label">Email<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "employeeCode" name="employeeCode" />
	            	<label class="floating-label">Employee Code<span class="required">*</span></label>
	            </div>
	            
            </div>

            <div class="d-flex">
            	<div class="form-group">
	            	<input type="text" id = "userName" name="userName" />
	            	<label class="floating-label">User Name <span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	                <input type="password" id = "password" name="password" />
	                <label class="floating-label">Password<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	                <input type="password" id = "repassword" name="repassword" />
	                <label class="floating-label">Confirm Password<span class="required">*</span></label>
	            </div>
	        </div>
	            

            <div class="d-flex">
	            <div class="form-group">    
	            	<label>Gender <span class="required">*</span></label>
	                <select id = "gender" name="gender" class="field-divided">
	                <option value="">Select Gender</option>
	                <option value="Male">Male</option>
	                <option value="Female">Female</option>
	              </select>
	            </div>
	            <div class="form-group">    
	            	<label>Date Of Birth <span class="required">*</span></label>
	                <input type="date" id = "dateOfBirth" name="dateOfBirth" placeholder="Date Of Joining"/>
	            </div>
	        </div>

    		<h2>Contact Information</h2>

            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "Mobile" name="Mobile" />
	            	<label class="floating-label">Mobile<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "mobileWork" name="mobileWork" />
	            	<label class="floating-label">Mobile Work<span class="required">*</span></label>
	            </div>
            </div>
			<!-- <div class="form-group">
	                <label>Address<span class="required">*</span></label>
	                <textarea  id = "address" name="address" class="field-divided"></textarea>
	            </div> -->
	            
            <div class="d-flex">
            	<div class="form-group">
	            	<input type="text" id = "addressStreet" name="addressStreet" />
	            	<label class="floating-label">Street</label>
	            </div>
	            <div class="form-group">
	                <input type="text" id="postalCode" name="postalCode" />
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
		                <option value="<?php echo $row->id ?>"><?php echo $row->name; ?></option>
		                <?php } ?>
	                </select> 
	            </div>
	            <div class="form-group">
	                <label>State</label>
	                <select id="state" name="state" class="field-divided">
	                    <option value="">Select State</option>
						<?php
						foreach ($getStates as $row){
						?>	
	                    <option value="<?php echo $row->id ?>"><?php echo $row->name; ?></option>
						<?php } ?>
	                    </select> 
	                    <!-- <input type="text" id = "state" name="state" /> -->
	            </div>
	        </div>

	        <div class="form-group">
                <label >City</label> 
                <select id="city" name="city" class="field-divided">
                <option value="">Select City</option>
				<?php
				foreach ($getCities as $row){
				?>	
                <option value="<?php echo $row->id ?>"><?php echo $row->name; ?></option>
				<?php } ?>
                </select> 
                <!-- <input type="text" id = "city" name="city" /> -->
            </div>

    		<h2>Other Information</h2>

            <div class="d-flex">
	            <div class="form-group">
	                <input id="education" type="text" name="education" />
	                <label class="floating-label">Education</label>
	            </div>
	            <div class="form-group">
	                <label>Status<span class="required">*</span></label>
	                <select id="status" name="status" class="field-divided">
		                <!-- <option value="">Select Status</option> -->
		                <option value="1">Active</option>
		                <option value="0 Question">Inactive</option>
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
						{
						echo "<option value='" .$row['id']."'>" .$row['userName']."</option>";
						}
						?>
	                </select> 
	            </div>
		        <div class="form-group">
	                <label>Designation</label>
	                <select id="designation" name="designation" class="field-divided">
	                <option value="">Select Designation</option>
	                <option value="Partnership">Manager</option>
	                <option value="General Question">TL</option>
	                </select> 
	            </div>
            </div>

            <div class="d-flex">
	            <div class="form-group">
	                <label>Choose Media</label>
	                <select id="media" name="media" class="field-divided">
	                	<option value="">Select Media</option>
						<option value="Facebook">Facebook</option>
						<option value="Google">Google</option>
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
						foreach($data=$universityList->result_array() as $row)
						{
						echo "<option value='" .$row['id']."'>" .$row['universityName']."</option>";
						}
						?>
						
	                </select> 
	            </div>

	            <div class="form-group">
	                <label>Department</label>
	                <select id="departmentId" name="departmentId" class="field-divided">
	                    <option value="">Select Department</option>
	                    <option value="1">IT</option>
	                    <option value="2">Salse</option>
	                </select>
                </div>
                <div class="form-group">
	                <label>External Access</label>
	                <select id="externalAccess" name="externalAccess" class="field-divided">
	                    <option value="">Select External Access</option>
	                    <option value="1">Yes</option>
	                    <option value="0">No</option>
	                </select>
				</div>
				<div class="form-group">
	                <label>User Role</label>
	                <select id="roleId" name="roleId" class="field-divided">
	                    <option value="">Select Role</option>
	                    <?php foreach ($getRoles as $row){ ?>	
							<option value="<?php echo $row->id ?>"><?php echo $row->name; ?></option>
							<?php } ?>
	                </select>
	            </div>
			</div>
            <div class="form-group cta-submit">
                <input type="button" id ="createuserbtn" value="Submit" />
            </div>
        </form>
	</article>
</div>
<div class="te-container">
	<article class="form-style-1">
    	<form name="createuserform" method="" enctype="multipart/form-data">
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
	            	<input type="text" id = "subjectName" name="subjectName" />
	            	<label class="floating-label">Subject Name<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "subjectCode" name="subjectCode" />
	            	<label class="floating-label">Subject Code<span class="required">*</span></label>
	            </div>
	        </div>

            <div class="d-flex">
	        	<div class="form-group">    
	                <textarea id = "subjectDesc" name="subjectDesc" style="resize:none;"></textarea> 
	            	<label class="floating-label">Subject Description <span class="required">*</span></label>
	            </div>
	             <div class="form-group">    
	            	<label>Subject Status <span class="required">*</span></label>
	                <select id = "subjectStatus" name="subjectStatus" class="field-divided">
	                <option value="">Select Status</option>
	                <option value="Active">Active</option>
	                <option value="Inactive">Inactive</option>
	              </select>
	            </div>
            </div>    

            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "passingMark" name="passingMark" />
	            	<label class="floating-label">Passing Marks<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "totalMark" name="totalMark" />
	            	<label class="floating-label">Total Marks<span class="required">*</span></label>
	            </div>
	            
            </div>

            <div class="d-flex">
            	<div class="form-group">
	            	<input type="text" id = "createdBy" name="createdBy" />
	            	<label class="floating-label">Created By<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	                <input type="text" id = "modifiedBy" name="modifiedBy" />
	                <label class="floating-label">Modified By<span class="required">*</span></label>
	            </div>
	        </div>

			<div class="d-flex">
	        	<div class="form-group">    
	            	<label>Created Date <span class="required">*</span></label>
	                <input type="date" id = "createdDate" name="createdDate"/>
	            </div>
	            <div class="form-group">    
	            	<label>Modified Date <span class="required">*</span></label>
	                <input type="date" id = "modifiedDate" name="modifiedDate"/>
	            </div>
            </div>


            <div class="form-group cta-submit">
                <input type="button" id ="createuserbtn" value="Submit" />
            </div>
        </form>
	</article>
</div>

<div class="te-container">
	<article class="form-style-1">
    	<form name="createuserform" method="" enctype="multipart/form-data">
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
	            	<input type="text" id = "batchName" name="batchName" />
	            	<label class="floating-label">Batch Name<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "batchCode" name="batchCode" />
	            	<label class="floating-label">Batch Code<span class="required">*</span></label>
	            </div>
	        </div>

            <div class="d-flex">
	        	<div class="form-group">    
	                <textarea id = "batchDesc" name="batchDesc" style="resize:none;"></textarea> 
	            	<label class="floating-label">Batch Description <span class="required">*</span></label>
	            </div>
	             <div class="form-group">    
	            	<label>Batch Status <span class="required">*</span></label>
	                <select id = "batchStatus" name="batchStatus" class="field-divided">
	                <option value="">Select Status</option>
	                <option value="Active">Active</option>
	                <option value="Inactive">Inactive</option>
	              </select>
	            </div>
            </div>    

			<div class="d-flex">
	        	<div class="form-group">    
	            	<label>Start Date <span class="required">*</span></label>
	                <input type="date" id = "batchStartDate" name="batchStartDate"/>
	            </div>
	            <div class="form-group">    
	            	<label>End Date <span class="required">*</span></label>
	                <input type="date" id = "batchEndDate" name="batchEndtDate"/>
	            </div>
            </div>

            <div class="d-flex">
            	<div class="form-group">
	            	<input type="text" id = "createdBy" name="createdBy" />
	            	<label class="floating-label">Created By<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	                <input type="text" id = "modifiedBy" name="modifiedBy" />
	                <label class="floating-label">Modified By<span class="required">*</span></label>
	            </div>
	        </div>

			<div class="d-flex">
	        	<div class="form-group">    
	            	<label>Created Date <span class="required">*</span></label>
	                <input type="date" id = "createdDate" name="createdDate"/>
	            </div>
	            <div class="form-group">    
	            	<label>Modified Date <span class="required">*</span></label>
	                <input type="date" id = "modifiedDate" name="modifiedDate"/>
	            </div>
            </div>


            <div class="form-group cta-submit">
                <input type="button" id ="createuserbtn" value="Submit" />
            </div>
        </form>
	</article>
</div>

<div class="te-container">
	<article class="form-style-1">
    	<form name="createuserform" method="" enctype="multipart/form-data">
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
	            	<input type="text" id = "programName" name="programName" />
	            	<label class="floating-label">Program Name<span class="required">*</span></label>
	            </div>
	             <div class="form-group">    
	            	<label>Program Status <span class="required">*</span></label>
	                <select id = "programStatus" name="programStatus" class="field-divided">
	                <option value="">Select Status</option>
	                <option value="Active">Active</option>
	                <option value="Inactive">Inactive</option>
	              </select>
	            </div>
            </div>    

            <div class="d-flex">
            	<div class="form-group">
	            	<input type="text" id = "createdBy" name="createdBy" />
	            	<label class="floating-label">Created By<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	                <input type="text" id = "modifiedBy" name="modifiedBy" />
	                <label class="floating-label">Modified By<span class="required">*</span></label>
	            </div>
	        </div>

			<div class="d-flex">
	        	<div class="form-group">    
	            	<label>Created Date <span class="required">*</span></label>
	                <input type="date" id = "createdDate" name="createdDate"/>
	            </div>
	            <div class="form-group">    
	            	<label>Modified Date <span class="required">*</span></label>
	                <input type="date" id = "modifiedDate" name="modifiedDate"/>
	            </div>
            </div>


            <div class="form-group cta-submit">
                <input type="button" id ="createuserbtn" value="Submit" />
            </div>
        </form>
	</article>
</div>

<div class="login-page te-container">
	<div class="bg-image">
	</div>
	<article class="form-style-1 login-form">
		<form class="form-container">
			<div class="form-group">
				<input type="text" id="uname" name="uname" />
				<label class="floating-label">User Name</label>
			</div>
			<div class="form-group">
				<input type="password" id="password" name="password" />
				<label class="floating-label">Password</label>
			</div>
			<div class="form-group custom-check">
				<input type="checkbox" name="rememberme" id="rememberme" />
				<label>Keep Me Signed In</label>
			</div>
 			<div class="form-group cta-submit">
                <input type="button" id ="loginbtn" value="Sign In" />
            </div>
 			<div class="form-group cta-submit">
                <input type="button" id ="sbtn" value="Single Sign In" />
            </div>
		</form>
	</article>
</div>

<script>
$(document).on('click','#createuserbtn',function(e) {
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
	}else if(($("#password").val().trim().length==0))
	{
		alert('Please Insert Password');
		exit;
	}else if(checkPasswordMatch()==false){
		alert('password Do Not Match');
		exit;
	}



    var formdata = new FormData(createuserform);
	var url= "<?php echo _ROOT; ?>createuser";
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
				alert("User Created");
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