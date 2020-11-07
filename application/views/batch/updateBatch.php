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

    	<!-- <form name="createuserform" method="" enctype="multipart/form-data"> -->
        <?php echo form_open('batch/update'); ?>
        <?php echo form_input(['type' => 'hidden','name'=>'id','class'=>'form-control','value' => isset($batch->id) ? $batch->id : set_value('id') ]);?>

            <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_input(['name'=>'name','class'=>'form-control','value' => isset($batch->name) ? $batch->name : set_value('name') ]);?>
	            	<label class="floating-label">Batch Name<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('name'); ?></span>
	            </div>
	            <div class="form-group">
                    <?php echo form_input(['name'=>'code','class'=>'form-control','value' => isset($batch->code) ? $batch->code : set_value('code') ]);?>
	            	<label class="floating-label">Batch Code<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('code'); ?></span>
	            </div>
	        </div>

            <div class="d-flex">
	        	<div class="form-group">    
	            	<label>Start Date <span class="required">*</span></label>
                    <?php echo form_input(['type'=>'date','name'=>'start_date','class'=>'form-control','value' => isset($batch->start_date) ? $batch->start_date : set_value('start_date') ]);?>
                    <span style="color:red;"><?php echo form_error('start_date'); ?></span>
	            </div>
	            <div class="form-group">    
	            	<label>End Date <span class="required">*</span></label>
	                <?php echo form_input(['type'=>'date','name'=>'end_date','class'=>'form-control','value' => isset($batch->end_date) ? $batch->end_date : set_value('end_date') ]);?>
                    <span style="color:red;"><?php echo form_error('end_date'); ?></span>
	            </div>
            </div>

            <div class="d-flex">
	        	<!-- <div class="form-group">    
	                <textarea id = "batchDesc" name="batchDesc" style="resize:none;"></textarea> 
	            	<label class="floating-label">Batch Description <span class="required">*</span></label>
	            </div> -->

                <?php 
                       $status = isset($subject->status) ? $subject->status : set_value('status');
                ?>

	             <div class="form-group">    
	            	<label>Batch Status <span class="required">*</span></label>
	                <select id = "status" name="status" class="field-divided">
                        <option value="" disabled>Select Status</option>
                        <option value="1" <?php if($status == 1){ ?> selected <?php }?> >Active</option>
						<option value="0" <?php if($status == 0){ ?> selected <?php }?> >Inactive</option>
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
	        </div> -->

			<!-- <div class="d-flex">
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
                <input type="submit" value="Submit" />
            </div>
        </form>
	</article>
</div>