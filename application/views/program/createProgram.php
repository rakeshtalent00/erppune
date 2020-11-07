<div class="te-container">
	<article class="form-style-1">

        <!--- Success Message --->
        <?php if ($this->session->flashdata('success')) { ?>
        <p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
        <?php }?>
        <!---- Error Message ---->
        <?php if ($this->session->flashdata('error')) { ?>
        <p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
        <?php } ?>

        <?php echo form_open('program/create'); ?>
    		
            <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_input(['name'=>'name','class'=>'form-control','value' => set_value('name') ]);?>
	            	<label class="floating-label">Program Name<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('name'); ?></span>
	            </div>
	             <div class="form-group">    
	            	<label>Program Status <span class="required">*</span></label>
	                <select id = "programStatus" name="status" class="field-divided">
                        <option value="" disabled selected>Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
	              </select>
                  <span style="color:red;"><?php echo form_error('status'); ?></span>
	            </div>
            </div>    
            <!-- <div class="d-flex">
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
            </div> -->
            <div class="form-group cta-submit">
                <input type="submit" id ="createuserbtn" value="Submit" />
            </div>
            <?php echo form_close(); ?>
	</article>
</div>