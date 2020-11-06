<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title><?php echo $title; ?></title>
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
<?php if($header){ echo $header; }?>
<main class="d-flex">
    <?php if($sidebar){ echo $sidebar; }?>
    <?php if($page){ echo $page; }?>
</main>
<?php if($footer){ echo $footer; }?>
</body>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

</html>