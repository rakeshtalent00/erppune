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
	                <input type="text" id = "password" name="password" />
	                <label class="floating-label">Password<span class="required">*</span></label>
	            </div>
	            <!-- <div class="form-group">
	                <label>Confirm Password<span class="required">*</span></label>
	                <input type="text" id = "confirmPassword" name="confirmPassword" placeholder="Confirm Password" />
	            </div> -->
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
	                <select id="state" name="state" class="field-divided">
	                    <option value="">Select State</option>
						<?php
						foreach ($getStates as $row){
						?>	
	                    <option value="<?php echo $row->id ?>"><?php echo $row->name; ?></option>
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
                <option value="<?php echo $row->id ?>"><?php echo $row->name; ?></option>
				<?php } ?>
                </select> 
                <!-- <input type="text" id = "city" name="city" /> -->
                <label class="floating-label">City</label> 
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
	                <select id="universityId" name="universityId" class="field-divided">
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
	                    <option value="1">Role1</option>
	                    <option value="2">Role2</option>
	                </select>
	            </div>
			</div>
            <div class="form-group cta-submit">
                <input type="button" id ="createuserbtn" value="Submit" />
            </div>
        </form>
	</article>
</div>