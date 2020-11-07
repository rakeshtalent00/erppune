<div class="te-container">
	<article class="form-style-1">
	<!-- <?php //echo validation_errors(); ?> -->
	
	<!--- Success Message --->
	<?php if ($this->session->flashdata('success')) { ?>
	<p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
	<?php }?>
	<!---- Error Message ---->
	<?php if ($this->session->flashdata('error')) { ?>
	<p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
	<?php } ?>
	
	<?php echo form_open('subject/create'); ?>
    	<!-- <form name="createuserform" method="" enctype="multipart/form-data"> -->
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
					<?php echo form_input(['name'=>'name','class'=>'form-control','value' => set_value('name') ]);?>
	            	<label class="floating-label">Subject Name<span class="required">*</span></label>
					<span style="color:red;"><?php echo form_error('name'); ?></span>
	            </div><br><br>
	            <div class="form-group">
					<?php echo form_input(['id' => 'codefield','name'=>'code','class'=>'form-control','value' => set_value('code')]);?>
	            	<label class="floating-label">Subject Code<span class="required">*</span></label>
					<span style="color:red;"><?php echo form_error('code'); ?></span>
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
					<?php echo form_input(['name'=>'passing_marks','class'=>'form-control','value' => set_value('passing_marks')]);?>
	            	<label class="floating-label">Passing Marks<span class="required">*</span></label>
					<span style="color:red;"><?php echo form_error('passing_marks'); ?></span>
	            </div>
	            <div class="form-group">
					<?php echo form_input(['name'=>'total_marks','class'=>'form-control','value' => set_value('total_marks')]);?>
	            	<label class="floating-label">Total Marks<span class="required">*</span></label>
					<span style="color:red;"><?php echo form_error('total_marks'); ?></span>
	            </div>
	            
            </div>

            <div class="d-flex">
	        	<div class="form-group">    
	            	<label>Subject Description <span class="required">*</span></label>
					<?php echo form_textarea(['name'=>'description','class'=>'form-control','value' => set_value('description')]);?>
					<span style="color:red;"><?php echo form_error('description'); ?></span>
	            </div>
	             <div class="form-group">    
	            	<label>Status (Active/Inactive) <span class="required">*</span></label>
					
	                <select id = "subjectStatus" name="status" class="field-divided">
						<option value="" disabled>Select Status</option>
						<option value="1" selected>Active</option>
						<option value="0">Inactive</option>
	              	</select>
					<span style="color:red;"><?php echo form_error('status'); ?></span>
	            </div>
            </div>    

            <div class="form-group cta-submit">
                <input type="submit" id ="createuserbtn" value="Submit" />
            </div>
        <!-- </form> -->
	</article>
</div>
