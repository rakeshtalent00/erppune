<div class="te-container">
	<article class="form-style-1">
	<form name="updateroleform" method="" enctype="multipart/form-data">
    		<h2>Departmen Management</h2>
            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "name" name="name"  value="<?php echo $designationList[0]->name ?>"/>
	            	<label class="floating-label">Department Name<span class="required">*</span></label>
	            </div>

	        </div>

            <div class="d-flex">
	            <div class="form-group">
				<label>Status<span class="required">*</span></label>
				<select id="status" name="status" class="field-divided">
	                    <option value="">Select status</option>
	                    <option value="1" <?php if($designationList[0]->status == 1){?> selected="selected" <?php }?>>Active</option>
	                    <option value="0" <?php if($designationList[0]->status == 0){?> selected="selected" <?php }?>>Inactive</option>
	                </select>
	            </div>

				
	            <div class="form-group">
				<label>Description<span class="required">*</span></label>
	            	<input type="text" id = "description" name="description" value="<?php echo $designationList[0]->description ?>"/>
	            </div>
	            <input type="hidden" id="departmentId" name="departmentId" value="<?php echo $designationList[0]->id ?>">
            </div>

            <div class="form-group cta-submit">
                <input type="button" id ="updaterolebtn" value="Submit" />
            </div>
        </form>
    </article>
</div>
<script>
$(document).on('click','#updaterolebtn',function(e) {
	e.preventDefault()
	if(($("#name").val().trim().length==0))
	{
		alert("Please Insert Name");
		exit;
	}else if(($("#status").val().trim().length==0))
	{
		alert("Please Select Status");
		exit;
	}
    var formdata = new FormData(updateroleform);
	var url= "<?php echo base_url(); ?>updateDepartment";
    $.ajax({
		 url: url, 
		 cache: false,
		 contentType: false,
		 processData: false,
		 data: formdata,                         
		 type: "POST",
		 success: function(data){
			 var res=JSON.parse(data);
			 if(res.success==true){
				alert("Designation Update");	
				location.reload();	
			 }	 
			 else
				 alert(res.error);
		}
     });
});
</script>