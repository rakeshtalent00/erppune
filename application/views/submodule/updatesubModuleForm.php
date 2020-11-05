<div class="te-container">
	<article class="form-style-1">
	<form name="updatesubmoduleform" method="" enctype="multipart/form-data">
			<h2>Sub Module Management</h2>
            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "subModule" name="subModule"  value="<?php echo $submoduleList[0]->subModule ?>"/>
	            	<label class="floating-label">Sub Module Name<span class="required">*</span></label>
	            </div>
				<div class="form-group">
				<label>Title<span class="required">*</span></label>
				<input type="text" id = "title" name="title"  value="<?php echo $submoduleList[0]->title ?>"/>
	            </div>
	        </div>

            <div class="d-flex">
				<div class="form-group">
				<label>Status<span class="required">*</span></label>
				<select id="status" name="status" class="field-divided">
	                    <option value="">Select status</option>
	                    <option value="1" <?php if($submoduleList[0]->status == 1){?> selected="selected" <?php }?>>Active</option>
	                    <option value="0" <?php if($submoduleList[0]->status == 0){?> selected="selected" <?php }?>>Inactive</option>
	                </select>
	            </div>
				<div class="form-group">
				<label>Description</label>
	            	<input type="text" id = "description" name="description" value="<?php echo $submoduleList[0]->description ?>"/>
	            </div>
				<div class="form-group">
				<label>Parent Module<span class="required">*</span></label>
				<select id="moduleId" name="moduleId" class="field-divided">
	                    <option value="">Select Sub Module</option>
	                    <?php foreach ($moduleList as $row){ ?>	
							<option value="<?php echo $row->id ?>" <?php if($submoduleList[0]->moduleId == $row->id){?> selected="selected" <?php }?>><?php echo $row->name; ?></option>
							<?php } ?>
	                </select>
	            </div>
	            <input type="hidden" id="submoduleId" name="submoduleId" value="<?php echo $submoduleList[0]->id ?>">
            </div>
			
            <div class="form-group cta-submit">
                <input type="button" id ="updatesubmodulebtn" value="Submit" />
            </div>
        </form>
    </article>
</div>
<script>
$(document).on('click','#updatesubmodulebtn',function(e) {
	e.preventDefault()
	if(($("#subModule").val().trim().length==0))
	{
		alert("Please Insert Sub Module");
		exit;
	}else if(($("#title").val().trim().length==0))
	{
		alert("Please Select title");
		exit;
	}
	else if(($("#status").val().trim().length==0))
	{
		alert("Please Select Status");
		exit;
	}
	else if(($("#moduleId").val().trim().length==0))
	{
		alert("Please Select moduleId");
		exit;
	}
    var formdata = new FormData(updatesubmoduleform);
	var url= "<?php echo base_url(); ?>updatesubModule";
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
				alert("Sub Module Update");	
				location.reload();	
			 }	 
			 else
				 alert(res.error);
		}
     });
});
</script>