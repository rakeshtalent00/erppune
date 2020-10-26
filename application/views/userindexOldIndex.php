
<?php 
define("_ROOT",base_url());
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style type="text/css">
		.d-flex{
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: flex-start;
		}
		.form-group{
			width: 100%;
			margin: 10px 0;
		}
		.d-flex .form-group{
			width: 48%;

		}
        .form-group textarea{
            width: 100%;
        }
		.d-flex .form-group select,
		.d-flex .form-group input{
			width: 100%;
		}
		.cta-submit{
			text-align: center;
		}
		.cta-submit input{
			width: 40%;
			margin: auto;
			padding: 10px 5px;

		}
	</style>
</head>
<body>
	<h1> <?php echo _ROOT; ?></h1>
    <article class="form-style-1">
    	<form name="createuserform" method="" enctype="multipart/form-data">
            <div class="d-flex">
	            <div class="form-group">
	            	<label>First Name<span class="required">*</span></label>
	            	<input type="text" id = "firstName" name="firstName" placeholder="First" />
	            </div>
	            <div class="form-group">
	            	<label>Last Name<span class="required">*</span></label>
	            	<input type="text" id = "lastName" name="lastName" placeholder="Last" />
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
	            	<label>Email<span class="required">*</span></label>
	            	<input type="text" id = "userEmail" name="userEmail" placeholder="Email" />
	            </div>
	            
	            <div class="form-group">
	            	<label>User Name <span class="required">*</span></label>
	            	<input type="text" id = "userName" name="userName" placeholder="User Name" />
	            </div>
            </div>

            <div class="d-flex">
	            <div class="form-group">
	            	<label>User Photo <span class="required">*</span></label>
            	<input type="file" id = "userPhoto" name="userPhoto" placeholder="description" />
	            </div>
	            
	            <div class="form-group">
	            	<label>Employee Code<span class="required">*</span></label>
	            	<input type="text" id = "employeeCode" name="employeeCode" placeholder="Employee Code" />
	            </div>
            </div>
            
            

            <div class="d-flex">
	            <div class="form-group">
	                <label>Password<span class="required">*</span></label>
	                <input type="text" id = "password" name="password" placeholder="Password" />
	            </div>
	            <!-- <div class="form-group">
	                <label>Confirm Password<span class="required">*</span></label>
	                <input type="text" id = "confirmPassword" name="confirmPassword" placeholder="Confirm Password" />
	            </div> -->
	        </div>
	            

            <div class="d-flex">
	            <div class="form-group">    
	            	<label>Gender <span class="required">*</span></label>
	                <select id = "gender" name="gender" class="field-divided">
	                <option value="">Select Gender</option>
	                <option value="Male">Male</option>
	                <option value="Female">Female</option>
	              </select>
	            </div>
	            <div class="form-group">    
	            	<label>Date Of Birth <span class="required">*</span></label>
	                <input type="date" id = "dateOfBirth" name="dateOfBirth" placeholder="Date Of Joining"/>
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
	            	<label>Mobile<span class="required">*</span></label>
	            	<input type="text" id = "Mobile" name="Mobile" placeholder="Mobile" />
	            </div>
	            <div class="form-group">
	            	<label>Mobile Work<span class="required">*</span></label>
	            	<input type="text" id = "mobileWork" name="mobileWork" placeholder="Mobile Work" />
	            </div>
            </div>

            <div class="d-flex">
	            <div class="form-group">
	            	<label>Mobile Other</label>
	            	<input type="text" id = "mobileOther" name="mobileOther" placeholder="Mobile Other"/>
	            </div>
	            <div class="form-group">
	            	<label>Street</label>
	            	<input type="text" id = "addressStreet" name="addressStreet" placeholder="Street" />
	            </div>
	        </div>
		<!-- <div class="form-group">
	                <label>Address<span class="required">*</span></label>
	                <textarea  id = "address" name="address" class="field-divided"></textarea>
	            </div> -->
            <div class="d-flex">
	            <div class="form-group">
	                <label>Postal Code</label>
	                <input type="text" id="postalCode" name="postalCode" placeholder="Pincode" />
	            </div>

	            <div class="form-group">
	            	<label>Country</label>
	                <select id="country" name="country" class="field-divided">
	                <option value="">Select Country</option>
	                <option value="Partnership">india</option>
	                <option value="General Question">Pakistan</option>
	                </select> 
	                
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
	                <label>State</label>
	                <!-- <select id="state" name="state" class="field-divided">
	                    <option value="">Select State</option>
	                    <option value="Uttar Pradesh">Uttar Pradesh</option>
	                    </select>  -->
	                    <input type="text" id = "state" name="state" placeholder="state" />
	            </div>
	            <div class="form-group">
	                <label>City</label>
	                <!-- <select id="city" name="city" class="field-divided">
	                <option value="">Select City</option>
	                <option value="Agra">Agra</option>
	                <option value="Pakistan">Pakistan</option> -->
	                <!-- </select>  -->
	                <input type="text" id = "city" name="city" placeholder="city" />
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
	                <label>Education</label>
	                <input id="education" type="text" name="education" placeholder="Education" />
	            </div>
	            <div class="form-group">
	                <label>Status<span class="required">*</span></label>
	                <select id="status" name="status" class="field-divided">
		                <option value="">Select Status</option>
		                <option value="Partnership">Active</option>
		                <option value="General Question">Inactive</option>
	                </select> 
	            </div>
            </div>

            <div class="d-flex">
	            <div class="form-group">
	                <label>Reports To</label>
	                <select id="reportsTo" name="reportsTo" class="field-divided">
	                    <option value="">Select Reporting Manager</option>
	                   <?php
						foreach($data=$userlist->result_array() as $row)
						{
						echo "<option value='" .$row['id']."'>" .$row['userName']."</option>";
						}
						?>
	                </select> 
	            </div>
		        <div class="form-group">
	                <label>Designation</label>
	                <select id="designation" name="designation" class="field-divided">
	                <option value="">Select Designation</option>
	                <option value="Partnership">Manager</option>
	                <option value="General Question">TL</option>
	                </select> 
	            </div>
            </div>

            <div class="d-flex">
	            <div class="form-group">
	                <label>Choose Media</label>
	                <select id="media" name="media" class="field-divided">
	                	<option value="Advertise">Select Media</option>
	                </select> 
	            </div>

	            <div class="form-group">
	                <label>Campaign</label>
	                <select id="campaign" name="campaign" class="field-divided">
	                    <option value="">Select Campaign</option>
	                    <option value="Facebook">Facebook</option>
	                    <option value="Google">Google</option>
	                </select>
	            </div>
            </div>
	    <div class="d-flex">
	            <div class="form-group">
	                <label>University</label>
	                <select id="universityId" name="universityId" class="field-divided">
	                	<option value="">Select University</option>
						<?php
						foreach($data=$universityList->result_array() as $row)
						{
						echo "<option value='" .$row['id']."'>" .$row['universityName']."</option>";
						}
						?>
						
	                </select> 
	            </div>

	            <div class="form-group">
	                <label>Department</label>
	                <select id="departmentId" name="departmentId" class="field-divided">
	                    <option value="">Select Department</option>
	                    <option value="1">IT</option>
	                    <option value="2">Salse</option>
	                </select>
	            </div>
            </div>
            <div class="form-group cta-submit">
                <input type="button" id ="createuserbtn" value="Submit" />
            </div>
        </form>
    </article>
        
        <style type="text/css">
        .form-style-1 {
            margin:10px auto;
            max-width: 70%;
            padding: 20px 12px 10px 20px;
            font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }
        .form-style-1 li {
            padding: 0;
            display: block;
            list-style: none;
            margin: 10px 0 0 0;
        }
        .form-style-1 label{
            margin:0 0 3px 0;
            padding:0px;
            display:block;
            font-weight: bold;
        }
        .form-style-1 input[type=text], 
        .form-style-1 input[type=date],
        .form-style-1 input[type=datetime],
        .form-style-1 input[type=number],
        .form-style-1 input[type=search],
        .form-style-1 input[type=time],
        .form-style-1 input[type=url],
        .form-style-1 input[type=email],
        textarea, 
        select{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border:1px solid #BEBEBE;
            padding: 7px;
            margin:0px;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;	
        }
        .form-style-1 input[type=text]:focus, 
        .form-style-1 input[type=date]:focus,
        .form-style-1 input[type=datetime]:focus,
        .form-style-1 input[type=number]:focus,
        .form-style-1 input[type=search]:focus,
        .form-style-1 input[type=time]:focus,
        .form-style-1 input[type=url]:focus,
        .form-style-1 input[type=email]:focus,
        .form-style-1 textarea:focus, 
        .form-style-1 select:focus{
            -moz-box-shadow: 0 0 8px #88D5E9;
            -webkit-box-shadow: 0 0 8px #88D5E9;
            box-shadow: 0 0 8px #88D5E9;
            border: 1px solid #88D5E9;
        }
        .form-style-1 input[type=submit], .form-style-1 input[type=button]{
            background: #4B99AD;
            border: none;
            color: #fff;
        }
        .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
            background: #4691A4;
            box-shadow:none;
            -moz-box-shadow:none;
            -webkit-box-shadow:none;
        }
        .form-style-1 .required{
            color:red;
        }
        </style>
</body>
<script>
	$(document).on('click','#createuserbtn',function(e) {
	e.preventDefault()
    var formdata = new FormData(createuserform);
	var url= "http://localhost/erppune/createuser";
    $.ajax({
		 url: url, 
		 dataType: "text",
		 cache: false,
		 contentType: false,
		 processData: false,
		 data: formdata,                         
		 type: "POST",
		 success: function(data){
			 console.log("Okkk" + data);
			 var res=JSON.parse(data);
			 if(res.success==true){
				// $("#refreshuserdiv").html(res.data);
				// $("input,select").val("");
				//$("#userTable").tablesorter();
				alert("User Created");
                $("#alertlabel").text('User Created');
                $("#modalAlert").modal('show');				
			 }	 
			 else
				 alert(res.error);
		}
     });
});


  
  $(document).ready(function() {
    $("#postalCode").keyup(function() {
        var el = $(this);
        if (el.val().length === 6) {
        	$("#city").val("");
            $("#state").val("");
            $.ajax({
                url: "https://api.postalpincode.in/pincode/122001",
                cache: false,
                dataType: "json",
                type: "GET",
                data: "zip=" + el.val(),
                success: function(result, success) {
                	var data = JSON.stringify(result[0].PostOffice);
                	var data1 = JSON.parse(data);
                	var data2 = data1[0];
                	console.log(data2);
                    $("#city").val(data2.District);
                    $("#state").val(data2.State);
                }
            });
        }
    });
});
</script>
</html>
