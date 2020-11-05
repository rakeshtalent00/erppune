<div class="te-container">
	<article class="form-style-1">
    	<form name="createuserform" method="" enctype="multipart/form-data">
    		<!-- <div class="form-group">
	            	<label style="display: none;">User Photo <span class="required">*</span></label>
            		<input type="file" id = "userPhoto" name="userPhoto" placeholder="description" />
            		<figure class="upload-user-bg">
            			<img src="assets/images/upload-user.png">
            			<span>Upload Photo</span>
            		</figure>
            </div> -->

            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "subjectName" name="subjectName" />
	            	<label class="floating-label">Subject Name<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "subjectCode" name="subjectCode" />
	            	<label class="floating-label">Subject Code<span class="required">*</span></label>
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "passingMark" name="passingMark" />
	            	<label class="floating-label">Passing Marks<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	            	<input type="text" id = "totalMark" name="totalMark" />
	            	<label class="floating-label">Total Marks<span class="required">*</span></label>
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

            <div class="d-flex">
	        	<div class="form-group">    
	            	<label>Subject Description <span class="required">*</span></label>
	                <textarea id = "subjectDesc" name="subjectDesc"></textarea> 
	            </div>
	             <div class="form-group">    
	            	<label>Subject Status <span class="required">*</span></label>
	                <select id = "subjectStatus" name="subjectStatus" class="field-divided">
	                <option value="">Select Status</option>
	                <option value="Active">Active</option>
	                <option value="Inactive">Inactive</option>
	              </select>
	            </div>
            </div>    

            <div class="form-group cta-submit">
                <input type="button" id ="createuserbtn" value="Submit" />
            </div>
        </form>
	</article>
</div>
<script>
$(document).on('click','#createuserbtn',function(e) {
	e.preventDefault()

	if(($("#subjectName").val().trim().length==0))
	{
		alert("Please Insert First Name");
		exit;
	}else if(($("#subjectCode").val().trim().length==0))
	{
		alert("Please Insert Last Name");
		exit;
	}else if(($("#passingMark").val().trim().length==0))
	{
		alert("Please Insert Email");
		exit;
	}else if(($("#totalMark").val().trim().length==0))
	{
		alert("Please Insert Employee Code");
		exit;
	}else if(($("#gender").val().trim().length==0))
	{
		alert("Please select gender");
		exit;
	}else if(($("#createdBy").val().trim().length==0))
	{
		alert("Please Insert User Name");
		exit;
	}else if(($("#modifiedBy").val().trim().length==0))
	{
		alert('Please Insert Password');
		exit;
	}else if(checkPasswordMatch()==false){
		alert('modifiedBy Do Not Match');
		exit;
	}



    var formdata = new FormData(createuserform);
	var url= "<?php echo _ROOT; ?>createuser";
    $.ajax({
		 url: url, 
		 //dataType: "text",
		 cache: false,
		 contentType: false,
		 processData: false,
		 data: formdata,                         
		 type: "POST",
		 success: function(data){
			 console.log("Okkk" + data);
			 var res=JSON.parse(data);
			 if(res.success==true){
				alert("User Created");
                location.reload();			
			 }	 
			 else
				 alert(res.error);
		}
     });
});

function checkPasswordMatch(){
	var modifiedBy = $("#modifiedBy").val();
	var confirmPassword = $("#remodifiedBy").val();
	if (modifiedBy != confirmPassword)
		return false;
	else
		return true;
}
  
  $(document).ready(function() {
    $("#postalCode").keyup(function() {
        var el = $(this);
        if (el.val().length === 6) {
        	$("#city").val("");
            $("#state").val("");
			$("#country").val("");
			var pincode = el.val();
			var url =  "https://api.postalpincode.in/pincode/" + pincode ;
            $.ajax({
                url: url,
                cache: false,
                dataType: "json",
                type: "GET",
                data: "zip=" + el.val(),
                success: function(result, success) {
                	var data = JSON.stringify(result[0].PostOffice);
                	var data1 = JSON.parse(data);
                	var data2 = data1[0];
                	console.log(data2);
					// alert(data2.District);
					$('#country').val("");
					$('#state').val("");
					$('#city').val("");
                    var city = data2.District;
                    var state = data2.State;
					var country = data2.Country;
					
					$('#country').find('option').each( function() {
					var $this = $(this);
					if ($this.text().trim() == country.trim()) {
					$this.attr('selected','selected');
					return false;
					}
					});

					$('#state').find('option').each( function() {
					var $this = $(this);
					if ($this.text().trim() == state.trim()) {
					$this.attr('selected','selected');
					return false;
					}
					});

					$('#city').find('option').each( function() {
					var $this = $(this);
					if ($this.text().trim() == city.trim()) {
					$this.attr('selected','selected');
					return false;
					}
					});
					$("#country").selectmenu("refresh");
					$('#state').change();
					$('#city').change();
                }
            });
        }
    });
});
</script>