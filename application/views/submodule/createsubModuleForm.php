<div class="te-container">
<article class="form-style-1">
    	<form name="createsubmoduleform" method="" enctype="multipart/form-data">
			<h2>Sub Module Management</h2>
            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "submodule" name="submodule" />
	            	<label class="floating-label">Sub Module Name<span class="required">*</span></label>
	            </div>

				<div class="form-group">
				<label>Title<span class="required">*</span></label>
	            	<input type="text" id = "title" name="title" />
	            </div>
	            
	        </div>

            <div class="d-flex">
				<div class="form-group">
				<label>Description</label>
	            	<input type="text" id = "description" name="description" />
	            </div>
					<div class="form-group">
				<label>Status<span class="required">*</span></label>
				<select id="status" name="status" class="field-divided">
	                    <option value="">Select status</option>
	                    <option value="1">Active</option>
	                    <option value="0">Inactive</option>
	                </select>
	            </div>
            </div>

			<div class="d-flex">
					<div class="form-group">
				<label>Parent Module<span class="required">*</span></label>
				<select id="moduleId" name="moduleId" class="field-divided">
	                    <option value="">Select Module</option>
	                    <?php foreach ($moduleList as $row){ ?>	
							<option value="<?php echo $row->id ?>"><?php echo $row->name; ?></option>
							<?php } ?>
	                </select>
	            </div>
            </div>

            <div class="form-group cta-submit">
                <input type="button" id ="createsubmodulebtn" value="Submit" />
            </div>
        </form>
    </article>
</div>

<script>
$(document).on('click','#createsubmodulebtn',function(e) {
	e.preventDefault()
	if(($("#submodule").val().trim().length==0))
	{
		alert("Please Insert Name");
		exit;
	}else if(($("#status").val().trim().length==0))
	{
		alert("Please Select Status");
		exit;
	}else if(($("#title").val().trim().length==0))
	{
		alert("Please Select title");
		exit;
	}else if(($("#moduleId").val().trim().length==0))
	{
		alert("Please Select module");
		exit;
	}
    var formdata = new FormData(createsubmoduleform);
	var url= "<?php echo _ROOT; ?>createsubModule";
    $.ajax({
		 url: url, 
		 cache: false,
		 contentType: false,
		 processData: false,
		 data: formdata,                         
		 type: "POST",
		 success: function(data){
			//  console.log("Okkk" + data);
			 var res=JSON.parse(data);
			 if(res.success==true){
				alert("Sub Module Created");	
				location.reload();	
			 }	 
			 else
				 alert(res.error);
		}
     });
});
</script>