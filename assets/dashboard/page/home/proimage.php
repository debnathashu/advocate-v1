<div class="row">
	<div class="col-md-12 margin20">
		<div class="panel panel-default bounceIn">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-image"></i> Profile Image
				</h3>
			</div>
			<div class="panel-body">
				<div class="col-sm-6">
					<img src="assets/img/<?php echo $row_profile['proimage']; ?>" class="img-responsive" alt="Profile Image" title="Advocate Mahbub Alam">
				</div>
				<div class="col-sm-6 sky-form-columns contact-sky-option">
					<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
						<fieldset>	
							<p class="margin30">Change Profile Image.</p><br>
							<section>
								<label class="label">Profile Image *</label>
								<label class="input">
									<i class="icon-append fa fa-image"></i>
									<input type="file" name="imagep" id="imagep" required><span>For better quality need 500x500 pixel.</span>
								</label>
							</section>
						</fieldset>
						<footer>
							<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
							<button type="submit" name="updatep" id="updatep" class="btn btn-theme-bg btn-lg pull-right">Update</button>
						</footer>
						<div class="message">
							<i class="fa fa-check"></i>
							<p>Profile Image Successfully Updated.</p>
							<p><a href="dashboard.php?page=about-me&slug=proimage">Reload To View</a></p>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div><!--why hire us-->
</div>