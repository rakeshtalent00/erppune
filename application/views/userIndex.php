<?php 
//if(!$this->session->userdata('userid'))
	//redirect(base_url());
define("_ROOT",base_url());
?>
<!DOCTYPE html>
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?php  echo _ROOT; ?>assets/scripts/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/user-upload-style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/custom-basic-styles.css"/>
	<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/sideNav.css"/>
	<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/header.css"/>
	<script src="<?php  echo _ROOT; ?>assets/scripts/font-awesome.js"></script>
</head>
<body>
<?php require_once("header/header.php"); ?>
<main class="d-flex">
	<?php require_once("sideNav/sideNav.php"); ?>   
	<?php require_once("user/createUserForm.php"); ?>      
</main>
</body>
<script>
	$(document).on('click','#createuserbtn',function(e) {
	e.preventDefault()
    var formdata = new FormData(createuserform);
	var url= "http://localhost/erppune/createuser";
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
			$("#country").val("");
			var pincode = el.val();
			var url =  "https://api.postalpincode.in/pincode/" + pincode ;
			alert(url);
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
  $(document).ready(function() {

  	$('header .hamburger-menu').click(function(){
		$('.side-nav').toggleClass('squeezed');
		$('.te-container').toggleClass('stretched');
	});


	if ($("input").val() != null || $("input").val() != ''){
		$(this).addClass('shifted');
	}
	$("input").change(function(){
  		var inpValue = $(this).val();
	  	$(this).addClass('shifted');
	  	if(inpValue == null || inpValue == '' || inpValue == ' ' || inpValue == '  ' ) {
  			$(this).val(null);
	  		$(this).removeClass('shifted');
	  	}	
	});
  });
</script>
</html>