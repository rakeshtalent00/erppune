<header>
	<div class="d-flex">
		<div class="header-left d-flex">
			<div class="hamburger-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<a href="#"><img class="logo-image" src="assets/images/logo_te.png"></a>
		</div>
		<div class="header-right">
			<p class="d-flex">
				<img class="user-image" src="assets/images/user.png">
				<span>User Name</span>
			</p>
			<ul class="d-flex f-col">
				<li>User Role</li>
				<li>Settings</li>
				<li>Logout</li>
			</ul>
		</div>
	</div>
</header>
<script>
	$(document).ready(function () {
		$('.header-right p').click(function () {
			$('.header-right ul').slideToggle();
		});
	});
</script>

</html>