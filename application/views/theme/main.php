<?php 
define("_ROOT",base_url());
?>
<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title><?php echo $title; ?></title>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/user-upload-style.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/custom-basic-styles.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/sideNav.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css"/>
	<script src="assets/scripts/font-awesome.js"></script>
	<script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/custom-common.js"></script>
</head>
<body>
<?php if($header){ echo $header; }?>
    <?php if($sidebar){ echo $sidebar; }?>
<main class="d-flex">
    <?php if($page){ echo $page; }?>
</main>
</body>
</html>