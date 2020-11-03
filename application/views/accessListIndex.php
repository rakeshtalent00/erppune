<?php 
define("_ROOT",base_url());
?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/user-upload-style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/user-list-view.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/custom-basic-styles.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/sideNav.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/header.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/accessControl.css"/>
    </head>
	
	<body>
		<?php require_once("header/header.php"); ?>
		<main class="d-flex">
		 	<?php require_once("sideNav/sideNav.php"); ?>
			<style>
				
			</style>
            <?php require_once("moduleaccess/moduleAccessForm.php"); ?>
		
		</main>
	</body>
  
<script type="text/javascript" charset="utf8" src=""></script>
<script src="<?php  echo _ROOT; ?>assets/scripts/jquery.min.js"></script>
<script src="<?php  echo _ROOT; ?>assets/scripts/font-awesome.js"></script>
<script src="<?php  echo _ROOT; ?>assets/scripts/custom-common.js"></script>
</html>