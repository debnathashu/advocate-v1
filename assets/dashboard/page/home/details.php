<div class="row">
	<div class="col-md-12 margin20">
		<div class="panel panel-default bounceIn">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-magic"></i> Profile Details
				</h3>
			</div>
			<div class="panel-body">
				<div class="col-sm-12 sky-form-columns contact-sky-option">
					<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
						<fieldset>	
							<p class="margin30">Change Profile Details.</p><br>
							<section>
								<label class="label">Phone *</label>
								<label class="input">
									<i class="icon-append fa fa-phone"></i>
									<input type="text" name="phone" id="phone" value="<?php echo $row_profile['phone']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Email *</label>
								<label class="input">
									<i class="icon-append fa fa-phone"></i>
									<input type="email" name="email" id="email" value="<?php echo $row_profile['email']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Address *</label>
								<label class="input">
									<i class="icon-append fa fa-map-marker"></i>
									<input type="text" name="address" id="address" value="<?php echo $row_profile['address']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Facebook *</label>
								<label class="input">
									<i class="icon-append fa fa-map-marker"></i>
									<input type="text" name="fb" id="fb" value="<?php echo $row_profile['facebook']; ?>" required>
								</label>
							</section>
						</fieldset>
						<footer>
							<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
							<button type="submit" name="updated" id="updated" class="btn btn-theme-bg btn-lg pull-right">Update</button>
						</footer>
						<div class="message">
							<i class="fa fa-check"></i>
							<p>Profile Successfully Updated.</p>
							<p><a href="dashboard.php?page=about-me&slug=details">Reload To View</a></p>
						</div>
					</form>	
				</div>					
			</div>
		</div>
	</div><!--experience-->
</div>