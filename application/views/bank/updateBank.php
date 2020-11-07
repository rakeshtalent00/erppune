<div class="te-container">
	<article class="form-style-1">
    <h2>Create Bank</h2>
        <?php echo form_open('bank/update'); ?>
        <?php echo form_input(['name'=>'id','type' => 'hidden','class'=>'form-control','value' => isset($bank->id) ? $bank->id : set_value('id') ]);?>
            <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_input(['name'=>'name','class'=>'form-control','value' => isset($bank->name) ? $bank->name : set_value('name') ]);?>
	            	<label class="floating-label">Bank Name<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('name'); ?></span>
	            </div>
	            <div class="form-group">
                    <?php echo form_input(['name'=>'branch_name','class'=>'form-control','value' => isset($bank->branch_name) ? $bank->branch_name : set_value('branch_name') ]);?>
	            	<label class="floating-label">Branch Name<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('branch_name'); ?></span>
	            </div>
	        </div>
            <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_textarea(['name'=>'address','class'=>'form-control','value' => isset($bank->address) ? $bank->address : set_value('address'), 'style' => 'resize:none' ]);?>
	            	<label class="floating-label">Address<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('address'); ?></span>
	            </div>
            </div>    
            <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_input(['name'=>'ifsc_code','class'=>'form-control','value' => isset($bank->ifsc_code) ? $bank->ifsc_code : set_value('ifsc_code') ]);?>
	            	<label class="floating-label">IFSC Code<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('ifsc_code'); ?></span>
	            </div>

                <?php 
                       $status = isset($bank->status) ? $bank->status : set_value('status');
                ?>
	             <div class="form-group">    
	            	<label>Bank Status <span class="required">*</span></label>
	                <select id = "bankStatus" name="status" class="field-divided">
	                <option value="" >Select Status</option>
	                <option value="1" <?php if($status == 1){ ?> selected <?php }?> >Active</option>
	                <option value="0" <?php if($status == 0){ ?> selected <?php }?>>Inactive</option>
	              </select>
                  <span style="color:red;"><?php echo form_error('status'); ?></span>
	            </div>
            </div>
	        <div class="d-flex">
	            <div class="form-group">
                    <?php echo form_input(['name'=>'account_no','class'=>'form-control','value' => isset($bank->account_no) ? $bank->account_no : set_value('account_no') ]);?>
	            	<label class="floating-label">Account No<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('account_no'); ?></span>
	            </div>
	            <div class="form-group">
                    <?php echo form_input(['name'=>'shortcode','class'=>'form-control','value' => isset($bank->shortcode) ? $bank->shortcode : set_value('shortcode') ]);?>
	            	<label class="floating-label">Short Code<span class="required">*</span></label>
                    <span style="color:red;"><?php echo form_error('shortcode'); ?></span>
	            </div>
	        </div>
            <!--  -->
            <h2>Select Payment Mode<span class="required">*</span></h2>

            
            <?php foreach($all_paymentTypes as $type){?>

            <?php 
                $checkboxRules = array(
                    'class' => 'form-check-input',
                    'value' => $type->id,
                    'name' => 'payment_type[]'
                );
                
                foreach($bank->payment_types as $selectedType)
                {
                    if($selectedType['id'] == $type->id)
                    {
                        $checkboxRules['checked'] = 'checked'; 
                    }
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