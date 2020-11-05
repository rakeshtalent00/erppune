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
    <link href="<?php echo _ROOT; ?>/assets/images/favicon.ico" type="image/x-icon" rel="icon"/>
	<link rel="stylesheet" type="text/css" href="<?php echo _ROOT; ?>/assets/css/user-upload-style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo _ROOT; ?>/assets/css/custom-basic-styles.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo _ROOT; ?>/assets/css/sideNav.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo _ROOT; ?>/assets/css/header.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo _ROOT; ?>/assets/css/user-list-view.css"/>

	<script src="<?php echo _ROOT; ?>/assets/scripts/font-awesome.js"></script>
	<script src="<?php echo _ROOT; ?>/assets/scripts/jquery.min.js"></script>
    <script src="<?php echo _ROOT; ?>/assets/scripts/custom-common.js"></script>
</head>
<body>
<?php if($header){ echo $header; }?>
    <?php if($sidebar){ echo $sidebar; }?>
<main class="d-flex">
    <?php if($page){ echo $page; }?>
</main>
<?php if($footer){ echo $footer; }?>
</body>
</html>