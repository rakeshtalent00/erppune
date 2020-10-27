<style>
    /*
** Styles For Add User Page
*/

#userPhoto{
	width: 180px;
	height: 150px;
}
h2{
	font-size: 18px;
	color: #244895;
}
label{
    font-weight: normal !important;
}
label.floating-label{
    position: absolute;
	top: 5px;
    left: 7px;
    background: #fff;
    padding: 0 5px;
    transition: 0.2s linear;
    pointer-events: none;
}
input:focus ~ label,
.shifted ~ label{
    top: -10px;
    transition: 0.2s linear;
    font-weight: bold !important;
	color: #244895;
}
input[type='file']{
    cursor: pointer;
}	
.upload-user-bg {
    margin: 0;
    width: 180px;
    height: 150px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 8;
    pointer-events: none;
    background: #efece8;
}
.upload-user-bg span {
    position: absolute;
    bottom: 30px;
    left: 38px;
    color: #efece8;
    z-index: 9;
    font-size: 16px;
    pointer-events: none;
}
.upload-user-bg img{
	width: 100%;
}
select{
	width: 100%;
}
@media screen and (max-width: 768px){
	article.form-style-1 {
	    margin: 0 auto;
	    max-width: 100%;
	    padding: 20px;
	    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}

}
@media screen and (max-width: 767px){
	.d-flex .form-group {
	    width: 100%;
	}
}
    .form-style-1 {
        position: relative;
        padding: 0 20px;
        font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }

    .form-style-1 li {
        padding: 0;
        display: block;
        list-style: none;
        margin: 10px 0 0 0;
    }
    .form-style-1 label{
        margin:0 0 3px 0;
        padding:0px;
        display:block;
        font-weight: bold;
    }
    .form-style-1 input[type=text], 
    .form-style-1 input[type=date],
    .form-style-1 input[type=datetime],
    .form-style-1 input[type=number],
    .form-style-1 input[type=search],
    .form-style-1 input[type=time],
    .form-style-1 input[type=url],
    .form-style-1 input[type=email],
    textarea, 
    select{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border:none;
        border-bottom:1px solid #BEBEBE;
        padding: 7px;
        margin:0px;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;	
    }
    .form-style-1 input[type=text]:focus, 
    .form-style-1 input[type=date]:focus,
    .form-style-1 input[type=datetime]:focus,
    .form-style-1 input[type=number]:focus,
    .form-style-1 input[type=search]:focus,
    .form-style-1 input[type=time]:focus,
    .form-style-1 input[type=url]:focus,
    .form-style-1 input[type=email]:focus,
    .form-style-1 textarea:focus, 
    .form-style-1 select:focus{
        
        border-color: #88D5E9;
    }
    .form-style-1 input[type=submit], .form-style-1 input[type=button]{
        background: #4B99AD;
        border: none;
        color: #fff;
    }
    .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
        background: #4691A4;
        box-shadow:none;
        -moz-box-shadow:none;
        -webkit-box-shadow:none;
    }
    .form-style-1 .required{
        color:red;
    }
</style>
<div class="te-container">
<article class="form-style-1">
	<form name="createuserform" method="" enctype="multipart/form-data">
		<h2>User Information</h2>
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
                <!-- <select id="city" name="city" class="field-divided">
                <option value="">Select City</option>
                <option value="Agra">Agra</option>
                <option value="Pakistan">Pakistan</option> -->
                <!-- </select>  -->
                <input type="text" id = "city" name="city" />
                <label class="floating-label">City</label>
            </div>
            <div class="form-group">
                <!-- <select id="state" name="state" class="field-divided">
                    <option value="">Select State</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    </select>  -->
                    <input type="text" id = "state" name="state" />
                <label class="floating-label">State</label>
            </div>
        </div>
        <div class="form-group">
        	<label>Country</label>
            <select id="country" name="country" class="field-divided">
                <option value="">Select Country</option>
                <option value="Partnership">India</option>
                <option value="General Question">Pakistan</option>
            </select> 
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
	                <option value="">Select Status</option>
	                <option value="Partnership">Active</option>
	                <option value="General Question">Inactive</option>
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
                <select id="universityId" name="universityId" class="field-divided">
                	<option value="">Select Universityoooooo</option>
					<?php
					//echo "<pre>";print_r($data);die("okkk");
					foreach($data  as $row)
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