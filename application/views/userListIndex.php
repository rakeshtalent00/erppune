<?php 
define("_ROOT",base_url());
?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="<?php  echo _ROOT; ?>assets/scripts/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/user-upload-style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/user-list-view.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/custom-basic-styles.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/sideNav.css"/>
		<link rel="stylesheet" type="text/css" href="<?php  echo _ROOT; ?>assets/css/header.css"/>
		<script src="<?php  echo _ROOT; ?>assets/scripts/font-awesome.js"></script>
		<script src="<?php  echo _ROOT; ?>assets/scripts/custom-common.js"></script>
    </head>
	
	<body>
		<?php require_once("header/header.php"); ?>
		<main class="d-flex">
		 	<?php require_once("sideNav/sideNav.php"); ?>
			<div class="te-container">
				<div class="users-view"> 
					<div class="d-flex table-header">
						<div class="sort-bar d-flex">
							<p>Sort By: </p>
							<input type="text" name="userSearch" class="" placeholder="Sort By" />
						</div>
						<div class="search-bar">
							<input type="text" name="userSearch" class="" placeholder="Search User" />
						</div>
					</div>
					<table id="example" class="display" style="width:100%" cellspacing="3px">
				        <thead>
				            <tr>
				                <th>First Name</th>
				                <th>Last Name</th>
				                <th>Email</th>
				                <th>Employee Code</th>
				                <th></th>
				            </tr>
				        </thead>
				        <?php foreach($data=$userlist->result_array() as $row){ ?>	
		        	<tr>
		                <td><?php echo $row['firstName']; ?></td>
		                <td><?php echo $row['lastName']; ?></td>
		                <td><?php echo $row['userEmail']; ?></td>
		                <td><?php echo $row['employeeCode']; ?></td>
		                <td><a id="editData" href="<?php echo _ROOT; ?>User/updateUserForm/<?php echo $row['id']; ?>"><span class='cta-edit-user'>Edit</a></td>
		            </tr>
		            <tr class="user-details"> 
			            <td colspan='5' >
			            	<div class="user-detail">
								<div class="d-flex">
									<input type='text' style='display:none' id='dataId' value='<?php echo $row['id']; ?>'>
									<p>User Name: <span><?php echo $row['userName']; ?></span></p>
									<p>Gender: <span><?php echo $row['gender']; ?></span></p>
									<p>Date of Birth: <span><?php echo $row['dateOfBirth']; ?></span></p>
									<p>Mobile: <span><?php echo $row['mobile']; ?></span></p>
									<p>Mobile Work: <span><?php echo $row['mobileWork']; ?></span></p>
									<p>Street: <span><?php echo $row['addressStreet']; ?></span></p>
									<p>Postal Code: <span><?php echo $row['postalCode']; ?></span></p>
									<p>City: <span><?php echo $row['city']; ?></span></p>
									<p>State: <span><?php echo $row['state']; ?></span></p>
									<p>Country: <span><?php echo $row['country']; ?></span></p>
									<p>Education: <span><?php echo $row['education']; ?></span></p>
									<p>Status: <span><?php echo $row['status']; ?></span></p>
									<p>Manager: <span><?php echo $row['reportsTo']; ?></span></p>
									<p>Designation: <span><?php echo $row['designation']; ?></span></p>
									<p>Media: <span><?php echo $row['media']; ?></span></p>
									<p>Campaign: <span><?php echo $row['campaign']; ?></span></p>
									<p>University: <span><?php echo $row['universityId']; ?></span></p>
									<p>Department: <span><?php echo $row['departmentId']; ?></span></p>
									<p>External Access: <span><?php echo $row['externalAccess']; ?></span></p>
									<!-- <p>User Role: <span><?php echo $row['roleId']; ?></span></p> -->
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
		<!--	<style>
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
			</style>
			<div class="te-container">
				<div class="access-control">
					<div class="user-role form-group">
						<label>Select User Role</label>
						<select name="user-role">
							<option>Select</option>
							<option>Admin</option>
							<option>Manager</option>
							<option>Team Lead</option>
							<option>Developer</option>
							<option>User</option>
						</select>
					</div>
					<div class="permission-list d-flex f-col">
						<article class="access-permission">
							<div class="d-flex">
								<span class="perm-label">Access to Pages <i class="fas fa-chevron-down"></i></span>
								<div class="perm-switch">
				                    <label class="switch">
				                        <input type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
				                </div>
			                </div>
		                </article>
						<article class="access-permission">
							<div class="d-flex">
								<span class="perm-label">Access to Pages <i class="fas fa-chevron-down"></i></span>
								<div class="perm-switch">
				                    <span>No</span>
				                    <label class="switch">
				                        <input type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
				                    <span>Yes</span>
				                </div>
			                </div>
		                </article>
						<article class="access-permission">
							<div class="d-flex">
								<span class="perm-label">Access to Pages <i class="fas fa-chevron-down"></i></span>
								<div class="perm-switch">
				                    <span>No</span>
				                    <label class="switch">
				                        <input type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
				                    <span>Yes</span>
				                </div>
			                </div>
			                <article class="access-permission sub-permission">
								<div class="d-flex">
									<span class="perm-label">Access to Pages <i class="fas fa-chevron-down"></i></span>
									<div class="perm-switch">
					                    <span>No</span>
					                    <label class="switch">
					                        <input type="checkbox">
					                        <span class="slider round"></span>
					                    </label>
					                    <span>Yes</span>
					                </div>
				                </div>
			                </article>
			                <article class="access-permission sub-permission">
								<div class="d-flex">
									<span class="perm-label">Access to Pages <i class="fas fa-chevron-down"></i></span>
									<div class="perm-switch">
					                    <span>No</span>
					                    <label class="switch">
					                        <input type="checkbox">
					                        <span class="slider round"></span>
					                    </label>
					                    <span>Yes</span>
					                </div>
				                </div>
			                </article>
		                </article>
						<article class="access-permission">
							<div class="d-flex">
								<span class="perm-label">Access to Pages <i class="fas fa-chevron-down"></i></span>
								<div class="perm-switch">
				                    <span>No</span>
				                    <label class="switch">
				                        <input type="checkbox">
				                        <span class="slider round"></span>
				                    </label>
				                    <span>Yes</span>
				                </div>
			                </div>
		                </article>
					</div>
				</div>
			</div>
		-->
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