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
    </head>
	
	<body>
		<?php require_once("header/header.php"); ?>
		<main class="d-flex">
		 	<?php require_once("sideNav/sideNav.php"); ?>
			<style>
				.access-control {
					padding: 20px;
					background: #fff;	
				}
				.user-role.form-group{
					width: 60%;
					display: flex;
					flex-wrap: wrap;
					justify-content: flex-start;
					align-items: center;
				}
				.user-role.form-group select{
					width: 60%;
					margin-left: 20px;
				}
				.access-table th {
				    background-color: #244895;
				    color: #ffffff;
				}

				.access-table td,
				.access-table th{
					padding: 5px 7px;
				    min-width: 80px;
				}
				
				.access-table{
					width: 100%;
				}
				.responsive-table{
					overflow-x: auto;
					margin-bottom: 20px;
				}
				.access-table,
				.access-table table{
				  border-collapse: collapse !important;
				}
				.access-table tbody tr:last-child td{
				    border-bottom: none;
				}
				.access-table tbody tr td{
				    border-bottom: 1px solid #244895;
				}
				.access-table td{
					background-color: #fff;
					color: #000;
					text-align: center; 
					/*border-left: 2px solid #00A3D3;*/
				}
				/*.access-table th:last-child,
				.access-table td:last-child{
					border-left: 2px solid #00A3D3;
				}*/
				.access-table th:first-child,
				.access-table td:first-child{
					/*border-left: none;*/
					min-width: 150px; 
					text-align: left; 
					position: relative;
				}
				.access-table .has-submenu {
				    cursor: pointer;
				}
				.access-table .has-submenu td:first-child:before {
					display: inline-block;
				    position: relative;
				    top: 0px;
				    left: 0px;
				    margin-right: 5px;
				    content: '\f078';
				    font-size: 14px;
				    font-family: FontAwesome;
				    color: #244895;
				    transform: rotate(0deg);
				    transition: 0.3s linear;
				}
				.access-table .has-submenu.clicked td:first-child:before {
				    transform: rotate(-90deg);
				    transition: 0.3s linear;
				}
				.access-table .sub-access {
					display: none;
					border-top: 2px solid #244895;
					border-bottom: 2px solid #244895;
				}
				.access-table .sub-access > td {
					padding-left: 0;
				}
				.access-table .sub-access table td:first-child {
					border-left: 10px solid #fff;
				}
				.access-table .sub-access table {
					width: 100%;
					padding-left: 0;
					padding-right: 0;
				}
				input[type=submit]{
					background-color: #00A3D3;
					border: 0;
					outline: 0;
					padding: 5px 15px;
					border-radius: 3px;
					color: #fff;
					font-weight: bold;
				}
				.submit-cta{
					position: relative;
					left: 90%;
				}
				.expand-ctas{
					justify-content: flex-start;
					margin: 5px 0;
				}
				.expand-ctas span{
					margin: 0 5px;
				}
				.expand-access,
				.collapse-access{
					text-decoration: underline;
					display: block;
					font-size: 12px;
					line-height: 18px;
					color: #244895;
					cursor: pointer;

				}
			</style>
            <?php require_once("usermoduleaccess/usermoduleAccessForm.php"); ?>
		
		</main>
	</body>
  
		<script src="<?php  echo _ROOT; ?>assets/scripts/jquery.min.js"></script>
		<script src="<?php  echo _ROOT; ?>assets/scripts/font-awesome.js"></script>
		<script src="<?php  echo _ROOT; ?>assets/scripts/custom-common.js"></script>

  	<script>
		$(document).ready(function(){
			$('.user').click(function(){
				$('.user').removeClass('active');
				$(this).addClass('active');
				$('.user-details').slideUp();
				$(this).find('.user-details').slideDown();
			});

			$('tr').click(function(){
				console.log($(this).parent().parent());
				$(this).next('.user-details').slideToggle();
			});


			$('.expand-access').click(function(){
				$('.sub-access').slideDown();
			});
			$('.collapse-access').click(function(){
				$('.sub-access').slideUp();
			});

			$('.sub-access').prev('tr').addClass('has-submenu');
			$('.sub-access').prev('tr').click(function(){
				$(this).toggleClass('clicked');
				$(this).next('.sub-access').slideToggle('normal');
			});

		});

	</script>

</html>