<div class="row">
			<div class="col-md-12 margin20">
				<div class="panel panel-default bounceIn">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-user"></i> User Image
						</h3>
					</div>
					<div class="panel-body">
						<div class="col-sm-6">
							<img src="assets/img/slider/<?php echo $row_slider['si2']; ?>" class="img-responsive" alt="User Image" title="User Image">
						</div>
						<div class="col-sm-6 sky-form-columns contact-sky-option">
							<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
								<fieldset>	
									<p class="margin30">Change User Image.</p><br>
									<section>
										<label class="label">User Image *</label>
										<label class="input">
											<i class="icon-append fa fa-tag"></i>
											<input type="file" name="imageu" id="imageu" required><span>Must have a transparent background.<br>For better quality need 525x363 pixel.</span>
										</label>
									</section>
								</fieldset>
								<footer>
									<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
									<button type="submit" name="updateu" id="updateu" class="btn btn-theme-bg btn-lg pull-right">Update</button>
								</footer>
								<div class="message">
									<i class="fa fa-check"></i>
									<p>User Image Successfully Updated.</p>
									<p><a href="dashboard.php?page=main-home&slug=si2">Reload To View</a></p>
								</div>
							</form>	
						</div>						
					</div>
				</div>
			</div><!--why hire us-->
		</div>