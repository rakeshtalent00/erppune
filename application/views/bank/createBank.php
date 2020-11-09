<div class="te-container">
	<article class="form-style-1">
    <h2>Create Bank</h2>
        <?php echo form_open('bank/create'); ?>
            <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_input(['name'=>'name','class'=>'form-control','value' => set_value('name') ]);?>
	            	<label class="floating-label">Bank Name<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('name'); ?></span>
	            </div>
	            <div class="form-group">
                    <?php echo form_input(['name'=>'branch_name','class'=>'form-control','value' => set_value('branch_name') ]);?>
	            	<label class="floating-label">Branch Name<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('branch_name'); ?></span>
	            </div>
	        </div>
            <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_textarea(['name'=>'address','class'=>'form-control','value' => set_value('address'), 'style' => 'resize:none' ]);?>
	            	<label class="floating-label">Address<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('address'); ?></span>
	            </div>
            </div>    
            <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_input(['name'=>'ifsc_code','class'=>'form-control','value' => set_value('ifsc_code') ]);?>
	            	<label class="floating-label">IFSC Code<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('ifsc_code'); ?></span>
	            </div>
	             <div class="form-group">    
	            	<label>Bank Status <span class="required">*</span></label>
	                <select id = "bankStatus" name="status" class="field-divided">
	                <option value="" >Select Status</option>
	                <option value="1" selected>Active</option>
	                <option value="0">Inactive</option>
	              </select>
                  <span style="color:red;"><?php echo form_error('status'); ?></span>
	            </div>
            </div>
	        <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_input(['name'=>'account_no','class'=>'form-control','value' => set_value('account_no') ]);?>
	            	<label class="floating-label">Account No<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('account_no'); ?></span>
	            </div>
	            <div class="form-group">
                    <?php echo form_input(['name'=>'shortcode','class'=>'form-control','value' => set_value('shortcode') ]);?>
	            	<label class="floating-label">Short Code<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('shortcode'); ?></span>
	            </div>
	        </div>
            <!--  -->
            <h2>Select Payment Mode<span class="required">*</span></h2>

            
            <?php foreach($paymentTypes as $type){?>

            <?php 
                $checkboxRules = array(
                    'class' => 'form-check-input',
                    'value' => $type->id,
                    'name' => 'payment_type[]'
                );
                if(set_value('payment_type[]') == $type->id){ 
                    $checkboxRules['checked'] = 'checked'; 
                }
            ?>

            <div class="form-check form-check-inline">
                <?php echo form_checkbox($checkboxRules); 
                ?>
                <label class="form-check-label" for="inlineCheckbox1" style= 'display:inline-block;'><?php echo $type->name; ?></label>
                <span style="color:red;"><?php echo form_error('payment_type[]'); ?></span>
            </div>
            <?php } ?>
            
            
            
            <div class="form-group cta-submit">
                <input type="submit" value="Submit" />
            </div>
            <?php echo form_close(); ?>
	</article>
</div>