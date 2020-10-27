
<div class="te-container">
<article class="form-style-1">
    	<form name="createroleform" method="" enctype="multipart/form-data">
    		<h2>Role Management</h2>
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
	            	<input type="text" id = "name" name="name" />
	            	<label class="floating-label">Role Name<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	                <label>Slug</label>
	                <select id="slug" name="slug" class="field-divided">
	                    <option value="">Select slug</option>
	                    <option value="slug">slug</option>
	                    <option value="slug1">slug1</option>
	                </select>
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "description" name="description" />
	            	<label class="floating-label">Description</label>
	            </div>
	            
            </div>
        
            <div class="form-group cta-submit">
                <input type="button" id ="createrolebtn" value="Submit" />
            </div>
        </form>
    </article>
</div>