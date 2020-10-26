<?php 
define("_ROOT",base_url());
?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/user-upload-style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/custom-basic-styles.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/sideNav.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/header.css"/>
		<script src="https://kit.fontawesome.com/9b792aadd6.js" crossorigin="anonymous"></script>
    </head>
	<style type="text/css">
		body{
			background: #c5c5c5;
		}
		
		.users-view{
			padding: 10px;
			background: #fff; 
		}
		.user-details{
			display: none;
		}
		.user-detail{
			padding: 5px;
			/*padding: 0 10px 10px 10px;*/
			background: #4f6dac;
			border-radius: 5px;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
		}
		.user-preview{
			padding: 0 10px;
			justify-content: space-between;
			background: #fff;
			box-shadow: 0px 0px 3px 0px #0C8FBE;
			border-radius: 5px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
			cursor: pointer;
			color: #000;
		}
		.user-preview p{
			margin: 5px 0; 
		}
		.cta-edit-user{
			font-size: 13px;
		}
		.user-preview .cta-edit-user a{
			text-align: center;
			text-decoration: underline;
			color: #244895;
			z-index: 999;
		}
		.user-detail .d-flex {
			justify-content: flex-start;
			padding: 10px;
			background: #fff;
			border-radius: 5px;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;

		}
		.user-details .d-flex p{
			margin: 10px;
		}
		.user-details p span{
			color: #0C8FBE;
		}

		.user.active .user-preview{
			background: #0C8FBE;
			color: #fff;
		}

		.dataTables_length select {
		    background-color: #fff !important;
		}
		#example_wrapper{
			padding: 10px 0;
		    background: #c5c5c5;
	        border: 1px solid;
	        font-size: 13px !important;
		}
		#example_filter{
			margin-bottom: 20px;
		}
		.table-header{
			justify-content: flex-start;
			margin-bottom: 10px;
		}
		.table-header .search-bar input{
			border : none;
			border-bottom: 1px solid #244895;
		}
		.table-header .search-bar input:focus{
			outline: none;
			border-bottom-color: #c5c5c5;
		}
		thead{
			background: #244895;
			color: #fff;
		}
		tbody tr:nth-child(odd) {
			cursor: pointer;
		}
		tbody td{
			padding-left: 5px;
		}
		#example_filter input[type="search"] {
		    background: #fff;
		}
		tbody tr:nth-child(4n+1){
			background: #e0e0e0;  
		}
		.pagination {
			margin-top: 20px;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.pagination a {
			text-decoration: none;
			color: #000;
			border-right: 1px solid #000;
			padding: 0px 5px; 
		}
		.pagination a:last-child {
			border-right: none;
		}
		.pagination a.active {
		  background-color: #88D5E9;
		  color: #fff;
		}

		.pagination a:hover:not(.active) {background-color: #88D5E9; color: #fff;}
	</style>
	<body>
		<?php require_once("header/header.php"); ?>
		<main class="d-flex">
		 	<?php require_once("sideNav/sideNav.php"); ?>
			<div class="te-container">
				<div class="users-view"> 
					<div class="d-flex table-header">
						<div class="search-bar">
							<input type="text" name="userSearch" class="" placeholder="Search User" />
						</div>
						<div class="sort-bar"></div>
					</div>
					<table id="example" class="display" style="width:100%" cellspacing="5px">
				        <thead>
				            <tr>
				                <th>First Name</th>
				                <th>Last Name</th>
				                <th>Email</th>
				                <th>Employee Code</th>
				                <th></th>
				            </tr>
				        </thead>
				        <tbody>
						<?php foreach($data=$userlist->result_array() as $row){ ?>	
				        	<tr>
				                <td><?php echo $row['firstName']; ?></td>
				                <td><?php echo $row['userName']; ?></td>
				                <td><?php echo $row['userName']; ?></td>
				                <td><?php echo $row['userName']; ?></td>
				                <td><a id="editData" href="<?php echo _ROOT; ?>User/updateUserForm/<?php echo $row['id']; ?>"><span class='cta-edit-user'>Edit</a></td>
				            </tr>
				            <tr class="user-details"> 
					            <td colspan='5' >
					            	<div class="user-detail">
										<div class="d-flex">
											<input type='text' style='display:none' id='dataId' value='<?php echo $row['id']; ?>'>
											<p>User Name: <span><?php echo $row['userName']; ?></span></p>
											<p>Gender: <span><?php echo $row['userName']; ?></span></p>
											<p>Date of Birth: <span><?php echo $row['userName']; ?></span></p>
											<p>Mobile: <span><?php echo $row['userName']; ?></span></p>
											<p>Mobile Work: <span><?php echo $row['userName']; ?></span></p>
											<p>Street: <span><?php echo $row['userName']; ?></span></p>
											<p>Postal Code: <span><?php echo $row['userName']; ?></span></p>
											<p>City: <span><?php echo $row['userName']; ?></span></p>
											<p>State: <span><?php echo $row['userName']; ?></span></p>
											<p>Country: <span><?php echo $row['userName']; ?></span></p>
											<p>Education: <span><?php echo $row['userName']; ?></span></p>
											<p>Manager: <span><?php echo $row['userName']; ?></span></p>
											<p>Designation: <span><?php echo $row['userName']; ?></span></p>
											<p>Media: <span><?php echo $row['userName']; ?></span></p>
											<p>Campaign: <span><?php echo $row['userName']; ?></span></p>
											<p>University: <span><?php echo $row['userName']; ?></span></p>
											<p>Department: <span><?php echo $row['userName']; ?></span></p>
										</div>
									</div>
								</td>
							</tr>
						<?php }?>
						</table>
								</td>
				            </tr>
				        </tbody>
				    </table>
				    <div class="table-footer">
						<div class="pagination">
						    <a href="#">&laquo;</a>
						    <a href="#">1</a>
						    <a href="#" class="active">2</a>
						    <a href="#">3</a>
						    <a href="#">4</a>
						    <a href="#">5</a>
						    <a href="#">6</a>
						    <a href="#">&raquo;</a>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

  	<script>
		$(document).ready(function(){
			$('.user').click(function(){
				$('.user').removeClass('active');
				$(this).addClass('active');
				$('.user-details').slideUp();
				$(this).find('.user-details').slideDown();
			});

			$('header .hamburger-menu').click(function(){
				$('.side-nav').toggleClass('squeezed');
				$('.te-container').toggleClass('stretched');
			});

			$('tr').click(function(){
				console.log($(this).parent().parent());
				$(this).next('.user-details').slideToggle();
			});
		});


	// $("#editData").on("click",function(){
	// 	var dataId = $("#dataId").val();
	// 	var url = "<?php echo _ROOT; ?>/User/updateUserForm";
	// 	$.post(url,{dataId : dataId},function(){
	// 	});
	// });

	</script>

</html>