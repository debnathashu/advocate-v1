<div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="dashboard.php?page=home"><img src="assets/img/<?php echo $row_settings['logo']; ?>" alt="Adv Mahbub Alam"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="dashboard.php?page=home">Dashboard</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Practice Areas <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						<li><a href="dashboard.php?page=add-practice">Add New</a></li>
						<li><a href="dashboard.php?page=view-practice">View All</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Attorneys <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						<li><a href="dashboard.php?page=add-attorneys">Add New</a></li>
						<li><a href="dashboard.php?page=view-attorneys">View All</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Case Results <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						<li><a href="dashboard.php?page=add-case">Add New</a></li>
						<li><a href="dashboard.php?page=open-case">Open Case</a></li>
						<li><a href="dashboard.php?page=closed-case">Closed Case</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Legal News <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						<li><a href="dashboard.php?page=add-legal-news">Add New</a></li>
						<li><a href="dashboard.php?page=legal-news">View All</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Literature <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						<li><a href="dashboard.php?page=add-literature">Add New</a></li>
						<li><a href="dashboard.php?page=view-literature">View All</a></li>
					</ul>
				</li>
				<!--
				<li class="dropdown active ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Test <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">Multi level menu </a>
							<ul class="dropdown-menu">
								<li><a href="#"> menu level 2</a></li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">menu level 2 </a>
									<ul class="dropdown-menu">
										<li><a href="#"> menu level 3</a></li>
										<li><a href="#"> menu level 3</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						<li><a href="dashboard.php?page=change-password">Change Password</a></li>
						<li><a href="dashboard.php?page=main-home">Main Home</a></li>
						<li><a href="dashboard.php?page=about-me">About Me</a></li>
						<li><a href="dashboard.php?page=user">User</a></li>
					</ul>
				</li>
				<!--menu home li end here-->
				<!--               
				<li class="dropdown">
					<a href="#" class=" dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> Sign In</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
						<form role="form">
							<h4>Signin</h4>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" placeholder="Username">
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" class="form-control" placeholder="Password">
								</div>
								<div class="checkbox pull-left">
									<label><input type="checkbox"> Remember me</label>
								</div>
								<a class="btn btn-theme-bg pull-right">Login</a>
								<button type="submit" class="btn btn-theme pull-right">Login</button>                 
								<div class="clearfix"></div>
								<hr>
								<p>Don't have an account! <a href="#">Register Now</a></p>
							</div>
						</form>
					</div>
				</li> menu login li end here-->
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--container-->
</div>