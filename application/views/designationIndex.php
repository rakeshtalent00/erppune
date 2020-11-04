<?php 
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
	<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/user-upload-style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/custom-basic-styles.css"/>
	<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/sideNav.css"/>
	<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/header.css"/>

</head>
<body>
<?php require_once("header/header.php"); ?>
<main class="d-flex">
	<?php require_once("sideNav/sideNav.php"); ?>   
	<?php require_once("designation/createDesignationForm.php"); ?>      
</main>
</body>
    <script src="<?php  echo _ROOT; ?>assets/scripts/font-awesome.js"></script>
    <script src="<?php  echo _ROOT; ?>assets/scripts/jquery.min.js"></script>
    <script src="<?php  echo _ROOT; ?>assets/scripts/custom-common.js"></script>
<script>
	


  
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