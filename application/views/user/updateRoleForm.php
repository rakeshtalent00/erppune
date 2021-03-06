<div class="te-container">
	<article class="form-style-1">
	<form name="updateroleform" method="" enctype="multipart/form-data">
    		<h2>Role Management</h2>
            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "name" name="name"  value="<?php echo $roleList[0]->name ?>"/>
	            	<label class="floating-label">Role Name<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	                <label>Slug<span class="required">*</span></label>
	                <select id="slug" name="slug" class="field-divided">
	                    <option value="">Select slug</option>
	                    <option value="slug" <?php if($roleList[0]->slug == "slug"){?> selected="selected" <?php }?>>slug</option>
	                    <option value="slug1" <?php if($roleList[0]->slug == "slug1"){?> selected="selected" <?php }?>>slug1</option>
	                </select>
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
				<label>Status<span class="required">*</span></label>
				<select id="status" name="status" class="field-divided">
	                    <option value="">Select status</option>
	                    <option value="1" <?php if($roleList[0]->status == 1){?> selected="selected" <?php }?>>Active</option>
	                    <option value="0" <?php if($roleList[0]->status == 0){?> selected="selected" <?php }?>>Inactive</option>
	                </select>
	            </div>

				
	            <div class="form-group">
				<label>Description<span class="required">*</span></label>
	            	<input type="text" id = "description" name="description" value="<?php echo $roleList[0]->description ?>"/>
	            </div>
	            <input type="hidden" id="roleId" name="roleId" value="<?php echo $roleList[0]->id ?>">
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
	}else if(($("#slug").val().trim().length==0))
	{
		alert("Please Select Slug");
		exit;
	}else if(($("#status").val().trim().length==0))
	{
		alert("Please Select Status");
		exit;
	}
    var formdata = new FormData(updateroleform);
	var url= "<?php echo _ROOT; ?>updateRole";
    $.ajax({
		 url: url, 
		 cache: false,
		 contentType: false,
		 processData: false,
		 data: formdata,                         
		 type: "POST",
		 success: function(data){
			 console.log("Okkk" + data);
			 var res=JSON.parse(data);
			 if(res.success==true){
				alert("Role Updated");	
				location.reload();	
			 }	 
			 else
				 alert(res.error);
		}
     });
});
</script>