<style>
    .form-style-1 {
        position: relative;
        margin: 0;
        width: 77%;
        top: 70px;
        margin-left: auto;
        padding:0 20px ;
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
<article class="form-style-1">
    	<form name="createroleform" method="" enctype="multipart/form-data">
    		<h2>Role Management</h2>
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
	            	<input type="text" id = "name" name="name" />
	            	<label class="floating-label">Role Name<span class="required">*</span></label>
	            </div>
	            <div class="form-group">
	                <label>Slug</label>
	                <select id="slug" name="slug" class="field-divided">
	                    <option value="">Select slug</option>
	                    <option value="slug">slug</option>
	                    <option value="slug1">slug1</option>
	                </select>
	            </div>
	        </div>

            <div class="d-flex">
	            <div class="form-group">
	            	<input type="text" id = "description" name="description" />
	            	<label class="floating-label">Description</label>
	            </div>
	            
            </div>
        
            <div class="form-group cta-submit">
                <input type="button" id ="createrolebtn" value="Submit" />
            </div>
        </form>
    </article>