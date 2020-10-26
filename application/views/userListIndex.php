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

		
	    </head>
	<style type="text/css">
		body{
			background: #c5c5c5;
		}
		.te-container{
			position: relative;
			margin: 0;
			width: 77%;
			top: 70px;
			margin-left: auto;
			padding: 20px;
		}
		.users-view{
			padding: 20px;
			background: #fff; 
		}
		.user-details{
			display: none;
		}
		.user-detail{
			padding: 10px;
			/*padding: 0 10px 10px 10px;*/
			background: #0C8FBE;
			border-radius: 5px;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
		}
		.user-preview{
			padding: 0 20px;
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
		.user-preview .cta-edit-user a{
			text-align: center;
			text-decoration: underline;
			color: #244895;
		}
		.user-detail .d-flex {
			justify-content: flex-start;
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;

		}
		.user-details .d-flex p{
			width: 20%;
			margin: 5px 0;
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
		thead{
			background: #07d2f3;
			color: #fff;
		}
		#example_filter input[type="search"] {
		    background: #fff;
		}
		tbody tr:nth-child(4n+1){
			background: #e0e0e0;  
		}
	</style>
	<body>
		<?php require_once("header/header.php"); ?>
		 <main class="d-flex">
		 <?php require_once("sideNav/sideNav.php"); ?>
			<main class="te-container users-view">
		  
			<table id="example" class="display" style="width:100%">
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
			});

			$('tr').click(function(){
				console.log($(this).parent().parent());
				$(this).next('.user-details').slideToggle();
			});
	// $("#editData").on("click",function(){
	// 	var dataId = $("#dataId").val();
	// 	var url = "<?php echo _ROOT; ?>/User/updateUserForm";
	// 	$.post(url,{dataId : dataId},function(){
	// 	});
	// });

	</script>

</html>