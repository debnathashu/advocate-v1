<div class="row">
	<div class="col-md-12 margin20">
		<div class="panel panel-default bounceIn">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-magic"></i> More
				</h3>
			</div>
			<div class="panel-body">
				<div class="col-sm-12 sky-form-columns contact-sky-option">
					<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
						<fieldset>	
							<p class="margin30">Change More Settings.</p><br>
							<section>
								<label class="label">Logo </label>
								<img src="assets/img/<?php echo $row_settings['logo']; ?>" alt="Adv Mahbub Alam" title="Logo" height="50px">
								<label class="input">
									<i class="icon-append fa fa-map-tag"></i>
									<input type="file" name="logo" id="logo">
								</label>
							</section>
							<section>
								<label class="label">Address 1 *</label>
								<label class="input">
									<i class="icon-append fa fa-map-marker"></i>
									<input type="text" name="addressr" id="addressr" value="<?php echo $row_settings['addressr']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Address 2 *</label>
								<label class="input">
									<i class="icon-append fa fa-map-marker"></i>
									<input type="text" name="address" id="address" value="<?php echo $row_settings['address']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Phone *</label>
								<label class="input">
									<i class="icon-append fa fa-phone"></i>
									<input type="number" name="phone" id="phone" value="<?php echo $row_settings['phone']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Email *</label>
								<label class="input">
									<i class="icon-append fa fa-envelope"></i>
									<input type="email" name="email" id="email" value="<?php echo $row_settings['email']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Info Email *</label>
								<label class="input">
									<i class="icon-append fa fa-envelope"></i>
									<input type="email" name="iemail" id="iemail" value="<?php echo $row_settings['iemail']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Fax</label>
								<label class="input">
									<i class="icon-append fa fa-fax"></i>
									<input type="text" name="fax" id="fax" value="<?php echo $row_settings['fax']; ?>">
								</label>
							</section>
							<section>
								<label class="label">Skype *</label>
								<label class="input">
									<i class="icon-append fa fa-skype"></i>
									<input type="text" name="skype" id="skype" value="<?php echo $row_settings['skype']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Facebook *</label>
								<label class="input">
									<i class="icon-append fa fa-facebook"></i>
									<input type="text" name="fb" id="fb" value="<?php echo $row_settings['fb']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Twitter *</label>
								<label class="input">
									<i class="icon-append fa fa-twitter"></i>
									<input type="text" name="tw" id="tw" value="<?php echo $row_settings['tw']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Google Plus *</label>
								<label class="input">
									<i class="icon-append fa fa-google-plus"></i>
									<input type="text" name="gplus" id="gplus" value="<?php echo $row_settings['gplus']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Linkedin *</label>
								<label class="input">
									<i class="icon-append fa fa-linkedin"></i>
									<input type="text" name="link" id="link" value="<?php echo $row_settings['link']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">About *</label>
								Type<xmp>" <br> "</xmp> for line break
								<label class="textarea">
									<i class="icon-append fa fa-briefcase"></i>
									<textarea rows="4" name="about" id="about" required><?php echo $row_settings['about']; ?></textarea>
								</label>
							</section>
						</fieldset>
						<footer>
							<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
							<button type="submit" name="updatem" id="updatem" class="btn btn-theme-bg btn-lg pull-right">Update</button>
						</footer>
						<div class="message">
							<i class="fa fa-check"></i>
							<p>More Settings Successfully Updated.</p>
							<p><a href="dashboard.php?page=main-home&slug=more">Reload To View</a></p>
						</div>
					</form>	
				</div>					
			</div>
		</div>
	</div><!--experience-->
</div>