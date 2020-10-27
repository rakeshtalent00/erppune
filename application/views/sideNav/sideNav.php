
		<nav class="side-nav">
			<div class="container">
				<ul class="menu d-flex f-col">
					<li>
						<i class="fas fa-users"></i>User Management
						<ul class="submenu">
						<li><a href="<?php  echo _ROOT; ?>userform"><i class="fas fa-user-plus"></i>Create User</a></li>
						<li><a href="<?php  echo _ROOT; ?>userList"><i class="fas fa-users"></i>User List</a></li>
						</ul>
					</li>
					<li>
						<i class="fas fa-users-cog"></i>Role Management
						<ul class="submenu">
						<li><a href="<?php  echo _ROOT; ?>roleForm"><i class="fas fa-user-cog"></i>Create Role</a></li>
						<li><a href="<?php  echo _ROOT; ?>roleList"><i class="fas fa-users-cog"></i>Role List</a></li>
						</ul>
					</li>
					<li><i class="fas fa-home"></i>Lorem</li>
					<li><i class="fas fa-home"></i>Lorem</li>
					<li>
						<i class="fas fa-home"></i>Lorem
						<ul class="submenu">
							<li><i class="fas fa-home"></i>Ipsum</li>
							<li><i class="fas fa-home"></i>Ipsum</li>
						</ul>
					</li>
					<li><i class="fas fa-home"></i>Lorem</li>
				</ul>
			</div>
		</nav>
	
	<script>
		$(document).ready(function(){
			$('.side-nav li .submenu').parent().addClass('has-submenu');

			$('.side-nav li').click(function(){
				$('.side-nav li').removeClass('active');
				$(this).addClass('active');
				$('.submenu').slideUp();
				$(this).find('.submenu').slideDown();
			});
		});
	</script>