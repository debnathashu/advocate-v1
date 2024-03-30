<div class="top-bar-dark">            
	<div class="container">
		<div class="row">
			<div class="col-sm-4 hidden-xs">
				<div class="top-bar-socials">
					<a href="http://facebook.com/<?php echo $row_settings['fb']; ?>" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-facebook">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-facebook"></i>
					</a>
					<a href="http://twitter.com/<?php echo $row_settings['tw']; ?>" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-twitter">
						<i class="fa fa-twitter"></i>
						<i class="fa fa-twitter"></i>
					</a>
					<a href="http://plus.google.com/<?php echo $row_settings['gplus']; ?>" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-google-plus">
						<i class="fa fa-google-plus"></i>
						<i class="fa fa-google-plus"></i>
					</a>
					<a href="<?php echo $row_settings['link']; ?>" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-linkedin">
						<i class="fa fa-linkedin"></i>
						<i class="fa fa-linkedin"></i>
					</a>
					<a href="http://youtube.com/BrainLockerLtd" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-google-plus">
						<i class="fa fa-youtube"></i>
						<i class="fa fa-youtube"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-8 text-right">
				<ul class="list-inline top-dark-right">                      
					<li class="hidden-sm hidden-xs"><a href="index.php"><i class="fa fa-envelope"></i> View Site</a></li>
					<li><a href="dashboard.php?page=message"><i class="fa fa-envelope"></i> Message</a></li>
					<?php
							echo "<li><a href=\"dashboard.php?page=home\"><i class=\"fa fa-user\"></i>" .$_SESSION["Name"]."</a></li> <li><a href=\"logout.php\"><i class=\"fa fa-sign-out\"></i> Logout</a></li>";
					?>
					<!--<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>->
					<!--<li><a href="#"><i class="fa fa-user"></i> Sign Up</a></li>-->
					<!--<li><a class="topbar-icons" href="#"><span><i class="fa fa-search top-search"></i></span></a></li>-->
				</ul>
				<!--
				<div class="search">
					<form role="form">
						<input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
						<span class="search-close"><i class="fa fa-times"></i></span>
					</form>
				</div>
				-->
			</div>
		</div>
	</div>
</div>