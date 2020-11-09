<div class="te-container">
	<article class="form-style-1">
    	<form name="createuserform" method="" enctype="multipart/form-data">
    		
            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "universityName" name="universityName" />
	            	<label class="floating-label">University Name<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "universityCode" name="universityCode" />
	            	<label class="floating-label">University Code<span class="required">*</span></label>
	            </div>
	        </div>
            <div class="d-flex">
	        	<div class="form-group">    
	                <textarea id = "universityDesc" name="universityDesc" style="resize:none;"></textarea> 
	            	<label class="floating-label">Description <span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	                <textarea id = "address" name="address" style="resize:none;"></textarea> 
	            	<label class="floating-label">Address<span class="required">*</span></label>
	            </div>
            </div>    
            <div class="d-flex">
	            <div class="form-group">
	            	<input type="email" id="universityEmail" name="universityEmail" />
	            	<label class="floating-label">University Email<span class="required">*</span></label>
	            </div>
	             <div class="form-group">    
	            	<label>University Status <span class="required">*</span></label>
	                <select id = "universityStatus" name="universityStatus" class="field-divided">
	                <option value="">Select Status</option>
	                <option value="Active">Active</option>
	                <option value="Inactive">Inactive</option>
	              </select>
	            </div>
            </div>
	        <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "logoURL" name="logoURL" />
	            	<label class="floating-label">Logo URL<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "websiteURL" name="websiteURL" />
	            	<label class="floating-label">Website URL<span class="required">*</span></label>
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