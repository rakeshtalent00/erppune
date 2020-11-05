
<div class="te-container">
<article class="form-style-1">
    	<form name="createmoduleform" method="" enctype="multipart/form-data">
    		<h2>Module Management</h2>
            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "name" name="name" />
	            	<label class="floating-label">Module Name<span class="required">*</span></label>
	            </div>

				<div class="form-group">
				<label>Title<span class="required">*</span></label>
	            	<input type="text" id = "title" name="title" />
	            </div>
	            
	        </div>

            <div class="d-flex">
				<div class="form-group">
				<label>Description<span class="required">*</span></label>
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

            <div class="form-group cta-submit">
                <input type="button" id ="createmodulebtn" value="Submit" />
            </div>
        </form>
    </article>
</div>

<script>
$(document).on('click','#createmodulebtn',function(e) {
	e.preventDefault()
	if(($("#name").val().trim().length==0))
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
	}
    var formdata = new FormData(createmoduleform);
	var url= "<?php echo base_url(); ?>createModule";
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
				alert("Module Created");	
				location.reload();	
			 }	 
			 else
				 alert(res.error);
		}
     });
});
</script>