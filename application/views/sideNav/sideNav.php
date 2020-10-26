

		<nav class="side-nav">
			<div class="container">
				<ul class="menu d-flex f-col">
					
					
					<li>User Management
						<ul class="submenu">
						<li><a href="<?php  echo _ROOT; ?>userform">Create User</a></li>
						<li><a href="<?php  echo _ROOT; ?>userList">User List</a></li>
						</ul>
					</li>
					<li>Role Management
						<ul class="submenu">
						<li><a href="<?php  echo _ROOT; ?>roleForm">Create Role</a></li>
						<li><a href="<?php  echo _ROOT; ?>roleList">Role List</a></li>
						</ul>
					</li>
					<li>Lorem</li>
					<li>Lorem</li>
					<li>Lorem
						<ul class="submenu">
							<li>Ipsum</li>
							<li>Ipsum</li>
						</ul>
					<li>Lorem</li>
				</ul>
			</div>
		</nav>
	
	<script>
		$(document).ready(function(){
			$('.side-nav li').click(function(){
				$('.side-nav li').removeClass('active');
				$(this).addClass('active');
				$('.submenu').slideUp();
				$(this).find('.submenu').slideDown();
			});
		});
	</script>