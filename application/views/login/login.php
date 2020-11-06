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


<script>
$(document).on("click","#login",function(){
	alert("Boom");
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