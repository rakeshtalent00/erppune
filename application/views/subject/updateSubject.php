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
	
	<?php echo form_open('subject/update'); ?>
        <?php echo form_input(['name'=>'id','type' => 'hidden','class'=>'form-control','value' => isset($subject->id) ? $subject->id : set_value('id') ]);?>
            <div class="d-flex">
	            <div class="form-group">
					<?php echo form_input(['name'=>'name','class'=>'form-control','value' => isset($subject->name) ? $subject->name : set_value('name') ]);?>
	            	<label class="floating-label">Subject Name<span class="required">*</span></label>
					<span style="color:red;"><?php echo form_error('name'); ?></span>
	            </div><br><br>
	            <div class="form-group">
					<?php echo form_input(['id' => 'codefield','name'=>'code','class'=>'form-control','value' => isset($subject->code) ? $subject->code : set_value('code') ]);?>
	            	<label class="floating-label">Subject Code<span class="required">*</span></label>
					<span style="color:red;"><?php echo form_error('code'); ?></span>
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
					<?php echo form_input(['name'=>'passing_marks','class'=>'form-control','value' => isset($subject->passing_marks) ? $subject->passing_marks : set_value('passing_marks') ]);?>
	            	<label class="floating-label">Passing Marks<span class="required">*</span></label>
					<span style="color:red;"><?php echo form_error('passing_marks'); ?></span>
	            </div>
	            <div class="form-group">
					<?php echo form_input(['name'=>'total_marks','class'=>'form-control','value' => isset($subject->total_marks) ? $subject->total_marks : set_value('total_marks') ]);?>
	            	<label class="floating-label">Total Marks<span class="required">*</span></label>
					<span style="color:red;"><?php echo form_error('total_marks'); ?></span>
	            </div>
	            
            </div>

            <div class="d-flex">
	        	<div class="form-group">    
	            	<label>Subject Description <span class="required">*</span></label>
					<?php echo form_textarea(['name'=>'description','class'=>'form-control','value' => isset($subject->description) ? $subject->description : set_value('description') ]);?>
					<span style="color:red;"><?php echo form_error('description'); ?></span>
	            </div>
	             <div class="form-group">    
	            	<label>Status (Active/Inactive) <span class="required">*</span></label>
					
                    <?php 
                        $status = isset($subject->status) ? $subject->status : set_value('status');
                    ?>

	                <select id = "subjectStatus" name="status" class="field-divided">
						<option value="" disabled>Select Status</option>
                        <option value="1" <?php if($status == 1){ ?> selected <?php }?> >Active</option>
						<option value="0" <?php if($status == 0){ ?> selected <?php }?> >Inactive</option>
	              	</select>
					<span style="color:red;"><?php echo form_error('status'); ?></span>
	            </div>
            </div>    

            <div class="form-group cta-submit">
                <input type="submit" id ="createuserbtn" value="Submit" />
            </div>
	</article>
</div>
