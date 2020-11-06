<!DOCTYPE html>
<html>
    <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Login</title>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url(); ?>/assets/images/favicon.ico" type="image/x-icon" rel="icon"/>
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/user-upload-style.css"/>
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/custom-basic-styles.css"/>
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/sideNav.css"/>
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/header.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/user-list-view.css"/>
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/user-list-view.css"/>
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/accessControl.css"/>
    	<script src="<?php echo base_url(); ?>/assets/scripts/font-awesome.js"></script>
    	<script src="<?php echo base_url(); ?>/assets/scripts/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/scripts/custom-common.js"></script>
    </head>
    <body>



<div class="login-page te-container">
	<div class="bg-image">
	</div>
	<article class="form-style-1 login-form">
		<form class="form-container">
			<div class="form-group">
				<input type="text" id="username" name="username" />
				<label class="floating-label">User Name</label>
			</div>
			<div class="form-group">
				<input type="password" id="password" name="password" />
				<label class="floating-label">Password</label>
			</div>
			<div class="form-group custom-check">
				<input type="checkbox" name="rememberme" id="rememberme" />
				<label>Keep Me Signed In</label>
			</div>
 			<div class="form-group cta-submit">
                <input type="button" id ="login" value="Sign In" />
            </div>
 			<div class="form-group cta-submit">
                <input type="button" id ="sbtn" value="Single Sign In" />
            </div>
		</form>
	</article>
</div>


</body>
</html>


<script>
$(document).on("click","#login",function(){
	var valueuser=$("#username").val();
    var username = valueuser.toLowerCase();
	var password=$("#password").val();
	var dataString = 'username='+username+'&password='+password+'&actiontype=checklogin';
	var url = "<?php echo base_url(); ?>userform";
	var url2 = "<?php echo base_url(); ?>loginCheck";
	//if($.trim(username).length>0 && $.trim(password).length>0)
	//{
	$.ajax({
		type: "POST",
		url:url2,
		data: dataString,
		cache: false,
		success: function(data){
			console.log(data);
			var res=JSON.parse(data);
			if(res.success==true)
			{
				window.location=url;
			}
			else
			{  
				showAlert();
			}
		}
	});
	//}
	//return false;
});		
function showAlert() {
	 $(".alert-danger").alert();
	 $(".alert-danger").fadeTo(2000, 600).slideUp(500, function(){
	 });   
}; 
</script>