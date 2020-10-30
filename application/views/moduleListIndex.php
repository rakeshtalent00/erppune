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
				                <th>Name</th>
				                <th>Title</th>
				                <th>Status</th>
				                <th>description</th>
				                <th></th>
				            </tr>
				        </thead>
				        <?php foreach($moduleList as $row){ ?>	
		        	<tr>
		                <td><?php echo $row->name ?></td>
		                <td><?php echo $row->title ?></td>
						<?php if($row->status == 1){ ?>
		                <td>Active</td>
						<?php }else{ ?>
							<td>In Active</td>
						<?php } ?>
		                <td><?php echo $row->description ?></td>
		                <td><a id="editData" href="<?php echo _ROOT; ?>Module/updateModuleForm/<?php echo $row->id; ?>"><span class='cta-edit-user'>Edit</a></td>
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