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

        <?php echo form_open('program/update'); ?>
        <?php echo form_input(['type'=>'hidden','name'=>'id','class'=>'form-control','value' => isset($program->id) ? $program->id : set_value('id') ]);?>
            <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_input(['name'=>'name','class'=>'form-control','value' => isset($program->name) ? $program->name : set_value('name') ]);?>
	            	<label class="floating-label">Program Name<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('name'); ?></span>
	            </div>

                <?php 
                     $status = isset($program->status) ? $program->status : set_value('status');
                ?>


	             <div class="form-group">    
	            	<label>Program Status <span class="required">*</span></label>
	                <select id = "programStatus" name="status" class="field-divided">
                        <option value="" disabled selected>Select Status</option>
                        <option value="1" <?php if($status == 1){ ?> selected <?php }?> >Active</option>
                        <option value="0" <?php if($status == 0){ ?> selected <?php }?> >Inactive</option>
	              </select>
                  <span style="color:red;"><?php echo form_error('status'); ?></span>
	            </div>
            </div>    
            
            <div class="form-group cta-submit">
                <input type="submit" id ="createuserbtn" value="Submit" />
            </div>
            <?php echo form_close(); ?>
	</article>
</div>